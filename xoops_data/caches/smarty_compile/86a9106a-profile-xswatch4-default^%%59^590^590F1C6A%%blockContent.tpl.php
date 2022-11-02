<?php /* Smarty version 2.6.32, created on 2022-11-02 15:51:15
         compiled from xswatch4/tpl/blockContent.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'xswatch4/tpl/blockContent.tpl', 1, false),)), $this); ?>
<?php if (((is_array($_tmp=@$this->_tpl_vars['xoops_isadmin'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?>
<a class="toolbar-block-edit btn btn-large btn-warning" href="<?php echo 'http://localhost/modules/system/admin.php?fct=blocksadmin&amp;op=edit&amp;bid='; ?><?php echo $this->_tpl_vars['block']['id']; ?>
" title="<?php echo @THEME_TOOLBAR_EDIT_THIS_BLOCK; ?>
"><span class="fa fa-pencil-square-o"></span></a>
<?php endif; ?>
<?php echo $this->_tpl_vars['block']['content']; ?>
