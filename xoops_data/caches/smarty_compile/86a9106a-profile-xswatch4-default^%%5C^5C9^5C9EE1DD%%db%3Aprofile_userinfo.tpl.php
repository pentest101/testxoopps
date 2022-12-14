<?php /* Smarty version 2.6.32, created on 2022-11-02 15:51:14
         compiled from db:profile_userinfo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'securityToken', 'db:profile_userinfo.tpl', 46, false),array('modifier', 'default', 'db:profile_userinfo.tpl', 70, false),array('modifier', 'cat', 'db:profile_userinfo.tpl', 81, false),array('modifier', 'replace', 'db:profile_userinfo.tpl', 81, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_breadcrumbs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="row">
    <div class="col-md-6 text-center">
        <?php if ($this->_tpl_vars['avatar']): ?>
            <img src="<?php echo $this->_tpl_vars['avatar']; ?>
" alt="<?php echo $this->_tpl_vars['uname']; ?>
" class="img-responsive img-rounded img-thumbnail">
        <?php endif; ?>
            <ul class="list-unstyled">
                <li><span class="label label-info"><?php echo $this->_tpl_vars['uname']; ?>
</span></li>
                <?php if ($this->_tpl_vars['email']): ?>
                    <li><span class="label label-info"><?php echo $this->_tpl_vars['email']; ?>
</span></li>
                <?php endif; ?>
            </ul>
    </div><!-- .col-md-6 -->

    <div class="col-md-6">
        <?php if (! $this->_tpl_vars['user_ownpage'] && $this->_tpl_vars['xoops_isuser'] == true): ?>
            <form name="usernav" action="user.php" method="post">
                <input class="btn btn-primary btn-xs btn-block" type="button" value="<?php echo @_PROFILE_MA_SENDPM; ?>
"
                       onclick="openWithSelfMain('<?php echo $this->_tpl_vars['xoops_url']; ?>
/pmlite.php?send2=1&amp;to_userid=<?php echo $this->_tpl_vars['user_uid']; ?>
', 'pmlite', 565, 500);">
            </form>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['user_ownpage'] == true): ?>
            <form name="usernav" action="user.php" method="post">
                <input class="btn btn-primary btn-xs btn-block" type="button" value="<?php echo $this->_tpl_vars['lang_editprofile']; ?>
"
                       onclick="location='<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/edituser.php'">
                <input class="btn btn-primary btn-xs btn-block" type="button" value="<?php echo $this->_tpl_vars['lang_changepassword']; ?>
"
                       onclick="location='<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/changepass.php'">
                <?php if ($this->_tpl_vars['user_changeemail']): ?>
                    <input class="btn btn-primary btn-xs btn-block" type="button" value="<?php echo @_PROFILE_MA_CHANGEMAIL; ?>
"
                           onclick="location='<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/changemail.php'">
                <?php endif; ?>
                <?php if ($this->_tpl_vars['user_candelete'] == true): ?>
                    <input class="btn btn-primary btn-xs btn-block" type="button" value="<?php echo $this->_tpl_vars['lang_deleteaccount']; ?>
" onclick="location='user.php?op=delete'">
                <?php endif; ?>
                <input class="btn btn-primary btn-xs btn-block" type="button" value="<?php echo $this->_tpl_vars['lang_avatar']; ?>
" onclick="location='edituser.php?op=avatarform'">
                <input class="btn btn-primary btn-xs btn-block" type="button" value="<?php echo $this->_tpl_vars['lang_inbox']; ?>
" onclick="location='<?php echo $this->_tpl_vars['xoops_url']; ?>
/viewpmsg.php'">
                <input class="btn btn-primary btn-xs btn-block" type="button" value="<?php echo $this->_tpl_vars['lang_logout']; ?>
"
                       onclick="location='<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/user.php?op=logout'">
            </form>
        <?php elseif ($this->_tpl_vars['xoops_isadmin'] != false): ?>
            <form method="post" action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/admin/deactivate.php">
                <input class="btn btn-warning btn-xs btn-block" type="button" value="<?php echo $this->_tpl_vars['lang_editprofile']; ?>
"
                       onclick="location='<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['xoops_dirname']; ?>
/admin/user.php?op=edit&amp;id=<?php echo $this->_tpl_vars['user_uid']; ?>
'">
                <input type="hidden" name="uid" value="<?php echo $this->_tpl_vars['user_uid']; ?>
">
                <?php echo smarty_function_securityToken(array(), $this);?>

                <?php if ($this->_tpl_vars['userlevel'] == 1): ?>
                    <input type="hidden" name="level" value="0">
                    <input class="btn btn-danger btn-xs btn-block" type="button" value="<?php echo @_PROFILE_MA_DEACTIVATE; ?>
" onclick="submit();">
                <?php else: ?>
                    <input type="hidden" name="level" value="1">
                    <input class="btn btn-warning btn-xs btn-block" type="button" value="<?php echo @_PROFILE_MA_ACTIVATE; ?>
" onclick="submit();">
                <?php endif; ?>
            </form>
        <?php endif; ?>
    </div><!-- .col-md-6 -->
</div><!-- .row -->

<?php $_from = $this->_tpl_vars['categories']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
    <?php if (isset ( $this->_tpl_vars['category']['fields'] )): ?>
        <ul id="profile-category-<?php echo $this->_tpl_vars['category']['cat_id']; ?>
" class="profile-values list-unstyled">
            <li class="profile-category-title"><?php echo $this->_tpl_vars['category']['cat_title']; ?>
</li>
            <?php $_from = $this->_tpl_vars['category']['fields']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                <li><strong><?php echo $this->_tpl_vars['field']['title']; ?>
:</strong> <?php echo $this->_tpl_vars['field']['value']; ?>
</li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
    <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php if (((is_array($_tmp=@$this->_tpl_vars['modules'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?>
    <ul class="profile-values list-unstyled">
        <li class="profile-category-title"><?php echo $this->_tpl_vars['recent_activity']; ?>
</li>
        <?php $_from = $this->_tpl_vars['modules']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module']):
?>
<!-- alain01 -->
            <div class="card my-3">
                <div class="card-header"><h5><?php echo $this->_tpl_vars['module']['name']; ?>
 <?php if ($this->_tpl_vars['module']['showall_link']): ?><span class="x-small">| <?php echo $this->_tpl_vars['module']['showall_link']; ?>
</span><?php endif; ?></h5></div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <?php $_from = $this->_tpl_vars['module']['results']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
                        <li class="list-group-item list-group-item-action">
                            <?php $this->assign('url_image_overloaded', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['xoops_imageurl'])) ? $this->_run_mod_handler('cat', true, $_tmp, "modules/") : smarty_modifier_cat($_tmp, "modules/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['result']['image']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['result']['image'])))) ? $this->_run_mod_handler('replace', true, $_tmp, ($this->_tpl_vars['xoops_url'])."/modules/", '') : smarty_modifier_replace($_tmp, ($this->_tpl_vars['xoops_url'])."/modules/", ''))); ?>
                            <?php $this->assign('path_image_overloaded', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['xoops_rootpath'])) ? $this->_run_mod_handler('cat', true, $_tmp, "/themes/") : smarty_modifier_cat($_tmp, "/themes/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['xoops_theme']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['xoops_theme'])))) ? $this->_run_mod_handler('cat', true, $_tmp, "/") : smarty_modifier_cat($_tmp, "/")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['url_image_overloaded']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['url_image_overloaded'])))) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['xoops_imageurl'], '') : smarty_modifier_replace($_tmp, $this->_tpl_vars['xoops_imageurl'], ''))); ?>

                            <?php if (file_exists ( $this->_tpl_vars['path_image_overloaded'] )): ?>
                                <div class="d-inline"><img src="<?php echo $this->_tpl_vars['url_image_overloaded']; ?>
" alt="<?php echo $this->_tpl_vars['module']['name']; ?>
"> <a href="<?php echo $this->_tpl_vars['result']['link']; ?>
"><?php echo $this->_tpl_vars['result']['title']; ?>
</a></div>
                                <span class="d-inline d-sm-none"><br /></span>
                                <div class="d-inline text-muted"><small><span class="fa fa-calendar fa-sm ml-2"></span> <?php echo $this->_tpl_vars['result']['time']; ?>
</small></div>
                                <br />
                            <?php else: ?>
                                <img src="<?php echo $this->_tpl_vars['result']['image']; ?>
" alt="<?php echo $this->_tpl_vars['module']['name']; ?>
"> <a href="<?php echo $this->_tpl_vars['result']['link']; ?>
"><?php echo $this->_tpl_vars['result']['title']; ?>
</a> <small><span class="fa fa-calendar fa-sm ml-2"></span> <?php echo $this->_tpl_vars['result']['time']; ?>
</small><br />
                            <?php endif; ?>
                        </li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                </div>
            </div>
       <?php endforeach; endif; unset($_from); ?>
    </ul>
<?php endif; ?>