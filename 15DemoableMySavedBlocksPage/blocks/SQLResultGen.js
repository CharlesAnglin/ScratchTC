Blockly.PHP['sql_result'] = function(block) {

  var code = 'file_get_contents("../tmp/sqlResult.txt")';
  return [code, Blockly.PHP.ORDER_NONE];
};