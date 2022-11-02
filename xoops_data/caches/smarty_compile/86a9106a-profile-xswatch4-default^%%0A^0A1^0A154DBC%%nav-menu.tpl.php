<?php /* Smarty version 2.6.32, created on 2022-11-02 15:51:15
         compiled from xswatch4/tpl/nav-menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'xoInboxCount', 'xswatch4/tpl/nav-menu.tpl', 16, false),array('modifier', 'default', 'xswatch4/tpl/nav-menu.tpl', 20, false),)), $this); ?>
    <div class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
" class="navbar-brand xlogo" title="<?php echo $this->_tpl_vars['xoops_sitename']; ?>
">
                <img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/logo.png" alt="<?php echo $this->_tpl_vars['xoops_sitename']; ?>
">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
"><?php echo @THEME_HOME; ?>
</a>
                    </li>

                    <?php echo smarty_function_xoInboxCount(array('assign' => 'unread_count'), $this);?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="xswatch-account-menu"><?php echo @THEME_ACCOUNT; ?>
 <span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="xswatch-account-menu">
                            <?php if (((is_array($_tmp=@$this->_tpl_vars['xoops_isuser'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?>
                            <a class="dropdown-item" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php"><?php echo @THEME_ACCOUNT_EDIT; ?>
</a>
                            <a class="dropdown-item" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/viewpmsg.php"><?php echo @THEME_ACCOUNT_MESSAGES; ?>
 <span class="badge badge-primary badge-pill"><?php echo smarty_function_xoInboxCount(array(), $this);?>
</span></a>
                            <a class="dropdown-item" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/notifications.php"><?php echo @THEME_ACCOUNT_NOTIFICATIONS; ?>
</a>
                            <a class="dropdown-item" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php?op=logout"><?php echo @THEME_ACCOUNT_LOGOUT; ?>
</a>
                            <?php if (((is_array($_tmp=@$this->_tpl_vars['xoops_isadmin'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?>
                            <a class="dropdown-item" href="javascript:xswatchToolbarToggle();"><?php echo @THEME_ACCOUNT_TOOLBAR; ?>
 <span id="xswatch-toolbar-ind"></span></a>
                            <?php endif; ?>
                            <?php else: ?>
                            <a class="dropdown-item" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php"><?php echo @THEME_ACCOUNT_LOGIN; ?>
</a>
                            <a class="dropdown-item" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/register.php"><?php echo @THEME_ACCOUNT_REGISTER; ?>
</a>
                            <?php endif; ?>
                        </div>
                    </li>

                    <!-- begin custom menus - customize these for your system -->
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:;"><?php echo @THEME_MODULE1; ?>
</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="xswatch-custom-menu"><?php echo @THEME_MODULE2; ?>
 <span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="xswatch-custom-menu">
                            <a class="dropdown-item" href="javascript:;">Topic 1</a>
                            <a class="dropdown-item" href="javascript:;">Topic 2</a>
                            <a class="dropdown-item" href="javascript:;">Topic 3</a>
                            <a class="dropdown-item" href="javascript:;">Topic 4</a>
                            <a class="dropdown-item" href="javascript:;">Topic 5</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/newbb"><?php echo @THEME_MODULE3; ?>
</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/contact"><?php echo @THEME_MODULE4; ?>
</a>
                    </li>
                    <!-- end custom menus -->
                </ul>
                <?php if (((is_array($_tmp=@$this->_tpl_vars['xoops_search'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?>
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0" role="search" action="<?php echo 'http://localhost/search.php'; ?>" method="get">
						<div class="input-group mb-3">
							<input class="form-control" type="text" name="query" placeholder="<?php echo @THEME_SEARCH_TEXT; ?>
">
							<div class="input-group-append">
								<button class="btn btn-secondary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
						</div>
						<input type="hidden" name="action" value="results">
                    </form>
                </li>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>