<?php
// ОДИН ПАРАМЕТР В ФУНКЦИИ
function myFirstFunction($name)
{
    echo "<h1>$name</h1>";
}

$name = 'ФИО';
myFirstFunction('Дима');
myFirstFunction($name);


// НЕСКОЛЬКО ПАРАМЕТРОВ В ФУНКЦИИ
echo '<hr>';
function myFirstFunction2($firstName, $lastName)
{
    echo "<h1>$firstName,$lastName</h1>";
}

MYFIRSTFUNCTION2('Дмитрий', 'Мисюля');


//  МАССИВ КАК ПАРАМЕТР В ФУНКЦИИ
echo '<hr>';
$students = array('Дима', 'Миша', 'Руслан', 'Саша');
function myFirstFunction3($students)
{
    foreach ($students as $student)
        echo "<h1>$student</h1>";
}

myFirstFunction3($students);


//  ПАРАМЕТРЫ ПО УМОЛЧАНИЮ В ФУНКЦИИ
echo '<hr>';
function myFirstFunction4($firstName, $lastName = 'NoName')
{
    echo "<h1>$firstName,$lastName</h1>";
}

MYFIRSTFUNCTION4('Иван');


// ГЛОБАЛЬНАЯ И ЛОКАЛЬНАЯ ОБЛАСТЬ ВИДИМОСТИ
echo '<hr>';
$a = 8;
function getA($var)
{
    // глобальная переменная через массив $_GLOBAL
    echo "Выводим глобальную переменную через \$GLOBALS \$a={$GLOBALS['a']}";
    echo '<hr>';
    // глобальная переменная через global
    global $a;
    echo "Выводим глобальную переменную определив через  global \$a=$a";
}

getA(8);


//ПЕРЕДАЧА АРГУМЕНТОВ ПО ССЫЛКЕ
echo '<hr>';
// & - амерсант
$a = 8;
function getValByLink(&$val)
{
    $val = 88;
}

getValByLink($a);
echo $a;  // 88


//ПЕРЕДАЧА АРГУМЕНТОВ ПО ССЫЛКЕ
echo '<hr>';
function howManyTimes()
{
    static $a = 0;
    echo ++$a;
}

howManyTimes();
howManyTimes();
howManyTimes();

//ВОЗВРАТ ЗНАЧЕНИЙ
echo '<hr>';
function perimetr($a, $b)
{
    return (2 * $a) + (2 * $b);
    echo 'Этот код не выполнится после return';
}
$p=perimetr(5,6);
echo "Периметр со стронами 5 и 6 = $p";

//РЕКУРСИЯ
echo '<hr>';