<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:33
         compiled from db:profile_search.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_breadcrumbs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div>( <?php echo $this->_tpl_vars['total_users']; ?>
 )</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_form.tpl", 'smarty_include_vars' => array('xoForm' => $this->_tpl_vars['searchform'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>