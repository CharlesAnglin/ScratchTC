<?php
$x;
$awnsers;
$nextQuestion;
$status;
$answers;

function answer_5_questions($answers, $request_body, $servername, $username, $password) {
  global $x, $awnsers, $nextQuestion, $status;
  $conn = mysqli_connect($servername, $username, $password, "myDB");
  $result = mysqli_query($conn, ('SELECT entry FROM questionsGame WHERE id=' . $answers));
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


// Returns questions and answers. Initial question begins
// with answers=1. For subsequent questions append a
// 0 for a 'no' answer and a 1 for a 'yes' answer.
$request_body = file_get_contents("php://input");
$servername = "127.0.0.1";
$username = "root";
$password = "";
echo(answer_5_questions($_GET["answers"],$request_body,$servername,$username,$password));
http_response_code($status);

?>