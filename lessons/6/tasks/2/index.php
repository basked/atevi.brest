<?php
/*
 *  Дмитрий Мисюля
 *  Урок 6: Пользовательские функции
 *  Задача 2:
 * Написать функцию, которая решает квадратное уравнение. Функция принимает 3 аргумента 
            (коефициенты).
            Возвращает:
            • Массив с двумя корнями х1, х2, если D  >  0
            • Один корень х, если D  =  0
            • false, если D  <  0
            Подсказки:
            Частично используйте код из прошлого домашнего задания.

 * */
// квадратичное выражение
function quadratic($a = 0, $b = 0, $c = 0)
{

    // формула дискриминанта D = b^3 − 4ac
    $d = pow($a, 2) - 4 * $b * $c;
    // если D < 0 , находим x1 и x2
    if ($d > 0) {
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
        return array('x1' => $x1, 'x2' => $x2);
    }
    // если D = 0 , находим x
    elseif ($d == 0) {
        $x = -$b / (2 * $a);
        return $x;
    }
    // если D < 0 , выводим Нет корней
    else {
        return "false";
    }
}

// вывод функции
//echo '<pre>';
//print_r(quadratic(120, 26, 120));
//echo '</pre>';


