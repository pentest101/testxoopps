<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:44
         compiled from C:/xampp/htdocs/modules/system/themes/transition/xotpl/xo_page.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'C:/xampp/htdocs/modules/system/themes/transition/xotpl/xo_page.tpl', 4, false),)), $this); ?>
<div id="xo-body-contain">
    <div id="xo-body">

        <?php if (((is_array($_tmp=@$this->_tpl_vars['showTransitionInfo'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?>
        <div id="trans-info">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/info/".($this->_tpl_vars['xoops_language']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['xoops_contents']): ?>
            <div id="xo-content">
                                <?php if (((is_array($_tmp=@$this->_tpl_vars['xo_system_menu'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?><?php echo $this->_tpl_vars['xo_system_menu']; ?>
<?php endif; ?>
                <?php echo $this->_tpl_vars['xoops_contents']; ?>

            </div>
        <?php endif; ?>
        <?php if (((is_array($_tmp=@$this->_tpl_vars['modules'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?>
            <div>
                <div id="xo-index">
                    <div id="xo-body-icons" class="xo-index-option"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_icons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
                    <div id="xo-tabs" class="xo-index-option"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_tabs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
                </div>
                <div id="xo-index">
                    <div id="xo-modules" class="xo-index-option"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_modules.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
                    <div id="xo-accordion" class="xo-index-option"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_accordion.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
                </div>
            </div>
            <div id="xo-index-bottom"></div>
        <?php endif; ?>
    </div>
</div>