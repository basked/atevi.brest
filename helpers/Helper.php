<?php

namespace Helper;

class Helper
{
    public static $tasks = array(array(),
        /*Lesson1*/
        array(
            /*Task1*/
            'Создать файл php. В начале файла добавить 2 комментария (однострочный и
многострочный) с именем автора и датой выполнения.
Напечатать приветствие при помощи echo.',
            /*Task2*/
            'Придумайте и запишите имена переменных для таких сущностей: название телеканала, 
адрес производителя, цвет автомобиля, температура воды, модель телефона.
Следуйте правилам именования переменных. Используйте lowerCamelCase для имен, 
составленных из двух и более слов.',
            /*Task3*/
            '• Создайте 3 переменных с произвольными именами на свой выбор. Присвойте им 
значения 3, 5, 8 соответственно. Выведите значения этих переменных на 
страницу.<br>
• Найдите сумму этих переменных и запишите ее в новую переменную. Выведите 
значение новой переменной.<br>
• Найдите значение такого выражения: 2+6+2/5-1. Запишите его в переменную с 
именем $result и выведите на страницу.'));

    public static function lessonDescription(int $lessonNum, string $lessonDecsr)
    {
        echo "<h2><b>Урок $lessonNum: $lessonDecsr</b></h2><br>";
    }

    public static function taskDescription(int $lessonNum, int $taskNum, string $taskDescr)
    {
        echo " <b>Задача $taskNum: $taskDescr</b> <br>";
        echo self::$tasks[$lessonNum - 1][$taskNum - 1] . "<br>";
    }

    public static function taskAnswer(string $answerDescr = '')
    {
        echo "<b>Ответ:</b><br>";
        echo '<pre style="font-weight: bold; background-color:darkturquoise; color: grey">' . $answerDescr . '  </pre>';
    }
}

