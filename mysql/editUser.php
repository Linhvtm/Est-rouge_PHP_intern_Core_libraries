<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../mysql/index.php');
}

require 'database.php';
require 'User.php';

$message = '';
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $user = User::getUser($id, $conn);
}
if (!empty($_POST['submit'])):
        $image_name = '';
        if (!empty($_FILES['image'])) {
            $path = 'C:/xampp/htdocs/Est-rouge_PHP_intern_Core_libraries/mysql/images/';
            $path = $path.basename($_FILES['image']['name']);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                $image_name = $_FILES['image']['name'];
            }
        }

    // sql update query
    $sql = 'UPDATE users SET name=:name,email=:email,avatar=:avatar WHERE id ='.$id;
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':avatar', $image_name);
    $stmt->bindValue(':name', $_POST['name']);
    $stmt->bindValue(':email', $_POST['email']);

    if ($stmt->execute()):
            $message = 'Successfully edited user infor';
            header('Location: ../mysql/index.php');
    else:
            $message = 'Sorry there must have been an issue editing your account';
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
        <a href="/">Demo PHP app</a>
    </div>

    <?php if (!empty($message)): ?>
    <p><?= $message; ?></p>
    <?php endif; ?>

    <h1>Edit user information</h1>

    <form action="editUser.php?id=<?=$user->id; ?>" method="POST" enctype="multipart/form-data">
        <span> Avatar </span>
        <input type="file" name="image" id="fileToUpload"><br />
        <input type="text" value=<?php echo $user->name; ?> name="name">
        <input type="text" value=<?php echo $user->email; ?> name="email">
        <input type="submit" name="submit" value="Submit">

    </form>

    <a href="../mysql/index.php">Back to home</a>

</body>

</html>