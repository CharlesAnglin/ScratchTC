Blockly.PHP['execute_sql'] = function(block) {
  var value_query = Blockly.PHP.valueToCode(block, 'query', Blockly.PHP.ORDER_ATOMIC);

  var connection = '$conn = mysqli_connect($servername, $username, $password, "id3845362_mydb");\n';
  var executeQuery = '$result = mysqli_query($conn, '+value_query+');\n';

  var openFile = '$myFile = fopen("../tmp/sqlResult.txt", "w");\n';
  //TODO: if no results print empty
  var saveFirstResult = 'fwrite($myFile, mysqli_fetch_array($result)[0]);\n';

  var closeConnection = 'mysqli_close($conn);\n';


//save multiple results
// while ($row = mysqli_fetch_array($result))  {
// 	echo($row[0]);
// }



  var code = connection+executeQuery+openFile+saveFirstResult+closeConnection;
  return code;
};