<?php
define("TOKEN_KEY", "7234946"); //объявление константы

echo 'Hello World! $a' . TOKEN_KEY . "<br>" ;
$b = "Hello World! " . $a . "<br>";
echo $b;
// unset($a); //удаление переменной
echo '$_POST -' . print_r($_POST) . "<br>";//глобальная переменная
echo '$_REQUEST -' . print_r($_REQUEST) . "<br>";
echo '$_SERVER -' . print_r($_SERVER) . "<br>";
echo '$_SESSION -' . print_r($_SESSION) . "<br>";
$a="4";
$b= 4+(int)$a; //преобразование строк
echo $b
?>