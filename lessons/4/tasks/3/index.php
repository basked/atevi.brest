<?php
/*
 *  Дмитрий Мисюля
 *  Урок 4: Условный оператор
 *  Задача 4: Равенство чисел
        Среди трех произвольно выбранных чисел найти среднее. Если среди чисел есть равные, вывести
        сообщение "Ошибка".
        Например:
        Дано: а = 3, b = 4, c = 4;
        Результат: "Среднее число: с = 4".
 **/
// переменные
$a = 51;
$b = 50;
$c = 52;

if ($a == $b || $a == $c || $b == $c) {
    echo "Ошибка";
} elseif ($a > $b && $a < $c) {
    echo "Среднее число: a=$a";
} elseif ($b > $a && $b < $c) {
    echo "Среднее число: b=$b";
} else
    echo "Среднее число: c=$c";















