<?php
/* Smarty version 3.1.30-dev/9, created on 2016-01-02 16:03:41
  from "E:\wamp\www\acacia\template\common\navbar.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/9',
  'unifunc' => 'content_5687e6cd80f2a3_21207228',
  'file_dependency' => 
  array (
    '0886e175d6fb2c4ec62b13aa60d43b40705fffbf' => 
    array (
      0 => 'E:\\wamp\\www\\acacia\\template\\common\\navbar.tpl',
      1 => 1451729853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5687e6cd80f2a3_21207228 ($_smarty_tpl) {
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span> Acacia-Our Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 首页 <span class="sr-only">(current)</span></a></li>
                <li><a href="/bill"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span> 账本</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span> 随手记<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">博客</a></li>
                        <li><a href="#">日记</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-picture" aria-hidden="true"></span> 相册<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">北京</a></li>
                        <li><a href="#">地大</a></li>
                        <li><a href="#">长城</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="你要搜索什么...">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav><?php }
}
