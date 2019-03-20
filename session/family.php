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
    <title>Family Photo | Sessions Sample App</title>
</head>

<body>
    <div id="container">
        <p><img src=<?php $path = '../session/family/'.rand(1, 5).'.jpg'; echo $path; ?> alt="family"></p>
        <h1 class="loves">Family photos <?php echo $user_name; ?></h1>
    </div>
    <p><a href="menu.php">
            < Menu</a> </p> </body> </html>