<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "myDB";



// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Create database
// $sql = "CREATE DATABASE ". $dbname;
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }





$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "CREATE TABLE IF NOT EXISTS questionsGame(id INT(21) PRIMARY KEY, entry VARCHAR(60))";
// $sql = "DROP TABLE questionsGame";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

//1 = Yes, 0 = No
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (1, 'Does it have four legs?')");

mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (10, 'Can it fly?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (11, 'Is it domesticated?')");

mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (100, 'Does it live in the water?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (110, 'Does it live on the Savannah?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (101, 'Is it bigger than (or the same size as) a seagul?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (111, 'Does it live in the house?')");

mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (1000, 'Does it have scales?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (1100, 'Does it live in north america?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (1010, 'Does it begin with a P?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (1110, 'Is it bigger than (or the same size as) a Cow?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (1001, 'Biger than a man?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (1101, 'Is it taller than a man?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (1011, 'Does it begin with an S?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (1111, 'Is it bigger than (or the same size as) a cat?')");

mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (10000, 'Is it a spider?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (11000, 'Is it a kangaroo?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (10100, 'Is it a duck?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (11100, 'Is it a sheep?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (10010, 'Is it a whale?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (11010, 'Is it a lion?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (10110, 'Is it an Eagle?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (11110, 'Is it a guinea pig?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (10001, 'Is it a snake?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (11001, 'Is it a wolf?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (10101, 'Is it a pigeon?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (11101, 'Is it a horse?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (10011, 'Is it an eel?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (11011, 'Is it an elephant?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (10111, 'Is it a Swan?')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (11111, 'Is it a dog?')");

mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (100000, 'ostrich')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (110000, 'gorilla')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (101000, 'robin')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (111000, 'pig')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (100100, 'shark')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (110100, 'rhino')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (101100, 'chicken')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (111100, 'rabbit')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (100010, 'fish')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (110010, 'bear')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (101010, 'parrot')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (111010, 'cow')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (100110, 'crab')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (110110, 'giraffe')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (101110, 'seagul')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (111110, 'cat')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (100001, 'spider')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (110001, 'kangaroo')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (101001, 'duck')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (111001, 'sheep')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (100101, 'whale')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (110101, 'lion')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (101101, 'eagle')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (111101, 'guinea pig')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (100011, 'snake')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (110011, 'wolf')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (101011, 'pigeon')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (111011, 'horse')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (100111, 'eel')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (110111, 'elephant')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (101111, 'swan')");
mysqli_query($conn, "INSERT INTO questionsGame (id, entry) VALUES (111111, 'dog')");

$result = mysqli_query($conn,"SELECT entry FROM questionsGame WHERE id=10100");
echo(mysqli_fetch_array($result)[0]);


mysqli_close($conn);

?>