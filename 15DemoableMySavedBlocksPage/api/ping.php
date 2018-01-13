<?php
$status;
$healthy;
$body;

function do_a_healthcheck($healthy, $request_body, $servername, $username, $password) {
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


// Returns 200 when var healthy is true.
// Returns 500 otherwise.
$request_body = file_get_contents("php://input");
$servername = "127.0.0.1";
$username = "root";
$password = "";
echo(do_a_healthcheck($_GET["healthy"],$request_body,$servername,$username,$password));
http_response_code($status);

?>