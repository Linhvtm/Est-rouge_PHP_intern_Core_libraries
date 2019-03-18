<?php

$result = 0;  // Global variable

function add($element1, $element2)
{
    return $GLOBALS['result'] = $element1 + $element2;
}
function sub($element1, $element2)
{
    return  $GLOBALS['result'] = $element1 - $element2;
}
function mul($element1, $element2)
{
    return  $GLOBALS['result'] = $element1 * $element2;
}
function div($element1, $element2)
{
    return  $GLOBALS['result'] = $element1 / $element2;
}

?>

<html>

<head>
    <title>Exercise function in PHP</title>
</head>

<body>
    <h2>Simple Calculator</h2>
    <?php
    echo 'Add: '.add(5, 10).'<br>';
    echo 'Sub: '.sub(10, 10).'<br>';
    echo 'Mul: '.mul(5, 10).'<br>';
    echo 'Div: '.div(100, 10).'<br>';
    echo 'Final Result = '.$result;
    ?>
</body>

</html>