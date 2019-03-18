<?php

$student = array('ID0' => 'Linh', 'ID1' => 'Hieu', 'ID2' => 'Anh');
$infor = array(
    'Linh' => array('firstName' => 'Linh',
    'lastName' => 'Van',
    'age' => 22,
    'weight' => 42.0, ),
    'Hieu' => array('firstName' => 'Hieu',
    'lastName' => 'Do',
    'age' => 22,
    'weight' => 52.0, ),
         );
$class = array(
    'Linh' => '15T2',
    'Hieu' => '15H5',
    'Anh' => '15T2', );

function testAssociativaArray()
{
    var_dump($GLOBALS['class'][$GLOBALS['student']['ID1']]);
    echo ' <br>1------------------------------------ <br>';
    var_dump($GLOBALS['infor'][$GLOBALS['student']['ID1']]);
}
testAssociativaArray();

function testLoop()
{
    echo ' <br>2------------------------------------ <br>';
    // for loop
    for ($i = 0; $i < count($GLOBALS['student']); ++$i) {
        echo ' Student '.$i.': '.$GLOBALS['student']['ID'.$i];
    }

    echo ' <br>3------------------------------------ <br>';
    //foreach loop
    foreach ($GLOBALS['student'] as $student) {
        echo ' Student : '.$student;
    }

    echo ' <br>4------------------------------------ <br>';
    $id = 0;
    //while loop
    while ($id < count($GLOBALS['student'])) {
        echo ' Student '.$id.': '.$GLOBALS['student']['ID'.$id];
        ++$id;
    }

    echo ' <br>5------------------------------------ <br>';
    $id = 0;
    //do while loop
    do {
        echo ' Student '.$id.': '.$GLOBALS['student']['ID'.$id];
        ++$id;
    } while ($id < count($GLOBALS['student']));
}
testLoop();

function modifyArray()
{
    echo ' <br>6------------------------------------ <br>';
    // modify directly
    $GLOBALS['student']['ID1'] = 'Ha';

    // add to the end of array
    array_push($GLOBALS['student'], 'Hai Ly');
    var_dump($GLOBALS['student']);

    echo ' <br>7------------------------------------ <br>';
    // remove from the end
    $number = array(1, 2, 3, 4, 5, 6);
    array_pop($number);
    var_dump($number);

    echo ' <br>8------------------------------------ <br>';
    // merge array
    $name = array('linh', 'hoa', 'ha');
    $merge = array_merge($number, $name);
    var_dump($merge);

    // slice
    $sliceHalfOfArray = array_slice($number, 0, count($number) / 2);
    var_dump($sliceHalfOfArray);

    // revert array
    echo ' <br>9------------------------------------ <br>';
    $revert = array_reverse($GLOBALS['student']);
    var_dump($revert);

    // get all keys
    echo ' <br>10------------------------------------ <br>';
    $keys = array_keys($GLOBALS['student']);
    var_dump($keys);

    // get all value
    echo ' <br>11------------------------------------ <br>';
    $values = shuffle($GLOBALS['student']);
    var_dump($GLOBALS['student']);
}

modifyArray();

function testArraySort()
{
    // sort ascending by value
    echo ' <br>12------------------------------------ <br>';
    sort($GLOBALS['class']);
    var_dump($GLOBALS['class']);

    // sort descending by value
    echo ' <br>13------------------------------------ <br>';
    rsort($GLOBALS['student']);
    var_dump($GLOBALS['student']);

    // sort ascending by key
    echo ' <br>14------------------------------------ <br>';
    ksort($GLOBALS['class']);
    var_dump($GLOBALS['class']);

    // sort descending by key
    echo ' <br>15------------------------------------ <br>';
    krsort($GLOBALS['student']);
    var_dump($GLOBALS['student']);
}

testArraySort();

function testArraySearch()
{
    // search array by value
    echo ' <br>16------------------------------------ <br>';
    $key = array_search('Anh', $GLOBALS['student']);
    var_dump($key); // return index of value

    echo ' <br>17------------------------------------ <br>';
    $isInArray = in_array('Linh', $GLOBALS['student']);
    var_dump($isInArray);
}

testArraySearch();
