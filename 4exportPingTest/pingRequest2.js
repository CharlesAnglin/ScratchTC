Blockly.PHP['pingrequest2'] = function(block) {
  var value_filename = Blockly.PHP.valueToCode(block, 'fileName', Blockly.PHP.ORDER_ATOMIC) || "'noFileNameGiven'";
  var code = `<?php
  header('Content-type: application/json');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    http_response_code(503);
    echo('{ "status": "This is a POST! Try a GET!" }');
  }
  else {
    http_response_code(200);
    echo('{ "status": "This is a GET, yay!" }');
  }
?>`;
  var fileAndCode = value_filename + "<fileName>\n" + code;
// Requires double array because Blockly always expects the second argument of the top level array to be the order of operations.
  return fileAndCode;
};