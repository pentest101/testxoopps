<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:33
         compiled from db:profile_results.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:profile_results.tpl', 11, false),array('modifier', 'default', 'db:profile_results.tpl', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_breadcrumbs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div>( <?php echo $this->_tpl_vars['total_users']; ?>
 )</div>
<?php if ($this->_tpl_vars['users']): ?>
    <table>
        <tr>
            <?php $_from = $this->_tpl_vars['captions']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['caption']):
?>
                <th><?php echo $this->_tpl_vars['caption']; ?>
</th>
            <?php endforeach; endif; unset($_from); ?>
        </tr>
        <?php $_from = $this->_tpl_vars['users']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
            <tr class="<?php echo smarty_function_cycle(array('values' => 'odd, even'), $this);?>
">
                <?php $_from = $this->_tpl_vars['user']['output']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldvalue']):
?>
                    <td><?php echo $this->_tpl_vars['fieldvalue']; ?>
</td>
                <?php endforeach; endif; unset($_from); ?>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
    <?php echo ((is_array($_tmp=@$this->_tpl_vars['nav'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>

<?php else: ?>
    <div class="errorMsg">
        <?php echo @_PROFILE_MA_NOUSERSFOUND; ?>

    </div>
<?php endif; ?>