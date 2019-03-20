<?php

//Get the name the user typed.
$user_name = $_POST['user_name'];
//Validate.
if ($user_name == '') {
    header('location:../session/index.html');
    exit();
}
//Start session.
session_start();
//Store data in session.
$_SESSION['user name'] = $user_name;
//Go to the main menu.
header('location:../session/menu.php');
