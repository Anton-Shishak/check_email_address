# Поиск мобильных номеров телефонов

## Требования
- PHP 7.4

## Установка
```bash
$ composer require shishak/check_email_address
```

## Использование
```php
<?php 
$processor = new Email();
$resultCheck = $processor->CheckEmail(string $email);
echo($resultCheck);
```
