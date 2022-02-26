<?php
require_once __DIR__ . "/../../lessons/6/tasks/2/index.php";
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
if (!empty($a) && !empty($b) && !empty($c)) {
    if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
        if (isset($_POST['submit'])) {
            $res = quadratic($_POST['a'], $_POST['b'], $_POST['c']);
            print_r($res);
        }
    } else {
        echo 'Введённые данные должны быть числами.';
    }
} else {
    echo 'Введённые данные не должны быть пустыми.';
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Work with forms methd GET</title>
</head>
<body>
<form action="index.php" method="post">
    A: <input type="text" name="a" value="a"><br>
    B: <input type="text" name="b" value="b"><br>
    C: <input type="text" name="c" value="c"><br>
    <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>