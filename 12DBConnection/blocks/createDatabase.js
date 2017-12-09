Blockly.Blocks['create_database'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Create database");
    this.appendValueInput("database")
        .setCheck(null)
        .appendField("database name");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};