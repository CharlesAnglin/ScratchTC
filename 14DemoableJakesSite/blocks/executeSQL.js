Blockly.Blocks['execute_sql'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Execute SQL query");
    this.appendValueInput("query")
        .setCheck(null)
        .appendField("SQL query");
    this.setInputsInline(false);
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};