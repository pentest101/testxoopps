<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:44
         compiled from C:/xampp/htdocs/modules/system/themes/transition/xotpl/xo_metas.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'C:/xampp/htdocs/modules/system/themes/transition/xotpl/xo_metas.tpl', 14, false),)), $this); ?>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>

<!-- title and metas -->
<title><?php if ($this->_tpl_vars['xoops_pagetitle'] != ''): ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
 : <?php endif; ?><?php echo $this->_tpl_vars['xoops_sitename']; ?>
</title>
<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
"/>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
"/>
<meta name="robots" content="<?php echo $this->_tpl_vars['xoops_meta_robots']; ?>
"/>
<meta name="keywords" content="<?php echo $this->_tpl_vars['xoops_meta_keywords']; ?>
"/>
<meta name="description" content="<?php echo $this->_tpl_vars['xoops_meta_description']; ?>
"/>
<meta name="rating" content="<?php echo $this->_tpl_vars['xoops_meta_rating']; ?>
"/>
<meta name="author" content="<?php echo $this->_tpl_vars['xoops_meta_author']; ?>
"/>
<meta name="copyright" content="<?php echo $this->_tpl_vars['xoops_meta_copyright']; ?>
"/>
<meta name="generator" content="XOOPS"/>
<?php if (((is_array($_tmp=@$this->_tpl_vars['url'])) ? $this->_run_mod_handler('default', true, $_tmp, false) : smarty_modifier_default($_tmp, false))): ?>
    <meta http-equiv="Refresh" content="<?php echo $this->_tpl_vars['time']; ?>
; url=<?php echo $this->_tpl_vars['url']; ?>
"/>
<?php endif; ?>

<!-- Rss -->
<link rel="alternate" type="application/rss+xml" title="" href="<?php echo 'http://localhost/backend.php'; ?>"/>

<!-- path favicon -->
<link rel="shortcut icon" type="image/ico" href="<?php echo 'http://localhost/favicon.ico'; ?>"/>

<!-- Xoops style sheet -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo 'http://localhost/xoops.css'; ?>"/>

<!-- customized header contents -->
<?php echo $this->_tpl_vars['xoops_module_header']; ?>
