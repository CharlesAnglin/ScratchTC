<?php
$x;
$pingOrPong;
$body;

function myFunction($pingOrPong, $request_body, $servername, $username, $password) {
  global $x, $body;
  if ($pingOrPong == 'ping') {
    $body = 'PONG';
  } else {
    $body = 'PING';
  }
  return $body;
}


// returns ping or pong
$request_body = file_get_contents("php://input");
$servername = "127.0.0.1";
$username = "root";
$password = "";
echo(myFunction($_GET["pingOrPong"],$request_body,$servername,$username,$password));
http_response_code(200);

?>