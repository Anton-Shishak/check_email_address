# Проверка адреса электронной почты

## Требования
- PHP 7.0 и выше

## Установка
```bash
$ composer require ashishak/check_email_address
```

## Использование
```php
<?php 
$processor = new Email($email);
$resultCheck = $processor->CheckEmail($processor->email);
echo($resultCheck);
```
