<?php

define('ORIGINAL_IMAGE_PATH', '../image_processing/before.jpg');
define('EDITED_IMAGE_PATH', '../image_processing/after.jpg');

$message = '';
try {
    $im = imagecreatefromjpeg(ORIGINAL_IMAGE_PATH);
} catch (Exception $ex) {
    $ex->getMessage();
}

function processImage($m, $filter, $value, $colorType)
{
    imagefilter($m, $filter, $value);
    imagejpeg($m, EDITED_IMAGE_PATH);
    $GLOBALS['imagePath'] = EDITED_IMAGE_PATH;
    $GLOBALS['message'] = 'Image changed to '.$colorType;
}

$imagePath = ORIGINAL_IMAGE_PATH;
switch ($_GET) {
    case isset($_GET['brighter']):
        processImage($im, IMG_FILTER_BRIGHTNESS, 30, 'brighter');
        break;
    case isset($_GET['darker']):
        processImage($im, IMG_FILTER_BRIGHTNESS, -30, 'darker');
        break;
    case isset($_GET['negative']):
        processImage($im, IMG_FILTER_NEGATE, 30, 'negative');
        break;
    case isset($_GET['edg_detect']):
        processImage($im, IMG_FILTER_EDGEDETECT, 10, 'edge detect');
        break;
    case isset($_GET['gray_scale']):
        processImage($im, IMG_FILTER_GRAYSCALE, 10, 'gray scale');
        break;
    case isset($_GET['pixelate']):
        processImage($im, IMG_FILTER_PIXELATE, 5, 'Pixelate');
        break;
    case isset($_GET['smooth']):
        processImage($im, IMG_FILTER_SMOOTH, 100, 'Smooth');
        break;
    case isset($_GET['mean_removal']):
        processImage($im, IMG_FILTER_MEAN_REMOVAL, 50, 'Mean removal');
        break;
    case isset($_GET['selective_blur']):
        processImage($im, IMG_FILTER_SELECTIVE_BLUR, 200, 'Selective blur');
        break;
    case isset($_GET['contract']):
        processImage($im, IMG_FILTER_CONTRAST, 250, 'Contract');
        break;
    default:
        $message = 'No changes were made.';
        break;
}
imagedestroy($im);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Image processing Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <img src=<?php echo $imagePath; ?> alt="Girl in a story" width="650" height="500">
    <img src=<?php echo ORIGINAL_IMAGE_PATH; ?> alt="Girl in a story" width="650" height="500">
    <h2>
        <?php
        echo $message;
        ?>
    </h2>
    <form action="filter.php" method="GET">
        <input type="submit" name="darker" value="Darker">
        <input type="submit" name="brighter" value="Brighter">
        <input type="submit" name="negative" value="Negative">
        <input type="submit" name="edg_detect" value="Edge Detect">
        <input type="submit" name="gray_scale" value="Gray Scale">
        <input type="submit" name="pixelate" value="Pixelate">
        <input type="submit" name="smooth" value="Smooth">
        <input type="submit" name="mean_removal" value="Mean Removal">
        <input type="submit" name="selective_blur" value="Selective Blur">
        <input type="submit" name="contract" value="Contract">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>

</html>