<?php
//in_array
echo in_array(3, [1, 2, 3]) ? 'Существует<br>' : 'Не существует<br>';
echo in_array(23, [1, 2, 3]) ? 'Существует<br>' : 'Не существует<br>';
echo '<br>';

//array_values
echo '<pre>';
print_r(array_values(['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4]));
echo '</pre>';

//array_keys
echo '<pre>';
print_r(array_keys(['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4]));
echo '</pre>';

// sum
echo '<pre>';
print_r(['three' => 3, 'four' => 4] + ['one' => 1, 'two' => 2]);
echo '</pre>';
//array_intersect
echo '<pre>';
print_r(array_intersect([1, 2, 3, 4, 5, 6], [3, 4]));
echo '</pre>';

//array_diff
echo '<pre>';
print_r(array_diff([1, 2, 3, 4, 5, 6], [3, 4]));
echo '</pre>';

// СОРТИРОВКА МАССИВОВ


$a = [1, 4, 6, 2, 4, 0];
$a1 = ['one' => 1, 'four' => 4, 'two' => 2, 'three' => 3];
sort($a);
ksort($a1);
echo '<pre>';
print_r($a);
print_r($a1);
echo '</pre>';