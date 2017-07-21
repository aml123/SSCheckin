<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>{$Think.config.WEB_TITLE}</title>
    <link rel="stylesheet" href="/Public/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="/Public/favicon.icon" />
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>欢迎访问{$Think.config.WEB_TITLE}！</h1>
        <p>这是一个SS网站自动签到的网站，你需要登录才能查看更多内容！</p>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-push-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">登录</a></li>
                        <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">注册</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="login">
                            <form class="form-horizontal" action="<?php echo U('Home/Login/login'); ?>" method="post">
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">帐号</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">密码</label>
                                    <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" class="btn btn-default">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane text-center" id="register">
                            <p>暂未开放</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>    
    </div>
</div>

<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    // $('#login').click(function (e) {
    //     e.preventDefault()
    //     $(this).tab('show')
    // })

    // $('#registe').click(function (e) {
    //     e.preventDefault()
    //     $(this).tab('show')
    // })
</script>
</body>
</html>