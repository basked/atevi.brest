<?php
/*
 *  Дмитрий Мисюля
 *  Урок 9: Cookie
 *  Задача 3: Счетчик посещений
    Используя cookie реализовать вывод на страницу сообщения с количеством посещений страницы.
 * */

if (isset($_COOKIE['counter'])) {
    $counter = intval($_COOKIE['counter']);
    $counter++;
} else {
    $counter = 1;
}
setcookie('counter', $counter);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Счётчик посещения сайта</title>

</head>
<body>
<p align="center">Кол-во посещений: <?php echo $counter; ?></p>
</body>
</html>
