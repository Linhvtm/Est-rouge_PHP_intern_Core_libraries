<?php
/**
 * In PHP we use die() to handle an error whenever it errors out and display meaningful message or
 * we can use trigger_error() to generate a user-level error message.
 */
// using die()
   if (!file_exists('/tmp/test.txt')) {
       die('File not found');
   } else {
       $file = fopen('/tmp/test.txt', 'r');
       echo 'Open file sucessfully';
   }
// when errors occur it stops program executation
echo "We can't reach here because some errors occur";
// custom error
// error handler function
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo 'Ending Script';
    die();
}

// set error handler
set_error_handler('customError', E_USER_WARNING);

// trigger error
$test = 2;
if ($test >= 1) {
    trigger_error('Value must be 1 or below', E_USER_WARNING);
}
