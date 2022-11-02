<?php /* Smarty version 2.6.32, created on 2022-11-02 15:51:15
         compiled from xswatch4/tpl/rightBlock.tpl */ ?>
<?php if ($this->_tpl_vars['xoBlocks']['canvas_right']): ?>
    <div class="col-md-3 xoops-side-blocks">
        <?php $_from = $this->_tpl_vars['xoBlocks']['canvas_right']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
            <aside>
                <?php if ($this->_tpl_vars['block']['title']): ?><h4 class="block-title"><?php echo $this->_tpl_vars['block']['title']; ?>
</h4><?php endif; ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/blockContent.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </aside>
        <?php endforeach; endif; unset($_from); ?>
    </div>
<?php endif; ?>