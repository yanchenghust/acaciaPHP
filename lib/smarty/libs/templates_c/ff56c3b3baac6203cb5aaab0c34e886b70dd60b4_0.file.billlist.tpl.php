<?php
/* Smarty version 3.1.30-dev/9, created on 2016-01-11 15:18:40
  from "E:\wamp\www\acacia\template\bill\billlist.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/9',
  'unifunc' => 'content_5693b9c00ddcd0_25726381',
  'file_dependency' => 
  array (
    'ff56c3b3baac6203cb5aaab0c34e886b70dd60b4' => 
    array (
      0 => 'E:\\wamp\\www\\acacia\\template\\bill\\billlist.tpl',
      1 => 1452521916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/navbar.tpl' => 1,
  ),
),false)) {
function content_5693b9c00ddcd0_25726381 ($_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:common/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="container">
            <div class="col-xs-8">
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>账单</span>
                        <span class="pull-right"><a href="/bill/add"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 添加一条</a></span>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-tabs" id="bill-tabs">
                            <li role="presentation" class="active navbar-right"><a data-toggle="tab" href="#bill-by-time">按时间</a></li>
                            <li role="presentation" class="navbar-right"><a data-toggle="tab" href="#bill-by-account">按账户</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" role="tabpanel" id="bill-by-time">
                            <table class="table">
                                <tr>
                                    <th>日期</th>
                                    <th>详情</th>
                                    <th>收入</th>
                                    <th>支出</th>
                                    <th>账户</th>
                                </tr>
                                <?php
$_from = $_smarty_tpl->tpl_vars['billList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_bill_0_saved_item = isset($_smarty_tpl->tpl_vars['bill']) ? $_smarty_tpl->tpl_vars['bill'] : false;
$_smarty_tpl->tpl_vars['bill'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['bill']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['bill']->value) {
$_smarty_tpl->tpl_vars['bill']->_loop = true;
$__foreach_bill_0_saved_local_item = $_smarty_tpl->tpl_vars['bill'];
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['bill']->value['date'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['bill']->value['detail'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['bill']->value['in'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['bill']->value['out'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['bill']->value['accountId'];?>
</td>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['bill'] = $__foreach_bill_0_saved_local_item;
}
if ($__foreach_bill_0_saved_item) {
$_smarty_tpl->tpl_vars['bill'] = $__foreach_bill_0_saved_item;
}
?>
                            </table>
                        </div>
                        <div class="tab-pane fade in" role="tabpanel" id="bill-by-account">
                            <table class="table">
                                <tr>
                                    <th>日期</th>
                                    <th>详情</th>
                                    <th>收入</th>
                                    <th>支出</th>
                                    <th>账户</th>
                                </tr>
                                <?php
$_from = $_smarty_tpl->tpl_vars['billList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_bill_1_saved_item = isset($_smarty_tpl->tpl_vars['bill']) ? $_smarty_tpl->tpl_vars['bill'] : false;
$_smarty_tpl->tpl_vars['bill'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['bill']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['bill']->value) {
$_smarty_tpl->tpl_vars['bill']->_loop = true;
$__foreach_bill_1_saved_local_item = $_smarty_tpl->tpl_vars['bill'];
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['bill']->value['date'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['bill']->value['detail'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['bill']->value['in'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['bill']->value['out'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['bill']->value['accountId'];?>
</td>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['bill'] = $__foreach_bill_1_saved_local_item;
}
if ($__foreach_bill_1_saved_item) {
$_smarty_tpl->tpl_vars['bill'] = $__foreach_bill_1_saved_item;
}
?>
                            </table>
                        </div>
                    </div>
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
