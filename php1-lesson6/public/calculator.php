<?php
require_once __DIR__ . '\..\config\main.php';
require_once ENGINE_DIR . 'base.php';
require_once ENGINE_DIR . 'getArithmeticalActionLib.php';


$firstNumber = get('firstNumber');
$secondNumber = get('secondNumber');

$arithAct = get('arithAct');
//var_dump($arithAct);

$arithActName = getArithmeticalAction($arithAct, $firstNumber, $secondNumber);
//var_dump($arithActName);

?>

<form action="">
    <select name="arithAct" id="">
        <option value="sum">+</option>
        <option value="mult">x</option>
        <option value="subtrack">-</option>
        <option value="division">/</option>
    </select>
    <input type="number" name="firstNumber"/>
    <input type="number" name="secondNumber"/>
    <input type="submit" value="Посчитать">
</form>
<h3><?= $arithActName ?></h3>

<form action="">
    <input type="number" name="firstNumber"/>
    <input type="number" name="secondNumber"/>
    <input type="submit" name="arithAct" value="sum">
    <input type="submit" name="arithAct" value="mult">
    <input type="submit" name="arithAct" value="subtrack">
    <input type="submit" name="arithAct" value="division">
</form>
<h3><?= $arithActName ?></h3>