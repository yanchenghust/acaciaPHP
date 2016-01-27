<?php
/* Smarty version 3.1.30-dev/9, created on 2016-01-11 15:18:06
  from "E:\wamp\www\acacia\template\bill\addbill.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/9',
  'unifunc' => 'content_5693b99e24e9d1_48020472',
  'file_dependency' => 
  array (
    '5901428bb2d2dedeff9d9d5fc90183fd5efb7fdd' => 
    array (
      0 => 'E:\\wamp\\www\\acacia\\template\\bill\\addbill.tpl',
      1 => 1452521617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/navbar.tpl' => 1,
  ),
),false)) {
function content_5693b99e24e9d1_48020472 ($_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body>
    <?php $_smarty_tpl->_subTemplateRender("file:common/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="container">
            <div class="col-xs-8">
                <form action="/bill/submit">
                    <div class="form-group">
                        <label for="date"></label>
                        <input type="datetime" class="form-control" id="date" name="date" placeholder="请填写日期">
                        <input type="hidden" id="id">
                    </div>
                    <div class="form-group">
                        <label for="detail">详情</label>
                        <input type="text" class="form-control" id="detail" placeholder="请填写账单详情">
                    </div>
                    <div class="form-group">
                        <label for="type">种类</label>
                        <select class="form-control" name="type">
                            <option value="in">收入</option>
                            <option value="out">支出</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="money">金额</label>
                        <input type="text" class="form-control" id="money" placeholder="请填写金额">
                    </div>
                    <button type="submit" class="btn btn-default">提交</button>
                </form>
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
