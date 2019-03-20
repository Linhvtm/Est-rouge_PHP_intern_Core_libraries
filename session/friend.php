<?php
//Do we know the user's name?
session_start();
$user_name = $_SESSION['user name'];
if ($user_name == '') {
    header('location:../session/index.html');
    exit();
}
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Friend Photo | Sessions Sample App</title>
</head>

<body>
    <div id="container">
    <p><img src=<?php $path = '../session/friend/'.rand(7, 12).'.jpg'; echo $path; ?> alt="family"></p>
        <h1 class="loves">Friend photos <?php echo $user_name; ?></h1>
    </div>
    <p><a href="menu.php">
            < Menu</a> </p> </body> </html>