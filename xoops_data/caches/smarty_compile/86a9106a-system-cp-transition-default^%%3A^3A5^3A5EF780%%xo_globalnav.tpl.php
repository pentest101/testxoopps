<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:44
         compiled from C:/xampp/htdocs/modules/system/themes/transition/xotpl/xo_globalnav.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'C:/xampp/htdocs/modules/system/themes/transition/xotpl/xo_globalnav.tpl', 10, false),array('modifier', 'strip_tags', 'C:/xampp/htdocs/modules/system/themes/transition/xotpl/xo_globalnav.tpl', 11, false),)), $this); ?>
<div id="xo_globalnav">
    <!-- start menu -->
    <ul class="menu" id="menu">
        <?php $_from = $this->_tpl_vars['navitems']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
            <li>
                <a href="<?php echo $this->_tpl_vars['item']['link']; ?>
" class="menulink"><?php echo $this->_tpl_vars['item']['text']; ?>
</a>
                <ul>
                    <?php $_from = $this->_tpl_vars['item']['menu']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sub']):
?>
                        <li>
                            <?php if (((is_array($_tmp=@$this->_tpl_vars['sub']['options'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)) != 0): ?>
                                <a class="sub" href="<?php echo $this->_tpl_vars['sub']['link']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['sub']['title'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)); ?>
"><?php echo $this->_tpl_vars['sub']['title']; ?>
</a>
                                <ul>
                                    <?php $_from = $this->_tpl_vars['sub']['options']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
                                        <li><a href="<?php echo $this->_tpl_vars['sub']['url']; ?>
<?php echo $this->_tpl_vars['option']['link']; ?>
"><?php echo $this->_tpl_vars['option']['title']; ?>
</a></li>
                                    <?php endforeach; endif; unset($_from); ?>
                                </ul>
                            <?php else: ?>
                                <a href="<?php echo $this->_tpl_vars['sub']['link']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['sub']['title'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)); ?>
"><?php echo $this->_tpl_vars['sub']['title']; ?>
</a>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; endif; unset($_from); ?>
                </ul>
            </li>
        <?php endforeach; endif; unset($_from); ?>
    </ul>
    <!-- start style choose -->
    <div id="choosestyle">
        <a href="<?php echo $this->_tpl_vars['theme_css']; ?>
/index.php?style=dark" rel="dark" class="styleswitch"><?php echo @_OXYGEN_DARK; ?>
</a>
        <a href="<?php echo $this->_tpl_vars['theme_css']; ?>
/index.php?style=silver" rel="silver" class="styleswitch"><?php echo @_OXYGEN_SILVER; ?>
</a>
        <a href="<?php echo $this->_tpl_vars['theme_css']; ?>
/index.php?style=orange" rel="orange" class="styleswitch"><?php echo @_OXYGEN_ORANGE; ?>
</a>
    </div>
</div>

<script type="text/javascript">
    var menu = new menu.dd("menu");
    menu.init("menu", "menuhover");
</script>