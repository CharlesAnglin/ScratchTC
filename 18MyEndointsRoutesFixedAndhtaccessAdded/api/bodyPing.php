<?php
$pingOrPong;
$_7BtextVariable_7D;
$status;
$body;

function text_indexOf($text, $search) {
  $pos = strpos($text, $search);
  return $pos === false ?  0 : $pos + 1;
}

function myFunction($request_body) {
  global $pingOrPong, $_7BtextVariable_7D, $status, $body;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pingOrPong = text_indexOf($request_body, 'ping');
  if ($pingOrPong > 0) {
    $status = 200;
    $body = 'PONG';
  } else {
    $status = 500;
    $body = 'PING';
  }
} else {
$status=405;
$body="Set http method to POST";
}
  return $body;
}


// Return 200 and "PONG" if request body contains "ping".
// Return 500 and "PING" otherwise.
$request_body = file_get_contents("php://input");
echo(myFunction($request_body));
http_response_code($status);

?>