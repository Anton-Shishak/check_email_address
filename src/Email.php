<?php
namespace AShishak\CheckEmailAddress;

class Email
{

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function CheckEmail(string $email): bool{

        if ($this->EmailNameValidate($email)){
            return $this->CheckMXByHost($this->getHostByEmail($email));
        }
            return false;
    }

    public function EmailNameValidate(string $email): string{
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function getHostByEmail(string $email): string{
        if (preg_match("/[@](.+)$/u", $email, $match)){
            return $match[1];
        }
    }

    public function CheckMXByHost(string $host): bool{
        return checkdnsrr($host, 'MX');
    }


}