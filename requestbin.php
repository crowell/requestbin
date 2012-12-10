<?php

header('Access-Control-Allow-Origin: *');
$postdata = file_get_contents("php://input");
$file = "log.txt";
$current = file_get_contents($file);
$current .= $postdata;
$current .= "\n";
file_put_contents($file, $current);

?>
LOLOLOLHAX
