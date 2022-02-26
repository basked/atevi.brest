<?php
if (!empty($_POST)) {
    echo '<pre>';
    print_r($_POST);
    $file_name = $_FILES['ava']['name'];
    $path_from = $_FILES['ava']['tmp_name'];
    $path_to = __DIR__ . "/../../lessons/8/files/" . $_FILES['ava']['name'];

    if (copy($path_from, $path_to)) {
        echo 'Файл скопирован успешно.<br/>';
        echo "<img src='files/$file_name'>";
    } else {
        echo 'При копировании возникли проблемы . ';
    }
    echo ' </pre>';
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http - equiv="X-UA-Compatible" content="ie=edge">
    <title> Inputs</title>
</head>
<body>
<form action="form_inputs.php" method="post" enctype="multipart/form-data">
    <!--Select    -->
    <select name="sel" id="sel">
        <option value="basked"> basked</option>
        <option value="5ony"> 5ony</option>
        <option value="ice"> ice</option>
        <option value="hip"> hip</option>
    </select>
    <!--    <input type = "radio" > -->
    <label for="pass"> Пароль</label>
    <input id="pass" type="password">

    <br/>
    <b><label for="chk"> Стиль</label></b><br/>
    <input id="chk" type="checkbox" name="chk[]" value="powermove"> PowerMove
    <br/>
    <input id="chk" type="checkbox" name="chk[]" value="freestyle"> Freestyle
    <br/>
    <input id="chk" type="checkbox" name="chk[]" value="footwork"> Footwork
    <br/>
    <input id="chk" type="checkbox" name="chk[]" value="electricboogie"> Electric Boogiee
    < br />

    <br/>
    <b><label for="rb"> Gender</label></b>
    <br/>
    <input id="rb" type="radio" name="rb" value="bboy"> BBoy
    <br/>
    <input id="rb" type="radio" name="rb" value="bgirl"> BGirl
    <br/>
    <input id="rb" type="radio" name="rb" value="btoy"> BToy
    <br/>

    <br/>
    <input type="file" name="ava">

    <br/>
    <br/>
    <input type="submit" name="submit" value="Submit">

</form>
</body>
</html>