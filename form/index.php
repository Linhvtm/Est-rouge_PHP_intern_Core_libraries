<?php

session_start();

require 'database.php';
require 'Client.php';

$message = '';

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Web App</title>
    <link rel="stylesheet" type="text/css" href="../form/css/center.css">
    <link rel="stylesheet" type="text/css" href="../form/css/default.css">
</head>

<body>

    <div class="header">
        <a href="../form/index.php">Welcome PHP app</a>
    </div>
    <div class="content">
        <?php if (!empty($message)): ?>
        <p><?= $message; ?></p>
        <?php endif; ?>
    <h2>Result</h2>
        <table>
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone </th>
                </tr>
            </thead>

            <tbody>
            <?php 
                $results = Client::getAllClients($conn);
                    foreach ($results as $client) {
                        ?>
                <tr>
                    <td><?php echo $client->id; ?></td>
                    <td><?php echo $client->firstName; ?></td>
                    <td><?php echo $client->lastName; ?></td>
                    <td><?php echo $client->email; ?></td>
                    <td><?php echo $client->phone; ?></td>
                    
                </tr>
                <?php
                    }?>
            </tbody>
        </table>

    </div>
    <div class="content">
        <h1>To receive our special offer, please register</h1>
        <a href="register.php">Register</a>
    </div>

</body>

</html>