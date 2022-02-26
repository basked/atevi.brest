<?php

if (isset($_COOKIE['name'])) {
    // setcookie('name', ''); // удаляем куки
    setcookie('name', '0', time() - 10); // удаляем куки
}
$user_info = unserialize($_COOKIE['user_info']);
if (isset($user_info) && (!empty($user_info))) {
    $name = $user_info['name'];
    $surname = $user_info['surname'];
    $age = $user_info['age'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страница 1</title>
    <h1>Страница 1</h1>
    <a href="page2.php"> Перейти на страницу 2 </a>
    <br> <br>
    <p> Привет, куки удалены! </p>
    <p> <?php
        echo $name . '<br>';
        echo $surname . '<br>';
        echo $age . '<br>';
        ?>
    </p>
</head>
<body>

</body>
</html>
