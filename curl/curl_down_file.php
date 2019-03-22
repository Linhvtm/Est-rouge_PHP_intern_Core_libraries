<?php

// Using cURL to download a file

$handle = curl_init();
// The distant site url.
$url = 'https://www.gutenberg.org/files/46852/46852-h/46852-h.htm';
// The file on our server.
$file = __DIR__.DIRECTORY_SEPARATOR.'the_divine_comedy.html';
// Open the file on our server for writing.
$fileHandle = fopen($file, 'w');

curl_setopt_array($handle,
  array(
     CURLOPT_URL => $url,
      CURLOPT_FILE => $fileHandle,
  )
);
$data = curl_exec($handle);

$responseCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);

$downloadLength = curl_getinfo($handle, CURLINFO_CONTENT_LENGTH_DOWNLOAD);

if (curl_errno($handle)) {
    echo curl_error($handle);
} else {
    if ($responseCode == '200') {
        echo 'successful request';
    }

    echo ' # download length : '.$downloadLength;

    curl_close($handle);

    fclose($fileHandle);
}
