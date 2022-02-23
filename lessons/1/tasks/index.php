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


