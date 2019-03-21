<?php

    /**
     * PHP password hashing function has now been built direcrly into PHP>=5.5
     * We use password_hash() to create a bcrypt hash of any password.
     * To verify a user password against an exsiting hash, we use password_verify().
     */
    if (!empty($_POST) && $_POST['password'] == $_POST['confirmpassword']) {
        session_start();
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $_SESSION['user_email'] = $_POST['email'];
        $_SESSION['user_password'] = $password;
        header('Location: ../crypto/login.php');
    } else {
        header('Location: ../crypto/register.html');
    }
