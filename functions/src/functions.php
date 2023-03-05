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
    // Первое задание
    function task1($array, $true = true) {
        $separator = " ";
        if ($true == true){
            echo "<p>" . implode($separator, $array) . "</p>"; 
        } else foreach($array as $key => $value){
                echo "<p>" . "$value" . "</p>";
            };
        };
    $arr = [
        "first" => "one",
        "second" => "two",
        "third" => "three"
    ];
    task1($arr, false);
    echo "<br>";
    // Второе задание
    function task2($operator, ...$numbers){
        $result = 0;
        if ($operator == '+'){
            foreach ($numbers as $n) {
                $result += $n;
            };
        } elseif ($operator == '-'){
            foreach ($numbers as $n) {
                $result -= $n;
        }
     } else {
                echo 'error';
            }
            echo "$result";
        }
    
    task2('+', 10, 2);
    echo "<br>";

    //Третье задание
    function task3($a, $b){

 ?>
 <style>
 table { border: 1px solid; }
 td { padding: 5px; text-align: center; border: 1px solid}
 </style>
 
 <table>
 <?php
 if (is_int($a) == true && is_int($b) == true){
 for ($tr = 1; $tr <= $b; $tr++)
 {
     echo '<tr>';
 
     for($td = 1; $td <= $a; $td++)
     {
        echo '<td>', $tr * $td, '</td>';
     }
     echo "</tr>";
 }
} else {
    echo 'Ошибка, в функцию необходимо передать только целые числа.';
}
    }
    task3(3, 3);
    echo "<br";
    ?>
    </table>
<?php
// Четвёртое задание
date_default_timezone_set('Europe/Moscow');
echo date("d.m.Y H:i:s");
$date = '24.02.2016 00:00:00';
$timestamp = strtotime($date);
echo "<br>";
echo "$timestamp";
echo "<br>";

// Пятое задание

$string = "Карл у Клары украл кораллы";
$lowerString = mb_strtolower($string);
$stringToArray = mb_str_split($lowerString);
$strReplace = str_replace('к', '', $stringToArray);
$finalString = implode($strReplace);
echo $finalString;
echo "<br>";

// Шестое задание

$test = file_put_contents('test.txt', 'Hello again!');
function task6($open){
$file = fopen($open, 'r');
$get = fgets($file);
echo "$get";
}
task6('test.txt');
?>
</body>
</html>