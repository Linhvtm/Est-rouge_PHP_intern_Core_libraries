<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Employees</title>
</head>
<body>
<h1>Employees</h1>
<?php
    $myFile = @fopen('../file/Employees.txt', 'r');

    if (!$myFile) {
        echo '<p>Cannot open file.';
    } else {
        while (!feof($myFile)) {
            echo'<br>*----------------------<br>';
            // return string
            echo fgets($myFile, 999);
            echo'<br>';
            // return array
            var_dump(fgetcsv($myFile, 999));
        }
        fclose($myFile);
        echo'<br>1.----------------------<br>';
        // readfile(filename) return full content of a file as a string
        echo readfile('../file/Employees.txt');
        echo'<br>2.----------------------<br>';
        // file(filename) return full content of a file as an array with each line as an element
        var_dump(file('../file/Employees.txt'));
    }
?>
</body>
</html>