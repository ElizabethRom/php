<?php
$name = "Lisa";
echo "Hello! My name is " . $name . "<br>";
$age= 20;
echo "I'm age " . $age . "<br>";

$a=10;
$b=15;
$rez=$a+$b;
echo $a ."+".  $b ."=".  $rez . "<br>";

$a+=+$b-$b=$a;
echo $a ."+".  $b ."=".  $rez . "<br>";
echo "<br>";

$question1= "Кто написал произведение 'Евгений Онегин'?";
$question2= "Какие из произведений ниже написал Олдос Хаксли?";
$question3= "Читали ли вы какое-нибудь произведение Олдоса Хаксли?Если да, то напишите какое и ваше впечатление о книге.";

echo $question1 . "
<form>
    <label>
        <input type='radio' name='question1' value='Александр Пушкин'/>
        Александр Пушкин
    </label>
    <label>
        <input type='radio' name='question1' value='Евгений Онегин'/> 
        Евгений Онегин
    </label> 
    <label>
        <input type='radio' name='question1' value='Евгений Замятин'/> 
        Евгений Замятин
    </label>
    <label>
        <input type='radio' name='question1' value='Лев Толстой'/> 
        Лев Толстой
    </label>   
</form>
<br>";
echo $question2 . "
<form>
    <label>
        <input type='checkbox' name='question2' value='Гений и богиня'/>
        'Гений и богиня'
    </label>
    <label>
        <input type='checkbox' name='question2' value='Тошнота'/> 
        'Тошнота'
    </label> 
    <label>
        <input type='checkbox' name='question2' value='1984'/> 
        '1984'
    </label>
    <label>
        <input type='checkbox' name='question2' value='О дивный новый мир'/> 
        'О дивный новый мир'
    </label>   
</form>
<br>";
echo $question3 . "
<form>
    <textarea></textarea>
</form>
<br>";
echo "<br>";


// $tag = [
// $background_color" = "blue";
// $color" = "red";
// $width" = 100;
// $height" = 100;
// ];
 
// echo $tag[0];

// <meta property="article:tag" content="facebook" />





$numbers = [];
for ($i = 0; $i < 10; $i++) {
    $numbers[]=rand(1,10);
}
echo '<pre>';
print_r($numbers); 
echo '</pre>';


$arr_cities = [
   "656" => [
        "city" => "Москва",
        "street" => "ул.Московская",
        "house" => "д.70"
    ],
    123 => [
        "city" => "г.Орел",
        "street" => "ул.Ефремова",
        "house" => "д.48"
    ],
    456 => [
        "city" => "г.Ейск",
        "street" => "ул.Свердлова",
        "house" => "д.94"
    ],
    789 => [
        "city" => "г.Кисловодск",
        "street" => "ул.Светлая",
        "house" => "д.76"
    ],
    101 => [
        "city" => "г.Новороссийск",
        "street" => "ул.Новая",
        "house" => "д.18"
    ],
    234 => [
        "city" => "г.Краснодар",
        "street" => "ул.Победы",
        "house" => "д.12"
    ],
    765 => [
        "city" => "г.Таганрог",
        "street" => "ул.Таганрогская",
        "house" => "д.54"
    ],
    987 => [
        "city" => "г.Темрюк",
        "street" => "ул.Новоселова",
        "house" => "д.98"
    ],
    480 => [
        "city" => "г.Ростов-на-Дону",
        "street" => "ул.Станиславкого",
        "house" => "213"
    ],
    432 => [
        "city" => "г.Иваново",
        "street" => "ул.Ивановская",
        "house" => "д.23"
    ],
];
echo '<pre>';
print_r($arr_cities); 
echo '</pre>';
?>




