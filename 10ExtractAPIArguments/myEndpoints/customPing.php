<?php
$status;
$healthy;
$body;

function doStuff($healthy) {
  global $status, $body;
  if ($healthy == 'true') {
    $status = 200;
    $body = 'Healthy!';
  } else {
    $status = 500;
    $body = 'Not healthy!';
  }
  return $body;
}


echo("funct return value: " . doStuff($_GET["healthy"]));
http_response_code($status);

?>