<?php
require_once __DIR__ . "/../../lessons/6/tasks/2/index.php";
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
if (!empty($a) && !empty($b) && !empty($c)) {
    if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
        if (isset($_GET['submit'])) {
            $res = quadratic($_GET['a'], $_GET['b'], $_GET['c']);
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
<form action="index.php" method="get">
    A: <input type="text" name="a" value="a"><br>
    B: <input type="text" name="b" value="b"><br>
    C: <input type="text" name="c" value="c"><br>
    <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>