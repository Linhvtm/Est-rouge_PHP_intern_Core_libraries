<?php
$message = '';
session_start();
// var_dump($_SESSION['user_password']);
if (!empty($_POST)) {
    if (password_verify($_POST['password'], $_SESSION['user_password']) && $_SESSION['user_email'] == $_POST['email']) {
        header('Location: ../crypto/home.html');
    } else {
        $message = 'Please try again!';
    }
}

?>
<html>

<head>
    <title>
        PHP Crypto demo
    </title>
    <style>
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;

    }

    input[type=submit] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: gray;

    }

    h1 {
        text-align: center;
    }

    body {
        padding-top: 10px;
        padding-right: 200px;
        padding-bottom: 300px;
        padding-left: 200px;
    }
    </style>
</head>

<body>
    <h1> Log in </h1>
    <form action="login.php" method="POST">
        <label for="email"><b>Email</b></label>
        <input type="text" name="email">
        <label for="email"><b>Password</b></label>
        <input type="password" name="password">
        <input type="submit">
    </form>
    <a href="register.html"> You don't have any account? Register here</a>
    <h2> <?php echo $message; ?> </h2>

</body>

</html>