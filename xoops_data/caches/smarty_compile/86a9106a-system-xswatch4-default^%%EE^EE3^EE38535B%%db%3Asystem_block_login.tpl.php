<?php /* Smarty version 2.6.32, created on 2022-11-02 15:40:28
         compiled from db:system_block_login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'db:system_block_login.tpl', 25, false),)), $this); ?>
<div class="loginform">
    <form action="<?php echo 'http://localhost/user.php'; ?>" method="post" role="form">
        <div class="form-group">
            <?php echo $this->_tpl_vars['block']['lang_username']; ?>

            <input class="form-control" type="text" name="uname" placeholder="<?php echo @THEME_LOGIN; ?>
">
        </div>

        <div class="form-group">
            <?php echo $this->_tpl_vars['block']['lang_password']; ?>

            <input class="form-control" type="password" name="pass" placeholder="<?php echo @THEME_PASS; ?>
">
        </div>

        <div class="checkbox">
            <label>
                <?php if (isset ( $this->_tpl_vars['block']['lang_rememberme'] )): ?>
                    <input type="checkbox" name="rememberme" value="On" class="formButton">
                    <?php echo $this->_tpl_vars['block']['lang_rememberme']; ?>

                <?php endif; ?>
            </label>
        </div>

        <input type="hidden" name="xoops_redirect" value="<?php echo $this->_tpl_vars['xoops_requesturi']; ?>
">
        <input type="hidden" name="op" value="login">
        <input type="submit" class="btn btn-primary btn-block btn-sm" value="<?php echo $this->_tpl_vars['block']['lang_login']; ?>
">
        <?php echo ((is_array($_tmp=@$this->_tpl_vars['block']['sslloginlink'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>

    </form>
    <a class="btn btn-info btn-xs btn-block" href="<?php echo 'http://localhost/user.php#lost'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_lostpass']; ?>
"><?php echo $this->_tpl_vars['block']['lang_lostpass']; ?>
</a>

    <a class="btn btn-info btn-xs btn-block" href="<?php echo 'http://localhost/register.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_registernow']; ?>
"><?php echo $this->_tpl_vars['block']['lang_registernow']; ?>
</a>
</div>