<?php
$status;
$healthy;
$body;

function do_a_healthcheck($healthy) {
  global $status, $body;
  if ($healthy == 'true') {
    $status = 200;
    $body = 'HEALTHY!';
  } else {
    $status = 500;
    $body = 'UNHEALTHY!';
  }
  return $body;
}


echo(do_a_healthcheck($_GET["healthy"]));
http_response_code($status);

?>