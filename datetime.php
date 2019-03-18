<?php

// date((string) date format)
echo 'Today is '.date('d-m-y');

// mktime(hour, minute, second, month, day, year)
$mt = mktime(0, 0, 0, 12, 10, 1997);

$day = date('D', $mt);
echo '<br>  10/12/1997 is '.$day;

echo '<br> Current time is: '.time();
