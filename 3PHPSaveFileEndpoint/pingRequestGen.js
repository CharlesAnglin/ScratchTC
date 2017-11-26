Blockly.PHP['ping'] = function(block) {
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
  return code;
};