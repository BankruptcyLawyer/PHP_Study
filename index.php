<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
//Первое задание
$name = "Ярослав";
$age = "26";
echo"Меня зовут: $name<br>";
echo"Мне $age лет<br>";
echo"\"!|/'\"\\<br>";
//Второе задание

const PAINTINGS = 80;
const FELT_PAN = 23;
const PENCILS = 40;
$other = PAINTINGS - FELT_PAN - PENCILS;
echo"$other<br>";

// Третье задание

$age = 18;
if ($age>=18 && $age<65){
echo'Вам ещё работать и работать<br>';
} elseif ($age>65){
echo'Вам пора на пенсию<br>';
} elseif ($age<=17 && $age>=1){
echo'Вам ещё рано работать<br>';
} else
echo'Неизвестный возраст<br>';

// Четвёртое задание

$day = 1;
$true = true;
switch ($day) {
    case 0:
        echo"Неизвестный день<br>";
        break;
    case $day>=1 && $day<=5:
        echo"Это рабочий день<br>";
        break;
    case $day>5 && $day<=7:
        echo"Это выходной день<br>";
        break;
    default:
    echo"Неизвестный день<br>";
} 

// Пятое задание

$cars["BMW"] = array(
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => 2015
    );
$cars["Toyota"] = array(
   "model" => "Camry",
    "speed" => 150,
    "doors" => 4,
    "year" => 2016
    );
$cars["Opel"] = array(
    "model" => "Astra",
    "speed" => 130,
    "doors" => 4,
    "year" => 2017
    );
   foreach ($cars as $key1 => $value) {
       echo "<br>" . "CAR" . " " . $key1 . "<br>";
		foreach ($value as $key2 => $elem) {
			echo $elem . " ";
		};
	};
    echo"<br>";
    // Шестое задание
    ?>
    <?php
 $cols = 10;
 $rows = 10;
 ?>
 <style>
 table { border: 1px solid; }
 td { padding: 5px; text-align: center; border: 1px solid}
 </style>
 
 <table>
 <?php
 for ($tr = 1; $tr <= $rows; $tr++)
 {
     echo '<tr>';
 
     for($td = 1; $td <= $cols; $td++)
     {
        if ($tr%2 ==0 && $td%2 ==0){ 
         echo '<td>', '(', $tr * $td, ')', '</td>';
        } elseif (($tr%2 !=0 && $td%2 !=0)){
         echo '<td>', '[', $tr * $td, ']', '</td>';
        } else {
        echo '<td>', $tr * $td, '</td>';
        }
     }
     echo "</tr>";
 }
 ?>
 </table>
</body>
</html>