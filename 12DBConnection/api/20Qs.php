<?php
$x;
$awnsers;
$nextQuestion;
$status;

function my_20Qs($awnsers, $request_body, $servername, $username, $password) {
  global $x, $nextQuestion, $status;
  $conn = mysqli_connect($servername, $username, $password, 'myDB');
  $result = mysqli_query($conn, ('SELECT entry FROM questionsGame WHERE id=' . $awnsers));
  $myFile = fopen("../tmp/sqlResult.txt", "w");
  fwrite($myFile, mysqli_fetch_array($result)[0]);
  mysqli_close($conn);
  $nextQuestion = (file_get_contents("../tmp/sqlResult.txt"));
  if (empty($nextQuestion)) {
    $status = 400;
  } else {
    $status = 200;
  }
  return $nextQuestion;
}


$request_body = file_get_contents("php://input");
$servername = "127.0.0.1";
$username = "root";
$password = "";
echo(my_20Qs($_GET["awnsers"],$request_body,$servername,$username,$password));
http_response_code($status);

?>