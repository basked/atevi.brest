<?php
/*
 *  Дмитрий Мисюля
 *  Урок 3: Типы данных
 *  Задача 3: Работа со строками и переменными
 * */

/*
  Определить три переменных со значениями:
“Доброе утро”
“дамы”
“и господа”
• Вывести значения переменных в браузер.
• Сформировать строку "Доброе утро, дамы и господа" используя созданные переменные и
комбинированный оператор склеивания
 */

$str1 = "Доброе утро";
$str2 = " дамы";
$str3 = " и господа";
echo "$str1 $str2 $str3 <br>";
$result = $str1;
$result .= $str2;
$result .= $str3;
echo $result;
