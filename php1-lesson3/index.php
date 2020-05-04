<?php
echo "<h2>Задание 1</h2>";

$x = 1;

while($x<101){

if($x % 3 == 0){

    echo $x;

}

$x++;

}

echo "<h2>Задание 2</h2>";
$x = 0;
echo $x . " - ноль ";
do{

++$x;

if($x % 2 !== 0) {

echo $x . " -нечетное число ";

} else {

echo $x . " -четное число ";

}

} while ($x < 11)

?>