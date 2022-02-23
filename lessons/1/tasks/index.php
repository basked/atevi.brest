<?php
// Дмитрий Мисюля
/*
 *  23.02.2022
 * */

require_once '../../../vendor/autoload.php';

use Helper\Helper;

Helper::lessonDescription(2, 'Основы');
Helper::taskDescription(2, 1, 'Комментарии');
Helper::taskAnswer(
    "//  Дмитрий Мисюля<br> 
/*
  23.02.2022
*/<br>
 echo 'Hello, world!';
");
Helper::taskDescription(2, 2, 'Именование переменных');
Helper::taskAnswer(
    '$channelName;
$manufacturerAddress;
$carColor;
$waterTemperature;
$phoneModel;');
Helper::taskDescription(2, 3, 'Операторы');
Helper::taskAnswer('
$a = 3;
$b = 5;
$c = 8;
echo "\$a = $a; \$b = $b; \$c = $c; ";

$sum=$a+$b+$c;
echo "\$a+\$b+\$c = $sum";

$result = 2+6+2/5-1;
echo "2+6+2/5-1 = $result";
');
Helper::taskDescription(2, 4, ' Копирование значений переменных и копирование переменных по ссылке');
Helper::taskAnswer('
$a = 1;
$b = 2;
echo "\$a = $a; \$b = $b;";

$c = $a;
$d = &$b;
echo "\$a = $a; \$b = $b;";

$a = 3;
$b = 4;
echo "\$a = $a; \$b = $b; \$c = $c; \$d = $d;";
    ');

Helper::taskDescription(2, 5, 'Константы');
Helper::taskAnswer("
define('MV',41);
const MV1=33;

echo 'Сумма констант MV+MV1='.(MV+MV1);
//MV=42;
//MV1=34;
");