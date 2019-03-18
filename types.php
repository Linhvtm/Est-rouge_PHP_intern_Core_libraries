<?php

include 'Door.php';

function testDataTypes()
{
    // Boolean: true or false
    $isChecked = true;
    var_dump($isChecked);
    // Integers : {..,-2,-1,0,1,2,..}
    $numberOfStudents = 255;
    var_dump($numberOfStudents);
    /* Floating point number
    *  $a = 1.234;
    *  $b = 1.2e3;
    *  $c = 7E-10;
    */
    $absentRat = 1.234;
    var_dump($absentRat);
    // String
    $firstName = 'Steve';
    var_dump($firstName);
    // Array
    $studentInfo = array(
                'firstName' => 'Linh',
                'lastName' => 'Van',
                'age' => 22,
                'weight' => 42.0, );
    var_dump($studentInfo);
    // Object
    $door = new Door(250, 150);
    var_dump($door);
    // Resource
    // $getFTPCon = ftp_connect($ftp_server);
    // NULL
    $var = null;
    var_dump($var);
    // Type juggling
    $hello = 'hii';
    $hii = 'hello';
    var_dump($hello);
}

testDataTypes();
