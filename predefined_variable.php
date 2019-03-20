<?php
/**
 * GET method: URI contains return value, only return 1024 character, can send binary data
 * ex:http://localhost:8088/predefined_variable.php?name=linh&email=vanmylink%40gmail.com&phone=12345678.
 *
 * POST method: URI doesn't contains return value, value with free size and sent through HTTP header
 * ex:http://localhost:8088/predefined_variable.php.
 *
 * PUT: GET.
 *
 * $_SERVER: return all server information.
 *
 * $_REQUEST: get all value no matter what method
 *
 * default method of form is GET
 */

// example with POST method
 if (!empty($_POST)) {
     var_dump($_REQUEST);        // return text of all input text
     var_dump($_POST['name']);   // return text in input name
     var_dump($_GET);            // array(0)
     var_dump($_SERVER);         //return all sersver information
 }
?>

<html>

<head>
    <title>
        Demo predefined variables usage
    </title>
</head>

<body>

<form action= "predefined_variable.php" method="POST">
    <input type="text" name="name">
    <input type="text" name="email">
    <input type="text" name="phone">
    <input type="submit">
</form>
</body>

</html>