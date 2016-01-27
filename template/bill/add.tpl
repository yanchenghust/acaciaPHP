{include file="common/header.tpl"}
    <body>
    {include file="common/navbar.tpl"}
        <div class="container">
            <div class="col-xs-8">
                <form action="/bill/submit" method="post">
                    <div class="form-group">
                        <label for="date"></label>
                        <input type="text" class="form-control" id="date" name="date" placeholder="请填写日期">
                        <input type="hidden" id="id" name="id">
                    </div>
                    <div class="form-group">
                        <label for="detail">详情</label>
                        <input type="text" class="form-control" name="detail" id="detail" placeholder="请填写账单详情">
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
                        <input type="text" class="form-control" name="money" id="money" placeholder="请填写金额">
                    </div>
                    <button type="submit" class="btn btn-default">提交</button>
                </form>
            </div>
            <div class="col-xs-4"></div>

        </div>
        <script language="javascript">

        </script>
    </body>
</html>
