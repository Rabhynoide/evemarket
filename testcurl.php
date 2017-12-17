<?php
$curl = curl_init('https://esi.tech.ccp.is/latest/markets/10000002/history/?datasource=tranquility&type_id=3687');
$result = curl_exec($curl);
echo $result;
curl_close();
?>
