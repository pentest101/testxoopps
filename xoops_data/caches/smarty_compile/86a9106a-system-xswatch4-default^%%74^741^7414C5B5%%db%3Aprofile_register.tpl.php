<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:33
         compiled from db:profile_register.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'db:profile_register.tpl', 3, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_breadcrumbs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (count($this->_tpl_vars['steps']) > 1 && $this->_tpl_vars['current_step'] >= 0): ?>
    <div class='register-steps'>
        <span class='caption'><?php echo $this->_tpl_vars['lang_register_steps']; ?>
</span>
        <?php $_from = $this->_tpl_vars['steps']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }$this->_foreach['steploop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['steploop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['stepno'] => $this->_tpl_vars['step']):
        $this->_foreach['steploop']['iteration']++;
?>
            <?php if ($this->_tpl_vars['stepno'] == $this->_tpl_vars['current_step']): ?>
                <span class='item current'><?php echo $this->_tpl_vars['step']['step_name']; ?>
</span>
            <?php else: ?>
                <span class='item'><?php echo $this->_tpl_vars['step']['step_name']; ?>
</span>
            <?php endif; ?>
            <?php if (! ($this->_foreach['steploop']['iteration'] == $this->_foreach['steploop']['total'])): ?>
                <span class='delimiter'>&raquo;</span>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['stop']): ?>
	<div class="alert alert-danger" role="alert">
		<?php echo $this->_tpl_vars['stop']; ?>

    </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['confirm']): ?>
    <?php $_from = $this->_tpl_vars['confirm']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['msg']):
?>
        <div class="alert alert-primary" role="alert">
			<?php echo $this->_tpl_vars['msg']; ?>

		</div>
    <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['regform']): ?>
    <?php echo $this->_tpl_vars['regform']['rendered']; ?>

<?php elseif ($this->_tpl_vars['finish']): ?>
    <h1><?php echo $this->_tpl_vars['finish']; ?>
</h1>
    <?php if ($this->_tpl_vars['finish_message']): ?><p><?php echo $this->_tpl_vars['finish_message']; ?>
</p><?php endif; ?>
    <?php if ($this->_tpl_vars['finish_login']): ?>
    <form id='register_login' name='register_login' action='user.php' method='post'>
    <input type='submit' value="<?php echo $this->_tpl_vars['finish_login']; ?>
">
    <input type='hidden' name="op" id="op" value="login">
    <input type='hidden' name="uname" id="uname" value="<?php echo $this->_tpl_vars['finish_uname']; ?>
">
    <input type='hidden' name="pass" id="pass" value="<?php echo $this->_tpl_vars['finish_pass']; ?>
">
    </form>
    <?php endif; ?>
<?php endif; ?>