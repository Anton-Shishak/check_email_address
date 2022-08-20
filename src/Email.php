<?php
namespace AShishak\CheckEmailAddress;

class Email
{
    public static function CheckEmail(string $email): bool{
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            if (preg_match("/[@](.+)$/u", $email, $match)){
                return checkdnsrr($match[1], 'MX');
            } else
                return false;
        } else
            return false;
    }
}