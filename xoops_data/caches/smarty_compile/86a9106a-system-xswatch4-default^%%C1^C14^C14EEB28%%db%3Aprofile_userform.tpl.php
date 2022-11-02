<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:33
         compiled from db:profile_userform.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'db:profile_userform.tpl', 29, false),)), $this); ?>
<div class="container-fluid">
	<legend class="bold"><?php echo $this->_tpl_vars['lang_login']; ?>
</legend>
	<form action="user.php" method="post">
		<label for="profile-uname"><?php echo $this->_tpl_vars['lang_username']; ?>
</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
			</div>
			<input class="form-control" type="text" name="uname" id="profile-uname" value="" placeholder="<?php echo @THEME_LOGIN; ?>
">
		</div>

		<label for="profile-pass"><?php echo $this->_tpl_vars['lang_password']; ?>
</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
			</div>
			<input class="form-control" type="password" name="pass" id="profile-pass" placeholder="<?php echo @THEME_PASS; ?>
">
		</div>
		<div class="checkbox">
			<label>
				<?php if (isset ( $this->_tpl_vars['lang_rememberme'] )): ?>
			<input type="checkbox" name="rememberme">
				<?php echo $this->_tpl_vars['lang_rememberme']; ?>

				<?php endif; ?>
			</label>
		</div>

		<input type="hidden" name="op" value="login"/>
		<input type="hidden" name="xoops_redirect" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['redirect_page'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
"/>
		<button type="submit" class="btn btn-secondary"><?php echo $this->_tpl_vars['lang_login']; ?>
</button>
	</form>
	<br>
	<a name="lost"></a>

	<div><?php echo $this->_tpl_vars['lang_notregister']; ?>
<br></div>
	<br>
	<legend class="bold"><?php echo $this->_tpl_vars['lang_lostpassword']; ?>
</legend>
	<p><?php echo $this->_tpl_vars['lang_noproblem']; ?>
</p>
	<form action="lostpass.php" method="post">
		<div class="form-group">
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="mail-addon1">@</span>
				</div>
				<input class="form-control" type="text" name="email" id="profile-lostpass" placeholder="<?php echo @THEME_EMAIL; ?>
" aria-label="<?php echo @THEME_EMAIL; ?>
" aria-describedby="mail-addon1">
			</div>
			<input type="hidden" name="op" value="mailpasswd"/>
			<input type="hidden" name="t"  value="<?php echo $this->_tpl_vars['mailpasswd_token']; ?>
"/>
			<button type="submit" class="btn btn-secondary"><?php echo $this->_tpl_vars['lang_sendpassword']; ?>
</button>
		</div>
	</form>
</div>

