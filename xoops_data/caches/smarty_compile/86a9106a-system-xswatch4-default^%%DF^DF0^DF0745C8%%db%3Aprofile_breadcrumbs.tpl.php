<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:33
         compiled from db:profile_breadcrumbs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'db:profile_breadcrumbs.tpl', 4, false),)), $this); ?>
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
	<?php $_from = $this->_tpl_vars['xoBreadcrumbs']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['bcloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bcloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['itm']):
        $this->_foreach['bcloop']['iteration']++;
?>
		<?php if (((is_array($_tmp=@$this->_tpl_vars['itm']['link'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')) != ''): ?>
			<li class="breadcrumb-item"><a href="<?php echo $this->_tpl_vars['itm']['link']; ?>
"><?php echo $this->_tpl_vars['itm']['title']; ?>
</a></li>
		<?php else: ?>
			<li class="breadcrumb-item active" aria-current="page"><?php echo $this->_tpl_vars['itm']['title']; ?>
</li>
		 <?php endif; ?>
	 <?php endforeach; endif; unset($_from); ?>
	</ol>
</nav>
