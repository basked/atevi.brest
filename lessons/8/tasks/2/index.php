<?php
/*
 *  Дмитрий Мисюля
 *  Урок 8:  HTTP, формы
 *  Задача 2: Использование форм #2
 * Создать страницу с формой, состоящей из: 
        • текстового поля (имя)
        • поля выбора пола (как в примере в видео - input type radio).
    В зависимости от отправленных данных (значения поля "пол" - М или Ж) выводить приветствие.
    Пример:
        "Добропожаловать,мистерСмит!"
    или
        "Добропожаловать,миссисСмит!"

 * */
?>

<?php

if (!empty($_POST['gender'])) {
    switch ($_POST['gender']) {
        case 'm':
            echo "Добро пожаловать, мистер {$_POST['name']} !";
            exit;
        case 'w':
            echo "Добро пожаловать, миссис {$_POST['name']} !";
            exit;
        default :
            echo 'ОНО';
    }
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
    Имя: <input type="text" name="name" value="Смит"> <br/>
    Пол: <input type="radio" name="gender" value="m"> M
    <input type="radio" name="gender" value="w" checked> Ж<br/>
    <br/>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
