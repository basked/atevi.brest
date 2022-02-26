<?php
echo '1';
//exit('My Error');
//die;
echo '2';

// EVAL
echo '<hr>';
$a=1;
$b=2;
echo $a+$b;

//EVAL
echo '<hr>';
$res= '$c=$a+$b; echo $c;';
eval($res);

//LIST
echo '<hr>';
$ar=['one','two'];
list($a1,$a2)=$ar;
echo "$a1   $a2";


