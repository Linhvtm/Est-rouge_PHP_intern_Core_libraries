
<?php

session_start();

//Erase the session variables.

$_SESSION = array();

//Kill the session.

session_destroy();

header('location:../session/index.html');

?>