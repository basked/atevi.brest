<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson1</title>
</head>
<body>
<?
// константа
define('bas','basked');
const BASK = 'BASKED';

// можно создавать и на кирилице
$ваапвар=121212;
 echo 'Вывод переменной $ваапвар= '.$ваапвар . '<br>';

// Переменные чувствительны к регистру
$Bas='Bas';
$bas='bas';
$BAS='BAS';
echo '$Bas='.$Bas.', $bas='.$bas.', $BAS='.$BAS. '<br>';

echo "Константа define('bas','basked'); =" .bas. '<br>';
echo "Константа const BASK = 'BASKED'; =" .BASK. '<br>';


echo 'ПЕРЕМЕННЫЕ ПЕРЕМЕННЫХ <br>';
$bas="ket";
$ket="bas";
echo $ket;
echo $$ket;//basket

?>
</body>
</html>