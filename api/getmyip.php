<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

//call https://myip.free.nf/ to refresh it every 30 days
$data = file_get_contents('https://myip.free.nf/');
header('Content-Type: text/html; charset=UTF-8');
//echo $data;
echo '<html><title>call myip.free.nf</title><body>click to see my IP: <a href="https://myip.free.nf/">https://myip.free.nf/</a></body></html>'
?>