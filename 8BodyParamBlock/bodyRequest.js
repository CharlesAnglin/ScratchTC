Blockly.PHP['bodyRequest'] = function(block) {
  var text_filename = block.getFieldValue('fileName');
  var value_return_status = Blockly.PHP.valueToCode(block, 'RETURN_STATUS', Blockly.PHP.ORDER_ATOMIC) || 200;


//   var code = `<?php
//   header('Content-type: application/json');

//   if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     http_response_code(503);
//     echo('{ "status": "This is a POST! Try a GET!" }');
//   }
//   else {
//     http_response_code(200);
//     echo('{ "status": "This is a GET, yay!" }');
//   }
// ?>`;
// 	var fileAndCode = text_filename + "<fileName>\n" + statements_requestparams + code;
//   return fileAndCode;



  var globals = [];
  var varName;
  var workspace = block.workspace;
  var variables = workspace.getAllVariables() || [];
  for (var i = 0, variable; variable = variables[i]; i++) {
    varName = variable.name;
    if (block.arguments_.indexOf(varName) == -1) {
      globals.push(Blockly.PHP.variableDB_.getName(varName,
          Blockly.Variables.NAME_TYPE));
    }
  }
  globals = globals.length ? '  global ' + globals.join(', ') + ';\n' : '';

  var funcName = Blockly.PHP.variableDB_.getName(
      block.getFieldValue('NAME'), Blockly.Procedures.NAME_TYPE);
  var branch = Blockly.PHP.statementToCode(block, 'STACK');
  if (Blockly.PHP.STATEMENT_PREFIX) {
    var id = block.id.replace(/\$/g, '$$$$');  // Issue 251.
    branch = Blockly.PHP.prefixLines(
        Blockly.PHP.STATEMENT_PREFIX.replace(/%1/g,
        '\'' + id + '\''), Blockly.PHP.INDENT) + branch;
  }
  if (Blockly.PHP.INFINITE_LOOP_TRAP) {
    branch = Blockly.PHP.INFINITE_LOOP_TRAP.replace(/%1/g,
        '\'' + block.id + '\'') + branch;
  }
  var returnValue = Blockly.PHP.valueToCode(block, 'RETURN_BODY',
      Blockly.PHP.ORDER_NONE) || '';
  if (returnValue) {
    returnValue = '  return ' + returnValue + ';\n';
  }
  var args = [];
  for (var i = 0; i < block.arguments_.length; i++) {
    args[i] = Blockly.PHP.variableDB_.getName(block.arguments_[i],
        Blockly.Variables.NAME_TYPE);
  }
  args.push("$request_body");
  var functionDef = 'function ' + funcName + '(' + args.join(', ') + ') {\n' +
      globals + branch + returnValue + '}';





  var phpArgs = [];
  for(var i = 0; i < block.arguments_.length; i++){
    phpArgs[i] = '$_GET["' + block.arguments_[i] + '"]';
  }
  phpArgs.push("$request_body");
  var httpResponseCode = 'http_response_code(' + value_return_status + ');\n';
  var functionCallCode = funcName + '(' + phpArgs.toString() + ')';
  var bodyResponseCode = 'echo(' + functionCallCode + ');\n';
  var requestBodyCode = '$request_body = file_get_contents("php://input");\n';
  var apiDef = "\n<fileName>\n" + text_filename + "\n<fileName>\n" + requestBodyCode + bodyResponseCode + httpResponseCode;






  code = Blockly.PHP.scrub_(block, functionDef);
  // Add % so as not to collide with helper functions in definitions list.
  Blockly.PHP.definitions_['%' + funcName] = functionDef;
  return [apiDef];
};