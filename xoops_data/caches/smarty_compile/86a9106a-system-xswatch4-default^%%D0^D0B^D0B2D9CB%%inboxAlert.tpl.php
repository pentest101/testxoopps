<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:38
         compiled from xswatch4/tpl/inboxAlert.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strstr', 'xswatch4/tpl/inboxAlert.tpl', 1, false),array('function', 'xoInboxCount', 'xswatch4/tpl/inboxAlert.tpl', 2, false),)), $this); ?>
<?php if (! ((is_array($_tmp=$this->_tpl_vars['xoops_page'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'viewpmsg') : strstr($_tmp, 'viewpmsg')) && ! ((is_array($_tmp=$this->_tpl_vars['xoops_page'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'readpmsg') : strstr($_tmp, 'readpmsg'))): ?>
    <?php echo smarty_function_xoInboxCount(array('assign' => 'newPms'), $this);?>

    <?php if ($this->_tpl_vars['newPms'] > 0): ?>
            <div data-autohide="true" data-delay="4000" role="alert" aria-live="assertive" aria-atomic="true" class="toast" style="position: absolute; top: 0; left: 0;" >
        <div class="toast-header">
            <span class="fa fa-fw fa-envelope"></span>
            <strong class="mr-auto">&nbsp;<?php echo @THEME_INBOX_ALERT; ?>
 <span class="badge badge-primary badge-pill"><?php echo $this->_tpl_vars['newPms']; ?>
</span></strong>
            <small> </small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/viewpmsg.php"><?php echo @THEME_INBOX_LINK; ?>
</a>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.toast').toast('show');
        });
    </script>
    <?php endif; ?>
<?php endif; ?>