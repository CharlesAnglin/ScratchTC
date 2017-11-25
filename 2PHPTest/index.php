<!DOCTYPE html>
<html>

<body>
<h1>My PHP test!</h1>

<?php
echo "My first PHP script!";
?>

<script src="/home/charlie/Applications/hmrc-development-environment/hmrc/blockly/blockly_compressed.js"></script>
<script src="/home/charlie/Applications/hmrc-development-environment/hmrc/blockly/blocks_compressed.js"></script>
<script src="/home/charlie/Applications/hmrc-development-environment/hmrc/blockly/msg/js/en.js"></script>
<script src="/home/charlie/Applications/hmrc-development-environment/hmrc/blockly/javascript_compressed.js"></script>

<xml id="toolbox" style="display: none">
  <block type="controls_if"></block>
  <block type="controls_repeat_ext"></block>
  <block type="logic_compare"></block>
  <block type="math_number"></block>
  <block type="math_arithmetic"></block>
  <block type="text"></block>
  <block type="text_print"></block>
</xml>

<script>
  var workspacePlayground = Blockly.inject('blocklyDiv',
      {toolbox: document.getElementById('toolbox')});
</script>

</body>
</html>