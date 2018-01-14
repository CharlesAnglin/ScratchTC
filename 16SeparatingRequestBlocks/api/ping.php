<?php
$status;
$body;
$asd;
$pingOrPong;
$x;

function myFunction($pingOrPong, $request_body, $servername, $username, $password) {
  global $status, $body, $asd, $x;
  if ($pingOrPong == 'ping') {
    $status = 200;
    $body = 'PONG';
  } else {
    $status = 500;
    $body = 'PING';
  }
  return $body;
}


// Return 200 and "PONG" when var is "ping".
// Return 500 and "PING" otherwise.
$request_body = file_get_contents("php://input");
$servername = "127.0.0.1";
$username = "root";
$password = "";
echo(myFunction($_GET["pingOrPong"],$request_body,$servername,$username,$password));
http_response_code($status);

?>