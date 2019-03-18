<?php

$value = 3.343333;
echo'<br>Value: '.$value;
echo'<br>--------------------';
echo'<br>Floor: '.floor($value);
echo'<br>Ceil: '.ceil($value);
echo'<br>Round: '.round($value);
echo'<br>Sqrt: '.sqrt($value);
echo'<br>Abs: '.abs($value);
echo'<br>Pow: '.pow($value, 4);

$arr = array(1, 2, 3, 4, 5, 611, 3);
echo'<br>--------------------<br>';
var_dump($arr);
echo'<br> Max of array: '.max($arr);
echo'<br> Min of array: '.min($arr);
echo'<br> Random element between 10 and 200: '.rand(10, 200);
echo'<br> Random element: '.rand();
