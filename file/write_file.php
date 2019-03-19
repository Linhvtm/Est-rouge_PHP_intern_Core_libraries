<?php

    $message = '';
   if (!empty($_POST)) {
       $firstName = $_POST['FirstName'];
       $lastName = $_POST['LastName'];
       $title = $_POST['Title'];
       $email = $_POST['Email'];
       $outputString = "$firstName\t$lastName\t$title\t$email\n";
       //Open Employees.txt for appending
       //Be sure to suppress errors
       $myFile = @fopen('../file/Employees.txt', 'a');

       //Write condition to check if file cannot be opened
       if (!$myFile) {
           $message = 'File may not exist!';
       } else {
           $message = 'Added successfully!';
           //Write $outputString to the file
           fwrite($myFile, $outputString);

           //Close the file
           fclose($myFile);
       }
   }

?>

<!DOCTYPE html>
<html>

<head>
    <title>Register Below</title>
</head>

<body>

    <div class="header">
        <a href="/">Your App Name</a>
    </div>

    <?php if (!empty($message)): ?>
    <p><?= $message; ?></p>
    <?php endif; ?>

    <form action="write_file.php" method="POST">
        <br><input type="text" placeholder="Enter your first name" name="FirstName"><br>
        <br><input type="text" placeholder="Enter your last name" name="LastName"><br>
        <br><input type="text" placeholder="Enter your title" name="Title"><br>
        <br> <input type="text" placeholder="Enter your email" name="Email"><br>
        <br><input type="submit" name="submit">

    </form>

</body>

</html>