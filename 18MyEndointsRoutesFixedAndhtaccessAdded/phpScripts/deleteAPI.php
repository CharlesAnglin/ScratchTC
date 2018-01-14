<?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $fileName = $_GET["fileName"];

    $delJson = unlink("../api/".$fileName.".json");
    $delPhp = unlink("../api/".$fileName.".php");

    http_response_code(200);
  }
  else {
    http_response_code(503);
    echo('Use a GET request');
  }
?>