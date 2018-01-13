<?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $fileName = $_GET["fileName"];

    $delBlock = unlink("../savedBlocks/".$fileName);

    http_response_code(200);
  }
  else {
    http_response_code(503);
    echo('Use a GET request');
  }
?>