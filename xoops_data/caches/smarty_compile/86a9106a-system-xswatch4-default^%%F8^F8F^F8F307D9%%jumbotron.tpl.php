<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:38
         compiled from xswatch4/tpl/jumbotron.tpl */ ?>
<div class="jumbotron<?php if ($this->_tpl_vars['xoops_banner'] != "&nbsp;"): ?> xo-jumbotron<?php endif; ?>">
    <div class="row">
        <div class="col"><h2 class="display-4"><?php echo @THEME_ABOUTUS; ?>
</h2></div>
    </div>
    <p class="lead"><?php echo $this->_tpl_vars['xoops_meta_description']; ?>
</p>
    <hr>
    <a class="btn btn-primary" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/"><?php echo @THEME_LEARNMORE; ?>
</a>
    <?php if ($this->_tpl_vars['xoops_banner'] != "&nbsp;"): ?>
    <div class="row d-none d-md-block mb-0">
        <hr>
        <div class="col"><div class="text-center xoops-banner"><?php echo $this->_tpl_vars['xoops_banner']; ?>
</div></div>
    </div>
    <?php endif; ?>
</div>