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
  $pingOrPong = text_indexOf($request_body, 'ping');
  if ($pingOrPong > 0) {
    $status = 200;
    $body = 'PONG';
  } else {
    $status = 500;
    $body = 'PING';
  }
  return $body;
}


// Return 200 and "PONG" if request body contains "ping".
// Return 500 and "PING" otherwise.
$request_body = file_get_contents("php://input");
echo(myFunction($request_body));
http_response_code($status);

?>