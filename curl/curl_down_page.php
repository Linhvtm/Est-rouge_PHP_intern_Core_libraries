<?php

/**
 * Download the contents of a remote website.
 */

// <!--
// 1. Initialization.
// $handle = curl_init();

// 2. Setting the options. There are many options, for example, an option that defines the URL.
// curl_setopt($handle, CURLOPT_URL, $url);

// 3. Executation with curl_exec().
// $data = curl_exec($handle);

// 4. Releasing the cURL handle.
// curl_close($handle); -->

$handle = curl_init();

$url = 'https://phpenthusiast.com/blog/five-php-curl-examples';

// Set the url
curl_setopt($handle, CURLOPT_URL, $url);
// Set the result output to be a string.
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec($handle);

curl_close($handle);

echo $output;
