<?php
/*
 *  Дмитрий Мисюля
 *  Урок 8:  HTTP, формы
 *  Задача 1: Использование форм #1
 * Создать страницу с формой на 7 полей для текстового ввода (input, type text) и кнопкой отправки 
    (input, type submit).
    Данные, отправленные формой приводятся к типу integer: используем функцию intval(). 
    Далее из 7-ми введенных в форму значений вычисляются: 
        • максимальное значение
        • минимальное значение
        • среднее арифметическое значение.
    Результаты выводятся после отправки формы на этой же странице.
    Подсказки:
        1. Ориентироваться на пример из видео занятия.
        2. Данные можно записать в массив:
    $a=intval($_POST['a']);
    ...
    $arr=array($a,$b,...);
    И далее применить функции max(), min() для нахождения максимального и минимального 
    значений.
 * */
?>

<?php
if (!empty($_POST)) {
    $sum = 0;
    $arr = array_values($_POST);
    for ($i = 0; $i < count($arr); $i++) {
        $arr[$i] = intval($arr[$i]);
        $sum += $arr[$i];
    }

    echo 'MIN=' . min($arr) . ' <br/>';
    echo 'MIN=' . max($arr) . ' <br/>';
    echo 'AVG=' . $sum / (count($arr) - 1) . ' <br/>';

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Form</title>
</head>
<body>

<form action="index.php" method="post">
    Поле 1: <input type="text" name="n1" value="1"> <br/>
    Поле 2: <input type="text" name="n2" value="2"> <br/>
    Поле 3: <input type="text" name="n3" value="3"> <br/>
    Поле 4: <input type="text" name="n4" value="4"> <br/>
    Поле 5: <input type="text" name="n5" value="5"> <br/>
    Поле 6: <input type="text" name="n6" value="6"> <br/>
    Поле 7: <input type="text" name="n7" value="7"> <br/>
    <br/>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
