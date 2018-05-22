<?php
$ch = curl_init('https://nl17.seedr.cc/downloads/97e9fe8ffb588e6e3e70eee1b023bdb78c1f619f/[HorribleSubs]%20Yowamushi%20Pedal%20-%20Glory%20Line%20-%2020%20[480p].mkv?st=G01HJS5ojRClhsY5WKZ7TA&e=1527029074');
$fp = fopen('flower.mkv', 'wb');
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);
?>
