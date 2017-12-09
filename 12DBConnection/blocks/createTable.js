Blockly.Blocks['create_table'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Create table");
    this.appendValueInput("database")
        .setCheck(null)
        .appendField("database name");
    this.appendValueInput("table")
        .setCheck(null)
        .appendField("create table query");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(230);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};