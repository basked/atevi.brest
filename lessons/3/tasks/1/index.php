<?php
/*
 *  Дмитрий Мисюля
 *  Урок 4: Типы данных
 *  Задача 1: Типы переменных
 * */
/*
    Определите типы следующих переменных и выведите их на экран:
    $a = 152;
    $b = '152';
    $c = 'London';
    $d = array(152);
    $e = 15.3;
    $f = false;
    $g = true;
*/
// инициализация переменных
$a = 152;
$b = '152';
$c = 'London';
$d = array(152);
$e = 15.2;
$f = false;
$g = true;
// вывод типов переменных
echo "Тип переменной \$a :". gettype($a)  ."<br>";
echo "Тип переменной \$b :". gettype($b)  ."<br>";
echo "Тип переменной \$c :". gettype($c)  ."<br>";
echo "Тип переменной \$d :". gettype($d)  ."<br>";
echo "Тип переменной \$e :". gettype($e)  ."<br>";
echo "Тип переменной \$f :". gettype($f)  ."<br>";
echo "Тип переменной \$g :". gettype($g)  ."<br>";