<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:45
         compiled from db:system_block_newusers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:system_block_newusers.tpl', 3, false),)), $this); ?>
<table cellspacing="1" class="outer">
    <?php $_from = $this->_tpl_vars['block']['users']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
        <tr class="<?php echo smarty_function_cycle(array('values' => 'even,odd'), $this);?>
 alignmiddle">
            <td class="txtcenter">
                <?php if ($this->_tpl_vars['user']['avatar'] != ""): ?>
                    <img style="width:32px;" src="<?php echo $this->_tpl_vars['user']['avatar']; ?>
" alt="<?php echo $this->_tpl_vars['user']['name']; ?>
"/>
                    <br>
                <?php endif; ?>
                <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['user']['id']; ?>
" title="<?php echo $this->_tpl_vars['user']['name']; ?>
"><?php echo $this->_tpl_vars['user']['name']; ?>
</a>
            </td>
            <td class="txtcenter"><?php echo $this->_tpl_vars['user']['joindate']; ?>
</td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>
</table>