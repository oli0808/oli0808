<?php
$data = json_decode(file_get_contents('www.theaudiodb.com/api/v1/json/APIKEY/search.php?s=coldplay'));
var_dump($data);
?>
