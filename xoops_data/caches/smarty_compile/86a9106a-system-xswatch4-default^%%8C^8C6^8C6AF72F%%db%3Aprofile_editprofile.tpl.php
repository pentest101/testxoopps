<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:33
         compiled from db:profile_editprofile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'db:profile_editprofile.tpl', 4, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_breadcrumbs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<?php if (((is_array($_tmp=@$this->_tpl_vars['stop'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?>
    <div class='errorMsg txtleft'><?php echo $this->_tpl_vars['stop']; ?>
</div>
    <br class='clear'/>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_form.tpl", 'smarty_include_vars' => array('xoForm' => $this->_tpl_vars['userinfo'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>