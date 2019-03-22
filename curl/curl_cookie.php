<?php

$handle = curl_init();

$url = 'https://www.bbc.com/news/uk-politics-47652071';

$file = __DIR__.DIRECTORY_SEPARATOR.'cookie.txt';

curl_setopt_array($handle,
  array(
    CURLOPT_URL => $url,
     // The file to which the cookies need to be written.
    CURLOPT_COOKIEFILE => $file,
    // The file freom which the cookies need to be read.
    CURLOPT_COOKIEJAR => $file,
    CURLOPT_RETURNTRANSFER => true,
  )
);

$data = curl_exec($handle);
var_dump($data);
curl_close($handle);
