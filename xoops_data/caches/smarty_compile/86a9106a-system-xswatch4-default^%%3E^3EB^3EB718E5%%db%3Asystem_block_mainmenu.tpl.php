<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:37
         compiled from db:system_block_mainmenu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'db:system_block_mainmenu.tpl', 2, false),)), $this); ?>
<ul class="nav flex-column">
    <li class="nav-item<?php if (! ((is_array($_tmp=@$this->_tpl_vars['block']['nothome'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?> active<?php endif; ?>"><a class="nav-link" href="<?php echo 'http://localhost/'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_home']; ?>
"><span
                    class="fa fa-home"></span> <?php echo $this->_tpl_vars['block']['lang_home']; ?>
</a></li>
    <!-- start module menu loop -->
    <?php $_from = $this->_tpl_vars['block']['modules']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module']):
?>
        <li class="nav-item<?php if (((is_array($_tmp=@$this->_tpl_vars['module']['highlight'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?> active<?php endif; ?>">
            <a class="nav-link" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['module']['directory']; ?>
/" title="<?php echo $this->_tpl_vars['module']['name']; ?>
"><span class="fa fa-check<?php if (((is_array($_tmp=@$this->_tpl_vars['module']['highlight'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?>-square-o<?php endif; ?>"></span>
                <?php echo $this->_tpl_vars['module']['name']; ?>

            </a>
            <ul>
                <?php $_from = $this->_tpl_vars['module']['sublinks']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sublink']):
?>
                    <li>
                        <a class="dropdown" href="<?php echo $this->_tpl_vars['sublink']['url']; ?>
" title="<?php echo $this->_tpl_vars['sublink']['name']; ?>
"><?php echo $this->_tpl_vars['sublink']['name']; ?>
</a>
                    </li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        </li>
    <?php endforeach; endif; unset($_from); ?>
    <!-- end module menu loop -->
</ul>