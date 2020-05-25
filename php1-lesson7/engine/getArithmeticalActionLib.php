<?php
function getArithmeticalAction($name, $firstNumber, $secondNumber){
    if ($name == 'sum'){
        return "Сумма {$firstNumber} и {$secondNumber} равна ". ($firstNumber + $secondNumber);
    } else if($name == 'mult'){
        return "Произведение {$firstNumber} и {$secondNumber} равно " . ($firstNumber * $secondNumber);
    } else if($name == 'subtrack'){
        return "Разность {$firstNumber} и {$secondNumber} равна " . ($firstNumber - $secondNumber);
    } else if($secondNumber == 0){
        return "Обнаружено деление на ноль, выпонение функции прекращено.";
    } else if($name == 'division'){
        return "Частное {$firstNumber} и {$secondNumber} равно " . ($firstNumber / $secondNumber);
    }
}
