Blockly.Blocks['request_body'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Request body");
    this.setInputsInline(false);
    this.setOutput(true, null);
    this.setColour(20);
 this.setTooltip("gets the request body returning the body as a string. Returns an empty if no body exists.");
 this.setHelpUrl("");
  }
};