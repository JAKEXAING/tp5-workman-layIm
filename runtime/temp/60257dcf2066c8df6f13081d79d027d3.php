<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpIm\laychat-master\public/../application/index\view\login\index.html";i:1516100006;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layerIM 体验</title>
    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <h3>欢迎使用 体验layerIM</h3>
            <form class="m-t" role="form" action="<?php echo url('login/dologin'); ?>">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="用户名" required="" name="username" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" required="" name="pwd" />
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
            </form>
        </div>
    </div>
    <script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
</body>
</html>