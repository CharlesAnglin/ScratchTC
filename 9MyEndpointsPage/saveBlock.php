<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fileName = $_GET["fileName"];

    $body = file_get_contents('php://input');
    $myFile = fopen("mySavedBlocks/".$fileName, "w");
    fwrite($myFile, $body);

    http_response_code(200);
    echo("created " . $fileName);
  }
  else {
    http_response_code(503);
    echo('Use a POST request with the "fileName" as a url parameter and the block xml as the post body');
  }
?>