<?php

$a = 12;

$b = -21;

echo "<h3>Задание 1</h3> <br> a = $a, b = $b <br><br>";

if($a >= 0 && $b >= 0){

$c = $a - $b;

echo "Разность a и b равна:".$c;

} else if($a <= 0 && $b <= 0){

$c = $a * $b;

echo "Произведение a и b равно:".$c;

} else if($a <= 0 && $b >= 0 || $a >= 0 && $b <= 0){

$c = $a + $b;

echo "Сумма a и b равна:" . $c;

};

echo "<br><br><h3>Задание 2 - was deleted by teacher</h3> <br>";

echo "<h3>Задание 3</h3> <br>";

function summary($a, $b) {

return $a + $b;

}

function difference($a, $b) {

return $a - $b;

}

function multiply($a, $b) {

return $a * $b;

}

function divide ($a, $b) {

return $a / $b;

}


echo "Cумма $a и $b равна " . summary($a, $b) . "<br>";
echo "Разность $a и $b равна " . difference($a, $b) . "<br>";
echo "Произведение $a и $b равно " . multiply($a, $b) . "<br>";
echo "Частное $a и $b равно " . divide($a, $b) . "<br>";

echo "<h3>Задание 4</h3> <br>";

function arithmeticAction ($a, $b, $action){

switch($action){
case 'summary':
    echo "Cумма $a и $b равна " . summary($a, $b) . "<br>";
    break;
case 'difference':
    echo "Разность $a и $b равна " . difference($a, $b) . "<br>";
    break;
case 'multiply':
    echo "Произведение $a и $b равно " . multiply($a, $b) . "<br>";
    break;
case 'divide':
    echo "Частное $a и $b равно " . divide($a, $b) . "<br>";
    break;
}
}

echo arithmeticAction(2, 3, 'multiply');
?>

<?php
echo "<h3>Задание 5</h3>";

$greeting = 'Добрый день!';

$infoText = 'Этот сайт сгенерирован при помощи php';

$date = date ('l jS \of F Y ');

?>

<h2><?= $greeting?></h2>

<p><?= $infoText?></p>

<footer>Сегодня <?= $date?></footer>

<?php
echo "<h3>Задание 6</h3>";

function power($val, $pow){

  if ($pow == 0){
  return 1;
  } else {
  return $val *= power($val, $pow - 1);

  }


};

echo power(2, 3);
?>

<?php
echo "<h3>Задание 7</h3>";

$hours = 911;

$minutes = 101;

$ending = null;

function declination($number) {

if ($number % 10 == 0 || $number % 100 == 11 ){

   $endingHours = ' часов';
   $endingMinutes = ' минут';

} else if($number % 10 == 1){

   $endingHours = ' час';
   $endingMinutes = ' минута';

} else if ($number % 10 > 1 && $number % 10 < 5){

   $endingHours = ' часа';
   $endingMinutes = ' минуты';

} else if ($number % 10 > 4 && $number % 10 < 9 ){

   $endingHours = ' часов';
   $endingMinutes = ' минут';

  }



return [$endingHours, $endingMinutes];
}

echo $hours. declination($hours)[0] . " " . $minutes . declination($minutes)[1];

?>