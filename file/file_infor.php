<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>File Details</title>
</head>

<body>
    <?php
    $file = '../file/Employees.txt'; // Path to the file
    $fileName = basename($file); // Just the file name
    echo '<h1>Details of file: '.$fileName.'</h1>';

    echo '<h2>File data</h2>';
    echo 'File last accessed: '.
            date('j F Y H:i', fileatime($file)).'<br>';
    echo 'File last modified: '.
            date('j F Y H:i', filemtime($file)).'<br>';
    echo 'File type: '.filetype($file).'<br>';
    echo 'File size: '.filesize($file).' bytes<br>';

    echo '<h2>File tests</h2>';
    echo 'is_dir: '.
        (is_dir($file) ? 'true' : 'false').'<br>';
    echo 'is_file: '.
        (is_file($file) ? 'true' : 'false').'<br>';
    echo 'is_readable: '.
        (is_readable($file) ? 'true' : 'false').'<br>';
    echo 'is_writable: '.
        (is_writable($file) ? 'true' : 'false').'<br>';
?>
</body>

</html>