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
    <title>Menu | Sessions Sample App</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <h1>Menu</h1>
    <p>Name: <?php echo $user_name; ?></p>
    <ul>
        <li><a href="family.php">Family photo</a></li>
        <li><a href="friend.php">Friend photo</a></li>
        <li><a href="other.php">Other photo</a></li>  
        <li><a href="logout.php"> Login with different name</a></li>
    </ul>
</body>

</html>