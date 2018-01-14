<?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $fileName = $_GET["fileName"];

    $xml = file_get_contents("../savedBlocks/".$fileName);

    http_response_code(200);
    echo($xml);
  }
  else {
    http_response_code(503);
    echo('Use a GET request with the "fileName" as a url parameter');
  }
?>