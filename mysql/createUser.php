<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../mysql/index.php');
}

require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])):

    $image_name = '';
    if (!empty($_FILES['image'])) {
        $path = 'C:/xampp/htdocs/Est-rouge_PHP_intern_Core_libraries/mysql/images/';
        $path = $path.basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
            $image_name = $_FILES['image']['name'];
        }
    }

    $sql = 'INSERT INTO users (name, email, password, avatar) VALUES (:name, :email, :password, :avatar)';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':avatar', $image_name);
    $stmt->bindValue(':name', $_POST['name']);
    $stmt->bindValue(':email', $_POST['email']);
    $stmt->bindValue(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

    if ($stmt->execute()):
        $message = 'Successfully created new user';
    else:
        $message = 'Sorry there must have been an issue creating your account';
    endif;

endif;

?>


<!DOCTYPE html>
<html>

<head>
    <title>User management</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>

<body>

    <div class="header">
        <a href="/">Welcome PHP app</a>
    </div>

    <h1>Create new user</h1>

    <form action="createUser.php" method="POST" enctype="multipart/form-data">
        <span> Avatar </span>
        <input type="file" name="image" id="fileToUpload"><br />
        <input type="text" placeholder="Enter your name" name="name">
        <input type="text" placeholder="Enter your email" name="email">
        <input type="password" placeholder="and password" name="password">
        <input type="password" placeholder="confirm password" name="confirm_password">
        <input type="submit">

    </form>
    <?php if (!empty($message)): ?>
 <p><?= $message; ?></p> 
    <?php endif; ?>
    <a href="../mysql/index.php">Back to home</a>

</body>

</html>