<?php
/* Smarty version 3.1.30-dev/9, created on 2015-12-26 16:53:08
  from "E:\wamp\www\acs\index.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/9',
  'unifunc' => 'content_567eb7e411d520_94361199',
  'file_dependency' => 
  array (
    '8cb0f80985fb129c307f1590e615dc239edfb3d4' => 
    array (
      0 => 'E:\\wamp\\www\\acs\\index.tpl',
      1 => 1451145185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_567eb7e411d520_94361199 ($_smarty_tpl) {
$_from = $_smarty_tpl->tpl_vars['noteList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_note_0_saved_item = isset($_smarty_tpl->tpl_vars['note']) ? $_smarty_tpl->tpl_vars['note'] : false;
$_smarty_tpl->tpl_vars['note'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['note']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->_loop = true;
$__foreach_note_0_saved_local_item = $_smarty_tpl->tpl_vars['note'];
?>
    id: <?php echo $_smarty_tpl->tpl_vars['note']->value['id'];?>
<br>
    title: <?php echo $_smarty_tpl->tpl_vars['note']->value['title'];?>
<br>
<?php
$_smarty_tpl->tpl_vars['note'] = $__foreach_note_0_saved_local_item;
}
if ($__foreach_note_0_saved_item) {
$_smarty_tpl->tpl_vars['note'] = $__foreach_note_0_saved_item;
}
}
}
