Blockly.PHP['create_table'] = function(block) {
  var value_database = Blockly.PHP.valueToCode(block, 'database', Blockly.PHP.ORDER_ATOMIC);
  var value_table = Blockly.PHP.valueToCode(block, 'table', Blockly.PHP.ORDER_ATOMIC);

  var connection = '$conn = new mysqli($servername, $username, $password, '+value_database+');\n';
  var createTable = '$conn->query("'+value_table+'");\n';
  var closeConnection = '$conn->close();\n';

  var code = connection+createTable+closeConnection;
  return code;
};