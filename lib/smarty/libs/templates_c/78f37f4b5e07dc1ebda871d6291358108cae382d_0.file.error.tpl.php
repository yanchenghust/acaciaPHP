<?php
/* Smarty version 3.1.30-dev/9, created on 2016-01-12 16:47:15
  from "/data/wwwroot/default/acacia/template/error.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/9',
  'unifunc' => 'content_5694bd932ac919_71608717',
  'file_dependency' => 
  array (
    '78f37f4b5e07dc1ebda871d6291358108cae382d' => 
    array (
      0 => '/data/wwwroot/default/acacia/template/error.tpl',
      1 => 1452588430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/navbar.tpl' => 1,
  ),
),false)) {
function content_5694bd932ac919_71608717 ($_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body>
    <?php $_smarty_tpl->_subTemplateRender("file:common/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="container">
            <div class="col-xs-8">
			<div class="alert alert-success" role="alert">
				<?php echo $_smarty_tpl->tpl_vars['info']->value;?>
	
			</div>
            </div>
            <div class="col-xs-4"></div>

        </div>
        <?php echo '<script'; ?>
 language="javascript">

        <?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
