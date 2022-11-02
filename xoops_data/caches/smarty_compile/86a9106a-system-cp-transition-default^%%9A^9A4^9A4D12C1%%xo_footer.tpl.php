<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:45
         compiled from C:/xampp/htdocs/modules/system/themes/transition/xotpl/xo_footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'year', 'C:/xampp/htdocs/modules/system/themes/transition/xotpl/xo_footer.tpl', 4, false),)), $this); ?>
<!--{xo-logger-output}-->

<div id='xo-footer'>
    <div id="xo-footer-body">Powered by <a class="tooltip" rel="external" href="http://xoops.org" title="Xoops Project"><?php echo $this->_tpl_vars['xoops_version']; ?>
</a> &copy; 2001-<?php echo smarty_function_year(array(), $this);?>
</div>
    <div id="xo-footer-rss"><a class="tooltip" rel="external" href="<?php echo 'http://localhost/backend.php'; ?>" title="<?php echo @_OXYGEN_RSS; ?>
"><img src="<?php 
echo 'http://localhost/modules/system/themes/transition/images/feed.png'; ?>"/></a></div>
    <div><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_uptop.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>