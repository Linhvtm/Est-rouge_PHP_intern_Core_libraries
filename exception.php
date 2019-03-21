<?php
/**
 * Exception has been raised but not caught and results in a fatal error that stops the execution of the scrip,
 * so in PHP we use try/catch statement when call a method to catch exception.
 */
try {
    echo 5 / 0;
} catch (Exception $ex) {
    // throw an exception divice by zero
    $ex->getMessage();
}

try {
    echo $file = file('/test.txt');
} catch (Exception $ex) {
    $ex->getMessage();
}

echo 'We can reach here no matter what errors occur because we have caught all of them!';
