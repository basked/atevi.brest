<?php
/*
 *  Дмитрий Мисюля
 *  Урок 5: Циклы
 *  Задача 2: Квадраты чисел
 *     Найти и вывести все квадраты натуральных чисел (1,2,3, ...), не превосходящие данного числа N.
 *     Число N задаем самостоятельно.
 * */
define("MAX", 100);
$i = 1;
// квадрат следующего числа не превышает MAX
while (pow($i, 2) <= MAX) {
    echo "$i^2=" . pow($i, 2) . '<br>';
    $i++;
}