<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:33
         compiled from db:profile_avatar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'db:profile_avatar.tpl', 3, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_breadcrumbs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (((is_array($_tmp=@$this->_tpl_vars['old_avatar'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?>
    <div class="pad10 center">
        <h4 class="bold red"><?php echo @_US_OLDDELETED; ?>
</h4>
        <img src="<?php echo $this->_tpl_vars['old_avatar']; ?>
" alt="" />
    </div>
<?php endif; ?>

<?php if (((is_array($_tmp=@$this->_tpl_vars['uploadavatar'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?>
<?php echo $this->_tpl_vars['uploadavatar']['javascript']; ?>

<legend class="bold"><?php echo $this->_tpl_vars['uploadavatar']['title']; ?>
</legend>
<form name="<?php echo $this->_tpl_vars['uploadavatar']['name']; ?>
" action="<?php echo $this->_tpl_vars['uploadavatar']['action']; ?>
" method="<?php echo $this->_tpl_vars['uploadavatar']['method']; ?>
" <?php echo $this->_tpl_vars['uploadavatar']['extra']; ?>
>
	<div class="form-group row">
		<!-- start of form elements loop -->
		<?php $_from = $this->_tpl_vars['uploadavatar']['elements']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['element']):
?>
			<?php if (! ((is_array($_tmp=@$this->_tpl_vars['element']['hidden'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?>
				<label class="col-2 col-form-label">
					<span class='caption-text'><?php echo ((is_array($_tmp=@$this->_tpl_vars['element']['caption'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
</span>
				</label>
				<div class="col-10">
					<?php echo $this->_tpl_vars['element']['body']; ?>

				</div>
		    <?php else: ?>
			<?php echo $this->_tpl_vars['element']['body']; ?>

			<?php endif; ?>
			<?php if (((is_array($_tmp=@$this->_tpl_vars['element']['description'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')) != ''): ?>
				<small id="passwordHelpBlock" class="form-text text-muted">
					<?php echo $this->_tpl_vars['element']['description']; ?>

				</small>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		<!-- end of form elements loop -->
	</div>
</form>
<br>
<?php endif; ?>

<br>
<?php echo $this->_tpl_vars['chooseavatar']['javascript']; ?>

<legend class="bold"><?php echo $this->_tpl_vars['chooseavatar']['title']; ?>
</legend>
<form name="<?php echo $this->_tpl_vars['chooseavatar']['name']; ?>
" action="<?php echo $this->_tpl_vars['chooseavatar']['action']; ?>
" method="<?php echo $this->_tpl_vars['chooseavatar']['method']; ?>
" <?php echo $this->_tpl_vars['chooseavatar']['extra']; ?>
>
	<div class="form-group">
		<!-- start of form elements loop -->
		<?php $_from = $this->_tpl_vars['chooseavatar']['elements']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['element']):
?>
			<?php if (! $this->_tpl_vars['element']['hidden']): ?>
				<label class="col-sm-2 col-form-label">
					<span class='caption-text'><?php echo ((is_array($_tmp=@$this->_tpl_vars['element']['caption'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
</span>
				</label>
				<div class="col-sm-10">
					<?php echo $this->_tpl_vars['element']['body']; ?>

				</div>
			<?php else: ?>
			<?php echo $this->_tpl_vars['element']['body']; ?>

			<?php endif; ?>
			<?php if (((is_array($_tmp=@$this->_tpl_vars['element']['description'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')) != ''): ?>
				<small id="passwordHelpBlock" class="form-text text-muted">
					<?php echo $this->_tpl_vars['element']['description']; ?>

				</small>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		<!-- end of form elements loop -->
	</div>
</form>