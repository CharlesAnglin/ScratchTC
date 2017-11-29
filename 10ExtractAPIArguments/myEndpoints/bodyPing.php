<?php
$healthy;
$_7BtextVariable_7D;
$status;
$returnBody;
$x;
$y;

function text_indexOf($text, $search) {
  $pos = strpos($text, $search);
  return $pos === false ?  0 : $pos + 1;
}

function healthCheckBasedOnBody($x, $y, $request_body) {
  global $healthy, $_7BtextVariable_7D, $status, $returnBody;
  $healthy = text_indexOf($request_body, 'healthy');
  if ($healthy != 0) {
    $status = 200;
    $returnBody = 'Healthy!';
  } else {
    $status = 500;
    $returnBody = 'Unhealthy!';
  }
  return $returnBody;
}


$request_body = file_get_contents("php://input");
echo(healthCheckBasedOnBody($_GET["x"],$_GET["y"],$request_body));
http_response_code($status);

?>