<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WebTop Chat</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="container login">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 regdiv" style="">
            <ul class="nav nav-tabs center-block alltab">
                <li class="active log"><a data-toggle="tab" href="#login">Log In</a></li>
                <li class="reg"><a data-toggle="tab" href="#register">Register</a></li>
            </ul>
            <div class="tab-content">
                <div id="login" class="tab-pane fade in active">
                    <h3 style="text-align: center">Log In</h3>
                    <form role="form" method="post" action="">
                        <input name="ajax" value="login" type="hidden">
                        <div class="form-group">
                            <div>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0 col-12">
                                    <div class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></div>
                                    <input type="text" name="email" class="form-control email" id="email" placeholder="Email">
                                </div>
                                <div>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0 col-12">
                                    <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
                                    <input type="password" name="password" class="form-control password" id="" placeholder="Password">
                                </div>
                                <div>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0 col-12">
                            <button type="submit" name="login" class="btn btn-primary center-block btn-block log">Login</button>
                        </div>
                    </form>
                </div>
                <div id="register" class="tab-pane fade">
                    <h3 style="text-align: center">Register for free</h3>
                    <form role="form" name="registration" class="myform" autocomplete="off" method="post" action="">
                        <input name="ajax" value="registration" type="hidden">
                        <div class="form-group">
                            <div>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0 col-12">
                                    <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                                    <input type="text" name="username" class="form-control username"  placeholder="Username">
                                </div>
                                <div>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0 col-12">
                                    <div class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></div>
                                    <input type="text" name="email" class="form-control email"  placeholder="Email">
                                </div>
                                <div>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0 col-12">
                                    <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
                                    <input type="password" name="password" class="form-control password" id="password" placeholder="Password">
                                </div>
                                <div>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0 col-12">
                                    <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
                                    <input type="password" name="password" class="form-control re_password" placeholder="Confirm Password">
                                </div>
                                <div>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0 col-12">
                            <button type="submit" name="register" class="btn btn-primary center-block btn-block log">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/my_jquery.js"></script>
<script src="js/jquery.validate.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/my_js.js"></script>

</body>
</html>