<?php
/*
 *  Дмитрий Мисюля
 *  Урок 6: Пользовательские функции
 *  Задача 3: Удаление отрицательных элементов из массива (вариант 1)
 *  Есть массив с элементами (отрицательными и положительными). Нужно написать такую функцию
    deleteNegtives(), которая будет принимать массив, удалять из него элементы меньше 0 и
    возвращать  этот массив.
   Решить задачу №3 используя передачу аргумента по ссылке.

 * */


$digits = [-1, 1, -2, 2, -3, 3, -4, 4];

function deleteNegtivesByLinks(&$digits)
{
    foreach ($digits as $key => $digit) {
        if ($digit < 0) {
            unset($digits[$key]);
        }
    }
}

function deleteNegtives1($digits)
{
    foreach ($digits as $key => $digit) {
        if ($digit < 0) {
            unset($digits[$key]);
        }
    }
    return $digits;
}


function deleteNegtives2($digits)
{
    foreach ($digits as $digit) {
        if ($digit > 0) {
            $ar[] = $digit;
        }
    }
    return $ar;
}

// вывод функции
echo '<pre>';
print_r(deleteNegtives1($digits));
print_r(deleteNegtives2($digits));
// удаляем по ссылке
deleteNegtivesByLinks($digits);
print_r($digits);
echo '</pre>';


