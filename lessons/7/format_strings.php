<?php
// ФОРМАТИРОВАНИЕ СТРОК
$city = 'Brest';
$total = 9000000;
$percent = 100 * 350000 / $total;
$format = 'Население города %s равно %.2f  из %d';
printf($format, $city, $percent, $total);  // сразу вывод данных
echo '<br>';
$format = '%1$s  Население города %1$s равно %3$.2f  из %2$d';
printf($format, $city, $percent, $total);

echo '<br>';
$format = '%1$s  Население города %1$s равно %3$.2f  из %2$d';
$res = sprintf($format, $city, $percent, $total);  //присваемваем  данные
echo $res; //   вывод данных
echo '<hr>';

//РАБОТА СО СТРОКАМИ
//echo '<hr>';
//STRLEN
$s1 = 'last move crew';
echo strlen($s1); // 14

echo '<br>';
// SUBSTR
echo substr($s1, 10, 4); // crew

echo '<br>';
//STR_REPLACE
echo str_replace(['l', 'm', 'c'], '_', $s1);
echo '<br>';
echo str_replace(['l', 'm', 'c'], ['L', 'M', 'C'], $s1);
echo '<br>';
echo str_replace('crew', 'CREW', $s1);

echo '<br>';
//EXPLODE
$s = 'last,move,crew';
print_r(explode(',', $s));
echo '<br>';
$sa=explode(',', $s);
echo $sa[0].$sa[1].$sa[2];

echo '<br>';
//IMLODE
$s = 'last,move,crew';
print_r(explode(',', $s));
echo '<br>';
$sa=explode(',', $s);
echo implode('_',$sa);


