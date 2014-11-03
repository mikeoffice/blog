
<!DOCTYPE html>
<html class="bootstrap-admin-vertical-centered">
    <head>
        <title>后台登陆</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="<?=load_res('compile/css/bootstrap.min.css');?>">
        <link rel="stylesheet" media="screen" href="<?=load_res('compile/css/bootstrap-theme.min.css');?>">

        <!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="<?=load_res('compile/css/bootstrap-admin-theme.min.css');?>">

        <!-- Custom styles -->
        <style type="text/css">
            .alert{
                margin: 0 auto 20px;
            }
        </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="js/html5shiv.js"></script>
           <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bootstrap-admin-without-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
<!--                     <div class="alert alert-info"> -->
<!--                         <a class="close" data-dismiss="alert" href="#">&times;</a> -->
<!--                         Press enter key or click the Submit button -->
<!--                     </div> -->
                    <form method="post" action="/admin/index/login" class="bootstrap-admin-login-form">
                        <h1>登陆</h1>
                        <div class="form-group">
                            <input class="form-control" type="text" name="email" placeholder="登陆账号">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="登录密码">
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="remember_me">
                                自动登陆
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary" type="submit">登陆</button>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="<?=load_res('compile/js/jquery-1.11.1.min.js');?>"></script>
        <script type="text/javascript" src="<?=load_res('compile/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?=load_res('compile/js/jquery.form-3.51.10.min.js');?>"></script>
        <script type="text/javascript" src="<?=load_res('compile/js/bootstrap_submit.min.js');?>"></script>
        <script type="text/javascript">
             $(function(){
       	          $('form').bootstart_submit();
             });
        </script>
    </body>
</html>
