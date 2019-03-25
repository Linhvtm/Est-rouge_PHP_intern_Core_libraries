<?php

define('ORIGINAL_IMAGE_PATH', '../image_processing/before.jpg');
define('CROPPED_IMAGE_PATH', '../image_processing/cropped.jpg');

$message = '';
try {
    $im = imagecreatefromjpeg(ORIGINAL_IMAGE_PATH);
    $size = min(imagesx($im), imagesy($im));
    $im = imagecrop($im, ['x' => 0, 'y' => 0, 'width' => $size - 100, 'height' => $size]);
    if (isset($_GET['flip'])) {
        imageflip($im, rand(1, 3));
    }
    $im = imagescale($im, 500);
    imagejpeg($im, CROPPED_IMAGE_PATH);
    $message = 'Image after flipped and cropped';
} catch (Exception $ex) {
    $ex->getMessage();
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crop image demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img src=<?php echo CROPPED_IMAGE_PATH; ?> alt="Girl in a story" width="650" height="500">  
    <form action="crop_image.php" method="GET">
        <input type="submit" name="flip" value="Flip">
    <h2>
        <?php
        echo $message;
        ?>
    </h2>
</body>

</html>