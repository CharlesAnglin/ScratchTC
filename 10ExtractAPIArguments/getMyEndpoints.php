<?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $filesArray = preg_grep('~\.json~',scandir("myEndpoints"));
    $contentsArray = array();

    foreach($filesArray as $file) {
      $json = file_get_contents("myEndpoints/".$file);
      $jsonObj = array_push($contentsArray, '{"'.$file.'":'.$json.'}');
    }

    echo("[".implode(",", $contentsArray)."]");
    http_response_code(200);
  }
  else {
    http_response_code(503);
    echo('Use a GET request');
  }
?>