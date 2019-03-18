<?php

include 'Door.php';

function testOperators()
{
    // Arithmetic Operators:
    //+, -, *, /, %, **
    echo 5 * 10;    // 50

    // Assignment Operators:
    //$a = ($b = 4) + 5;
    echo $a = ($b = 4) + 5;     // 9

    // Bitwise Operators:
    //|, &, ~, ^, <<, >>
    echo 5 >> 1;    // 2

    // Comparison Operators:
    //==, !=, <, >, <>, <=, >=, , !==
    echo 5 != 3;      //true = 1

    //Incrementing/Decrementing Operators:
    //++$a, $a++, --$a, $a--
    $a = 5;
    echo $a++;  // 5
    // $a = 6

    // Logical Operators:
    //and, or, xor, !, &&, ||
    $a = 1;
    $b = 2;
    echo($a == 1) || ($b == 1);    //true = 1

    // String Operators: ., .=
    $date = 'Monday';
    echo 'Today '.'is '.$date;

    //Array Operators: +(Union), ==, !=
    $a = array(1, 2);
    $b = array(3, 4);

    var_dump($a);   // 1,2
    var_dump($b);   // 3,4

    var_dump(array_merge($a, $b));

    // Type Operators: instanceof
    $door = new Door(20, 50);
    var_dump($door instanceof Door); // true
}

testOperators();
