<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:37
         compiled from db:system_block_user.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'xoInboxCount', 'db:system_block_user.tpl', 16, false),)), $this); ?>
<div class="usermenu">
    <ul class="nav flex-column">
        <?php if ($this->_tpl_vars['xoops_isadmin']): ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo 'http://localhost/admin.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_adminmenu']; ?>
"><span class="fa fa-wrench"></span><?php echo $this->_tpl_vars['block']['lang_adminmenu']; ?>
</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo 'http://localhost/user.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
"><span class="fa fa-user-o"></span><?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
</a>
            </li>
        <?php else: ?>
            <li class="nav-item"><a class="nav-link menuTop" href="<?php echo 'http://localhost/user.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
"><span class="fa fa-user-o"></span><?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
</a>
            </li>
        <?php endif; ?>
        <li class="nav-item"><a class="nav-link" href="<?php echo 'http://localhost/edituser.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_editaccount']; ?>
"><span class="fa fa-pencil"></span><?php echo $this->_tpl_vars['block']['lang_editaccount']; ?>
</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="<?php echo 'http://localhost/notifications.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_notifications']; ?>
"><span class="fa fa-info"></span><?php echo $this->_tpl_vars['block']['lang_notifications']; ?>
</a>
        </li>
        <?php echo smarty_function_xoInboxCount(array('assign' => 'unread_count'), $this);?>

        <?php if ($this->_tpl_vars['unread_count'] > 0): ?>
            <li class="nav-item"><a class="nav-link info" href="<?php echo 'http://localhost/viewpmsg.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_inbox']; ?>
"><span class="fa fa-envelope-o"></span><?php echo $this->_tpl_vars['block']['lang_inbox']; ?>

                    <span class="badge badge-primary badge-pill"><?php echo $this->_tpl_vars['unread_count']; ?>
</span></a></li>
        <?php else: ?>
            <li class="nav-item"><a class="nav-link" href="<?php echo 'http://localhost/viewpmsg.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_inbox']; ?>
"><span class="fa fa-envelope-open-o"></span><?php echo $this->_tpl_vars['block']['lang_inbox']; ?>
</a>
            </li>
        <?php endif; ?>
        <li class="nav-item"><a class="nav-link" href="<?php echo 'http://localhost/user.php?op=logout'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_logout']; ?>
"><span class="fa fa-sign-out"></span><?php echo $this->_tpl_vars['block']['lang_logout']; ?>
</a>
        </li>
    </ul>
</div>