{include file="common/header.tpl"}
    <body>
        {include file="common/navbar.tpl"}
        <div class="container">
            <div class="col-xs-8">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Check me out
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
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
                                {foreach from=$billList item=bill}
                                    <tr>
                                        <td>{$bill['date']}</td>
                                        <td>{$bill['detail']}</td>
                                        <td>{$bill['in']}</td>
                                        <td>{$bill['out']}</td>
                                        <td>{$bill['accountId']}</td>
                                    </tr>
                                {/foreach}
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
                                {foreach from=$billList item=bill}
                                    <tr>
                                        <td>{$bill['date']}</td>
                                        <td>{$bill['detail']}</td>
                                        <td>{$bill['in']}</td>
                                        <td>{$bill['out']}</td>
                                        <td>{$bill['accountId']}</td>
                                    </tr>
                                {/foreach}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-4"></div>

        </div>
        <script language="javascript">

        </script>
    </body>
</html>
