<?php

$text = 'Basic Example in PHP string';
echo 'Text: '.$text;

$tmp = strtolower($text);
echo '<br>1.--------------------<br>'.$tmp;

$tmp = strtoupper($text);
echo '<br>2.--------------------<br>'.$tmp;

$tmp = ucfirst($text);
echo '<br>3.--------------------<br>'.$tmp;

$tmp = ucwords($text);
echo '<br>4.--------------------<br>'.$tmp;

$tmp = strlen($text);
echo '<br>5.--------------------<br>'.$tmp;

$tmp = explode(' ', $text);
echo '<br>6.--------------------<br>';
var_dump($tmp);

$tmp = explode('/', '10/12/1997');
echo '<br>7.--------------------<br>';
var_dump($tmp);

$str1 = 'hello';
$str2 = 'hello';
echo '<br>8.--------------------<br>';
if (strcmp($str1, $str2) == 0) {
    echo $str1.' and '.$str2.' is equal';
} elseif (strcmp($str1, $str2) > 0) {
    echo $str1.' is greater than'.$str2;
} else {
    echo $str1.' is smaller than'.$str2;
}

echo '<br>9.--------------------<br>';
if (strcasecmp($str1, $str2) == 0) {
    echo $str1.' and '.$str2.' is equal in case';
} elseif (strcasecmp($str1, $str2) > 0) {
    echo $str1.' is greater in case than'.$str2;
} else {
    echo $str1.' is smaller in case than'.$str2;
}

echo '<br>10.--------------------<br>';
if (strncmp($str1, $str2) == 0) {
    echo $str1.' and '.$str2.' is equal';
} elseif (strncmp($str1, $str2) > 0) {
    echo $str1.' is greater in case than'.$str2;
} else {
    echo $str1.' is smaller in case than'.$str2;
}

echo '<br>11.--------------------<br>';
var_dump(rtrim($text, 'PHP'));

echo '<br>12.--------------------<br>';
$substr = substr($text, 0, 11);
var_dump($substr);

echo '<br>13.--------------------<br>';
$replaceStr = str_replace('PHP', 'Java', $text);
var_dump($replaceStr);
