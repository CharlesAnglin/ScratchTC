<?php
  header('Content-type: application/json');

$returnString = "return string:\n";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	$postBody = json_decode(file_get_contents("php://input"));
  	$fileName = $postBody->fileName;
  	$fileBody = $postBody->fileBody;

  	$myFile = fopen($fileName, "w");
    foreach($fileBody as $line){
      fwrite($myFile, $line . "\n");
    }

    http_response_code(200);
    echo("created " . $fileName);
  }
  else {
    http_response_code(503);
    echo('Need code body');
  }
?>