<?php

session_start();

require 'database.php';
require 'User.php';

$message = '';
if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;
    if (count($results) > 0) {
        $user = $results;
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Web App</title>
    <link rel="stylesheet" type="text/css" href="assets/css/custom_style.css">

</head>

<body>

    <div class="header">
        <a href="../mysql/index.php">Welcome PHP app</a>
    </div>
    <div class="welcome_bar">
        <?php if (!empty($user)): ?>

        <br />Welcome <?= $user['email']; ?>
        <br /><br />
        <a href="logout.php">Logout?</a>

    </div>
    <div class="welcom_bar">
        <form method="POST">
            <a href="createUser.php">New?</a>
            <input id="search" type="text" name="key" placeholder="search">
            <input type="submit" name="search" value="Search">
        </form>
    </div>
    <div class="content">
        <?php if (!empty($message)): ?>
        <p><?= $message; ?></p>
        <?php endif; ?>

        <table>
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Avatar</th>
                    <th> Action </th>
                </tr>
            </thead>

            <tbody>
                <?php 
            if (isset($_POST['search'])) {
                $list = User::searchUsers($conn, $_POST['key']);
            } else {
                $list = User::getAllUsers($conn);
            }
                foreach ($list as $user) {
                    if (count($user) == 0) {
                        continue;
                    } ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->name; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td><img src=<?php  echo 'images/'.$user->avatar; ?> width="150" height="150" /></td>
                    <td><a href="editUser.php?id=<?=$user->id; ?>"><strong>Edit</strong></a></td>
                    <td><a onclick='confirmationDelete(this);return false;'
                            href='deleteUser.php?id=<?=$user->id; ?>'>Delete</a></td>
                </tr>

                <?php
                }
            ?>
            </tbody>
        </table>
        <script>
        function confirmationDelete(anchor) {
            var conf = confirm('Are you sure want to delete this record?');
            if (conf)
                window.location = anchor.attr("href");
        }
        </script>

    </div>
    <?php else: ?>
    <div class="content">
        <h1>Please Login or Register</h1>
        <br /><br />
        <a href="login.php">Login <br /><br /></a> or <br /><br />
        <a href="register.php">Register</a>
    </div>
    <?php endif; ?>

</body>

</html>