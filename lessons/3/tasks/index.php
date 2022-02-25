<?php
// Дмитрий Мисюля
/*
 *  23.02.2022
 * */

require_once '../../../vendor/autoload.php';

use Helper\Helper;

Helper::lessonDescription(3, 'Типы данных');
Helper::taskDescription(3, 1,'Типы переменных');
Helper::taskAnswer('
   $a = 152;
   $b = \'152\';
   $c = \'London\';
   $d = array(152);
   $e = 15.3;
   $f = false;
   $g = true;
   // вывод типов переменных
   echo "Тип переменной \$a :". gettype($a) ;
   echo "Тип переменной \$b :". gettype($b) ;
   echo "Тип переменной \$c :". gettype($c) ;
   echo "Тип переменной \$d :". gettype($d) ;
   echo "Тип переменной \$e :". gettype($e) ;
   echo "Тип переменной \$f :". gettype($f) ;
   echo "Тип переменной \$g :". gettype($g) ; ');


Helper::taskDescription(3, 2,'Работа со строками и переменными');
Helper::taskAnswer('
    $a=10;
    $b=5;
    echo "Результат: $b из {$a}ти студентов посетили лекцию.";');


Helper::taskDescription(3, 3,'Работа со строками и переменными');
Helper::taskAnswer('
    $a=10;
    $b=5;
    echo "Результат: $b из {$a}ти студентов посетили лекцию.";');

Helper::taskDescription(3, 4,' Работа с массивами');
Helper::taskAnswer('
    $a=10;
    $b=5;
    echo "Результат: $b из {$a}ти студентов посетили лекцию.";');
