Blockly.PHP['create_database'] = function(block) {
  var value_database = Blockly.PHP.valueToCode(block, 'database', Blockly.PHP.ORDER_ATOMIC);

  var connection = '$conn = new mysqli($servername, $username, $password);\n';
  var createDatabase = '$conn->query("CREATE DATABASE IF NOT EXISTS '+value_database+'");\n';
  var closeConnection = '$conn->close();\n';

  var code = connection+createDatabase+closeConnection;
  return code;
};