<?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $filesArray = array_diff(scandir("../savedBlocks"), array('..', '.'));
    $contentsArray = array();

    foreach($filesArray as $file) {
      $jsonObj = array_push($contentsArray, '{"'.$file.'": ""}');
    }

    echo("[".implode(",", $contentsArray)."]");
    http_response_code(200);
  }
  else {
    http_response_code(503);
    echo('Use a GET request');
  }
?>