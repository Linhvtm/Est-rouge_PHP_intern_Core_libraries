<?php

$handle = curl_init();

$url = 'http://localhost:8088/Est-rouge_PHP_intern_Core_libraries/curl/form.php';

// Array with the fields names and values.
// The field names should match the field names in the form.

$postData = array(
  'firstName' => 'Lady',
  'lastName' => 'Gaga',
  'submit' => 'ok',
);

curl_setopt_array($handle,
  array(
     CURLOPT_URL => $url,
     // Enable the post response.
    CURLOPT_POST => true,
    // The data to transfer with the response.
    CURLOPT_POSTFIELDS => $postData,
    CURLOPT_RETURNTRANSFER => true,
  )
);

$data = curl_exec($handle);

curl_close($handle);

echo $data;
