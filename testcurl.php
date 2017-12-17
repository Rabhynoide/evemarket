<?php

$curl = curl_init('http://testcURL.com');
$result = curl_exec($curl);
if(!curl_exec($curl)){
    die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
}
curl_close()

?>
