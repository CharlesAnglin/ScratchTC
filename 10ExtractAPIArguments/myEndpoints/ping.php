<?php
$status;
$healthy;
$body;
$x;

function do_a_healthcheck($healthy, $x) {
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


echo(do_a_healthcheck($_GET["healthy"],$_GET["x"]));
http_response_code($status);

?>