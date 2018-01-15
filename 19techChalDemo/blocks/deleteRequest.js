Blockly.Blocks['deleteRequest'] = {
  /**
   * Block for defining a procedure with a return value.
   * @this Blockly.Block
   */
  init: function() {
    var nameField = new Blockly.FieldTextInput('',
        Blockly.Procedures.rename);
    this.appendDummyInput()
        .appendField("DELETE request");
    this.appendDummyInput()
        .appendField("with route: api /")
        .appendField(nameField, 'NAME')
    this.appendDummyInput()
        .appendField('', 'PARAMS');
    this.setMutator(new Blockly.Mutator(['procedures_mutatorarg']));
    if ((this.workspace.options.comments ||
         (this.workspace.options.parentWorkspace &&
          this.workspace.options.parentWorkspace.options.comments)) &&
        Blockly.Msg.PROCEDURES_DEFRETURN_COMMENT) {
      this.setCommentText(Blockly.Msg.PROCEDURES_DEFRETURN_COMMENT);
    }
    this.setColour(330);
    this.setTooltip(Blockly.Msg.PROCEDURES_DEFRETURN_TOOLTIP);
    this.setHelpUrl(Blockly.Msg.PROCEDURES_DEFRETURN_HELPURL);
    this.arguments_ = [];
    this.setStatements_(true);
    this.statementConnection_ = null;   
    this.appendValueInput('RETURN_STATUS')
        .setCheck("Number")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("return status");
    this.appendValueInput('RETURN_BODY')
        .setCheck("String")
        .setAlign(Blockly.ALIGN_RIGHT)
        .appendField("return body");
  },
  setStatements_: Blockly.Blocks['procedures_defnoreturn'].setStatements_,
  updateParams_: Blockly.Blocks['procedures_defnoreturn'].updateParams_,
  mutationToDom: Blockly.Blocks['procedures_defnoreturn'].mutationToDom,
  domToMutation: Blockly.Blocks['procedures_defnoreturn'].domToMutation,
  decompose: Blockly.Blocks['procedures_defnoreturn'].decompose,
  compose: Blockly.Blocks['procedures_defnoreturn'].compose,
  /**
   * Return the signature of this procedure definition.
   * @return {!Array} Tuple containing three elements:
   *     - the name of the defined procedure,
   *     - a list of all its arguments,
   *     - that it DOES have a return value.
   * @this Blockly.Block
   */
  getProcedureDef: function() {
    return [this.getFieldValue('NAME'), this.arguments_, true];
  },
  getVars: Blockly.Blocks['procedures_defnoreturn'].getVars,
  renameVar: Blockly.Blocks['procedures_defnoreturn'].renameVar,
  customContextMenu: Blockly.Blocks['procedures_defnoreturn'].customContextMenu,
  callType_: 'procedures_callreturn'
};