<?php
echo 'hello';
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://esi.tech.ccp.is/latest/markets/10000002/history/?datasource=tranquility&type_id=3687',
));

$result = curl_exec($curl);

echo $result;

curl_close($curl);
 ?>
