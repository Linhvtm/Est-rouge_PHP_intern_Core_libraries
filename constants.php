<?php

define('PI', 3.14);
define('ERROR_MSG', 'Page not found');
define('MAX', 100000);

function perimeter($radius)
{
    return 2 * PI * $radius;
}

function isValid($number)
{
    return $number < MAX ? true : false;
}

echo 'Perimeter with R=4: '.perimeter(4);
echo ERROR_MSG;
echo isValid(45);
