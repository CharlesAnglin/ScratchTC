<?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $fileName = $_GET["fileName"];

    // $body = file_get_contents('php://input');
    // $myFile = fopen("mySavedBlocks/".$fileName, "w");
    // fwrite($myFile, $body);

    // $myFile = fopen("mySavedBlocks/".$fileName, "r");
    // fclose($myfile);

    $xml = file_get_contents("mySavedBlocks/".$fileName);

    http_response_code(200);
    echo($xml);
  }
  else {
    http_response_code(503);
    echo('Use a GET request with the "fileName" as a url parameter');
  }
?>