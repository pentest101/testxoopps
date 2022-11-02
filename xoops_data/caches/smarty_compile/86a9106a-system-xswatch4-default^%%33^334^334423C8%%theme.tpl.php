<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:37
         compiled from C:/xampp/htdocs/themes/xswatch4/theme.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'C:/xampp/htdocs/themes/xswatch4/theme.tpl', 46, false),)), $this); ?>
<!doctype html>
<html lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
<?php $this->assign('theme_name', $this->_tpl_vars['xoTheme']->folderName); ?>
    <meta charset="<?php echo $this->_tpl_vars['xoops_charset']; ?>
">
    <meta name="keywords" content="<?php echo $this->_tpl_vars['xoops_meta_keywords']; ?>
">
    <meta name="description" content="<?php echo $this->_tpl_vars['xoops_meta_description']; ?>
">
    <meta name="robots" content="<?php echo $this->_tpl_vars['xoops_meta_robots']; ?>
">
    <meta name="rating" content="<?php echo $this->_tpl_vars['xoops_meta_rating']; ?>
">
    <meta name="author" content="<?php echo $this->_tpl_vars['xoops_meta_author']; ?>
">
    <meta name="copyright" content="<?php echo $this->_tpl_vars['xoops_meta_copyright']; ?>
">
    <meta name="generator" content="XOOPS">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/favicon.ico" rel="shortcut icon">

	    <?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/xswatchCss.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('xswatchCss', ob_get_contents()); ob_end_clean();
 ?>
        <?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/xswatchDarkCss.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('xswatchDarkCss', ob_get_contents()); ob_end_clean();
 ?>
        <?php if ($this->_tpl_vars['xswatchDarkCss'] == ''): ?>
        <link rel="stylesheet" type="text/css" href="<?php 
echo 'http://localhost/themes/xswatch4/'; ?><?php echo $this->_tpl_vars['xswatchCss']; ?>
/xoops.css">
        <link rel="stylesheet" type="text/css" href="<?php 
echo 'http://localhost/themes/xswatch4/'; ?><?php echo $this->_tpl_vars['xswatchCss']; ?>
/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php 
echo 'http://localhost/themes/xswatch4/'; ?><?php echo $this->_tpl_vars['xswatchCss']; ?>
/cookieconsent.css">
                <link rel="stylesheet" type="text/css" href="<?php 
echo 'http://localhost/themes/xswatch4/'; ?>css/my_xoops.css">
    <?php else: ?>
        <link rel="stylesheet" media="(prefers-color-scheme: light)" href="<?php 
echo 'http://localhost/themes/xswatch4/'; ?><?php echo $this->_tpl_vars['xswatchCss']; ?>
/xoops.css">
        <link rel="stylesheet" media="(prefers-color-scheme: light)" href="<?php 
echo 'http://localhost/themes/xswatch4/'; ?><?php echo $this->_tpl_vars['xswatchCss']; ?>
/bootstrap.min.css">
        <link rel="stylesheet" media="(prefers-color-scheme: light)" href="<?php 
echo 'http://localhost/themes/xswatch4/'; ?><?php echo $this->_tpl_vars['xswatchCss']; ?>
/cookieconsent.css">
                <link rel="stylesheet" media="(prefers-color-scheme: light)" href="<?php 
echo 'http://localhost/themes/xswatch4/'; ?>css/my_xoops.css">

        <link rel="stylesheet" media="(prefers-color-scheme: dark)" href="<?php 
echo 'http://localhost/themes/xswatch4/'; ?><?php echo $this->_tpl_vars['xswatchDarkCss']; ?>
/xoops.css">
        <link rel="stylesheet" media="(prefers-color-scheme: dark)" href="<?php 
echo 'http://localhost/themes/xswatch4/'; ?><?php echo $this->_tpl_vars['xswatchDarkCss']; ?>
/bootstrap.min.css">
        <link rel="stylesheet" media="(prefers-color-scheme: dark)" href="<?php 
echo 'http://localhost/themes/xswatch4/'; ?><?php echo $this->_tpl_vars['xswatchDarkCss']; ?>
/cookieconsent.css">
                <link rel="stylesheet" media="(prefers-color-scheme: dark)" href="<?php 
echo 'http://localhost/themes/xswatch4/'; ?>css/my_xoops_dark.css">
    <?php endif; ?>

    <script src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/browse.php?Frameworks/jquery/jquery.js"></script>
    <script src="<?php 
echo 'http://localhost/themes/xswatch4/'; ?>js/bootstrap.bundle.min.js"></script>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/cookieConsent.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php if (((is_array($_tmp=@$this->_tpl_vars['xoops_isadmin'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?>
    <script src="<?php 
echo 'http://localhost/themes/xswatch4/'; ?>js/js.cookie.min.js"></script>
    <?php endif; ?>
    <link rel="alternate" type="application/rss+xml" title="" href="<?php echo 'http://localhost/backend.php'; ?>">

    <title><?php if ($this->_tpl_vars['xoops_dirname'] == 'system'): ?><?php echo $this->_tpl_vars['xoops_sitename']; ?>
<?php if ($this->_tpl_vars['xoops_pagetitle'] != ''): ?> - <?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
<?php endif; ?><?php else: ?><?php if ($this->_tpl_vars['xoops_pagetitle'] != ''): ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
 - <?php echo $this->_tpl_vars['xoops_sitename']; ?>
<?php endif; ?><?php endif; ?></title>

<?php echo $this->_tpl_vars['xoops_module_header']; ?>

    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['xoops_themecss']; ?>
">
</head>

<body id="<?php echo $this->_tpl_vars['xoops_dirname']; ?>
">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/nav-menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<div class="container maincontainer">

<?php if ($this->_tpl_vars['xoops_page'] == 'index'): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/jumbotron.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<div class="row">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/leftBlock.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/content-zone.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/rightBlock.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

</div><!-- .maincontainer -->

<?php if ($this->_tpl_vars['xoBlocks']['page_bottomcenter'] || $this->_tpl_vars['xoBlocks']['page_bottomright'] || $this->_tpl_vars['xoBlocks']['page_bottomleft']): ?>
    <div class="bottom-blocks">
        <div class="container">
            <?php if ($this->_tpl_vars['xoBlocks']['page_bottomcenter']): ?>
            <div class="row">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/centerBottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['xoBlocks']['page_bottomright'] || $this->_tpl_vars['xoBlocks']['page_bottomleft']): ?>
            <div class="row">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/leftBottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/rightBottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
            <?php endif; ?>
        </div>
    </div><!-- .bottom-blocks -->
<?php endif; ?>

<?php if ($this->_tpl_vars['xoBlocks']['footer_center'] || $this->_tpl_vars['xoBlocks']['footer_right'] || $this->_tpl_vars['xoBlocks']['footer_left']): ?>
    <div class="footer-blocks">
        <div class="container">
            <div class="row">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/leftFooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/centerFooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/rightFooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
        </div>
    </div><!-- .footer-blocks -->
<?php endif; ?>

<footer class="footer">
    <h3>
        <?php echo $this->_tpl_vars['xoops_footer']; ?>

        <a href="https://xoops.org" title="Design by: XOOPS UI/UX Team" target="_blank" class="credits d-none d-sm-block">
            <img src="<?php 
echo 'http://localhost/themes/xswatch4/'; ?>images/favicon.png" alt="Design by: XOOPS UI/UX Team">
        </a>
    </h3>
    <a href="https://xoops.org" title="Design by: XOOPS UI/UX Team" target="_blank" class="credits text-center d-block d-sm-none">
        <img src="<?php 
echo 'http://localhost/themes/xswatch4/'; ?>images/favicon.png" alt="Design by: XOOPS UI/UX Team">
    </a>
</footer>
<?php if (((is_array($_tmp=@$this->_tpl_vars['xoops_isadmin'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/nav-admin.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
<!-- Inbox alert -->
<?php if (((is_array($_tmp=@$this->_tpl_vars['xoops_isuser'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/inboxAlert.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
</body>
</html>