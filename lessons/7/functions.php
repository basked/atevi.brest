<?php
// массивы
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
print_r($arr);

echo '<hr>';
$arr_rev = array_reverse($arr);
print_r($arr_rev);

// ФУНКИЦИИ ДЛЯ РАБОТЫ С ПЕРЕМЕННЫМИ
// IS_SET()
echo '<hr>';
if (isset($arr)) {
    echo 'Значение $arr переменной определено';
} else {
    echo 'Значение $arr переменной не определено';
}

echo '<hr>';
// EMPTY()
$arr1 = '';

function __empty($val)
{
    if (empty($val)) {
        echo "Значение  \$val пустое";
    } else {
        echo "Значение \$val не пустое";
    }
}

__empty($arr1); // пустое значение
echo '<br>';
$arr1 = [12];
__empty($arr1); //не пустое значение
echo '<br>';
__empty($a); // значение не определено

echo '<hr>';
// GETTYPE()
echo gettype('string') . '<br>';
echo gettype('2') . '<br>';
echo gettype(1) . '<br>';
echo gettype(1.23) . '<br>';
echo gettype(true) . '<br>';
echo gettype($arr) . '<br>';
$sq = function ($a) {
    return 2 * $a;
};
echo gettype($sq) . '<br>';

echo '<hr>';
// IS_ARRAY, IS_BOOL, IS_INT()
if (is_array($arr)) {
    echo '$arr - массив';
} else {
    echo '$arr - не массив';
};

echo '<hr>';
// GET_DEFINED_VARS
echo '<pre>';
print_r(get_defined_vars()); // массив всех переменных
print_r(get_defined_vars()['arr']);
echo '</pre>';


//  ФУНКЦИИ


