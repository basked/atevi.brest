<?php
/*
 *  Дмитрий Мисюля
 *  Урок 9: Cookie
 *  Задача 2: Дата и время последнего посещения
    Используя cookie реализовать вывод на страницу сообщения с датой и временем последнего визита.
 * */
if (isset($_COOKIE['lastVisit']) && (!empty($_COOKIE['lastVisit']))) {
    $lastVisit = $_COOKIE['lastVisit'];
    $msgVisit = 'Последнее посещение сайта было ' . $lastVisit;
} else {
    $msgVisit = 'Пользователь впервые на сайте!';
}
$lastVisit = date('d-m-Y h:m:s');
setcookie('lastVisit', $lastVisit);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Посещение сйта</title>
</head>
<body>
<p align="center"><?php echo $msgVisit; ?> </p>
</body>
</html>
