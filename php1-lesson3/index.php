<?php
header('content-type: text/html; charset=utf-8');

echo "<h2>Задание 1</h2>";

$x = 1;

while($x<101){

if($x % 3 == 0){

    echo $x . " ";

}

$x++;

}

echo "<h2>Задание 2</h2>";
$x = 0;

do{

if($x == 0){

echo $x . " - ноль; ";

}

++$x;

if($x % 2 !== 0) {

echo $x . " -нечетное число; ";

} else {

echo $x . " -четное число; ";

}

} while ($x < 11)
;

echo "<h2>Задание 3</h2>";

$cityRegionArray = [

'MoscowRegion' => ['Moscow', 'Zelenograd', 'Klin'],
'LeningradRegion' => ['St.Petersburg', 'Vsevolozhsk', 'Pavlovsk', 'Kronstadt'],
'RyazanRegion' => ['Ryazan', 'Kasimov', 'Korablino', 'Novomichurinsk']

];

foreach($cityRegionArray as $region => $cityArr) {

echo "<h4>$region:</h4>";

    for ($i = 0; $i < count($cityArr); $i++) {

        echo $cityArr[$i].  ' <br> ';

        if($i == count($cityArr) - 1) {

            echo "<br>";

        }

    }

}

echo "<h2>Задание 4</h2>";

$letterArr = [
'а' => 'a',
'б' => 'b',
'в' => 'v',
'г' => 'g',
'д' => 'd',
'е' => 'e',
'ё' => 'e',
'ж' => 'zh',
'з' => 'z',
'и' => 'i',
'й' => 'y',
'к' => 'k',
'л' => 'l',
'м' => 'm',
'н' => 'n',
'о' => 'o',
'п' => 'p',
'р' => 'r',
'с' => 's',
'т' => 't',
'у' => 'u',
'ф' => 'f',
'х' => 'kh',
'ц' => 'ts',
'ч' => 'ch',
'ш' => 'sh',
'щ' => 'sh',
'ь' => '',
'ы' => 'y',
'ъ' => '',
'э' => 'e',
'ю' => 'yu',
'я' => 'ya',
];

$myWord = "Слово";

$wordArr = str_split($myWord);

var_dump ($wordArr);

?>