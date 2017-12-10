<?php
$findQuery;
$x;
$name;

function dbFind($name, $request_body, $servername, $username, $password) {
  global $findQuery, $x;
  $findQuery = implode('', array('SELECT name FROM myTable WHERE name=\'',$name,'\''));
  $conn = new mysqli($servername, $username, $password);
  $conn->query("CREATE DATABASE IF NOT EXISTS 'myDB'");
  $conn->close();
  $conn = new mysqli($servername, $username, $password, 'myDB');
  $conn->query("'CREATE TABLE IF NOT EXISTS myTable(id INT(6) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30))'");
  $conn->close();
  $conn = mysqli_connect($servername, $username, $password, 'myDB');
  $result = mysqli_query($conn, "$findQuery");
  $myFile = fopen("../tmp/sqlResult.txt", "w");
  fwrite($myFile, mysqli_fetch_array($result)[0]);
  mysqli_close($conn);
  return file_get_contents("../tmp/sqlResult.txt");
;
}


$request_body = file_get_contents("php://input");
$servername = "127.0.0.1";
$username = "root";
$password = "";
echo(dbFind($_GET["name"],$request_body,$servername,$username,$password));
http_response_code(200);

?>