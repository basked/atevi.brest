<?php

if (isset($_POST['name']) && (!empty($_POST['name']))) {
    $name = $_POST['name'];
    setcookie('name', $name);
    $user_info= ['name'=>'Dmitry', 'surname'=>'Misiulia', 'age'=>35];
    setcookie('user_info',serialize($user_info));

} elseif (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
} else {
    $name = 'Гость';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <h1>Страница 2</h1>
    <a href="index.php"> Перейти на страницу 1 </a>
    <br> <br>
    <p> Привет, <?php echo $name; ?> </p>
    <!--    <form action="index.php" method="post">-->
    <form method="post">
        Имя: <input type="text" name="name" value="Дмитрий"> <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</head>
<body>

</body>
</html>
