<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:38
         compiled from xswatch4/tpl/content-zone.tpl */ ?>
<?php if ($this->_tpl_vars['xoBlocks']['canvas_left'] && $this->_tpl_vars['xoBlocks']['canvas_right']): ?>
    <div class="col-md-6">
<?php elseif ($this->_tpl_vars['xoBlocks']['canvas_left']): ?>
    <div class="col-md-9">
<?php elseif ($this->_tpl_vars['xoBlocks']['canvas_right']): ?>
    <div class="col-md-9">
<?php else: ?>
    <div class="col-12">
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/contents.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div class="row">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/centerBlock.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/centerLeft.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/centerRight.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
</div>