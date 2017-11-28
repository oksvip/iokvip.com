<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Admin</title>

    <!-- Vendors -->

    <!-- Animate CSS -->
    <link href="{{ asset('static/admin/vendors/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link href="{{ asset('static/admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

    <!-- Site CSS -->
    <link href="{{ asset('static/admin/css/app-1.min.css') }}" rel="stylesheet">

    <!-- SweetAlert -->
    <link href="{{ asset('static/admin/vendors/bower_components/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

</head>

<body>
<div class="login">

    <!-- Login -->
    <div class="login__block toggled" id="l-login">
        <div class="login__block__header">
            <i class="zmdi zmdi-account-circle"></i>
            <h1>后台登录</h1>

            <div class="actions login__block__actions">
                <div class="dropdown">
                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                    <ul class="dropdown-menu pull-right">
                        <li><a data-block="#l-register" href="">注册</a></li>
                        <li><a data-block="#l-forget-password" href="">忘记密码?</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('admin.login') }}">
            {{ csrf_field() }}
            <div class="login__block__body">
                <div class="form-group form-group--float form-group--centered form-group--centered">
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}" />
                    <label><span class="h4">邮箱</span></label>
                    <i class="form-group__bar"></i>
                </div>

                <div class="form-group form-group--float form-group--centered form-group--centered">
                    <input type="password" class="form-control" name="password" value="" />
                    <label><span class="h4">密码</span></label>
                    <i class="form-group__bar"></i>
                </div>

                <div class="input-centered">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} value="1">
                            <i class="input-helper"></i>
                            <h4>记住登录</h4>
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn--light btn--icon m-t-15"><i class="zmdi zmdi-long-arrow-right"></i></button>
            </div>

            @include('admin.common._errors')

            @include('admin.layouts._messages')
        </form>
    </div>

    <!-- Register -->
    <div class="login__block" id="l-register">
        <div class="login__block__header palette-Blue bg">
            <i class="zmdi zmdi-account-circle"></i>
            <h1>后台注册</h1>

            <div class="actions login__block__actions">
                <div class="dropdown">
                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                    <ul class="dropdown-menu pull-right">
                        <li><a data-block="#l-login" href="">已经有账户?</a></li>
                        <li><a data-block="#l-forget-password" href="">忘记密码?</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('admin.register') }}">
            {{ csrf_field() }}
            <div class="login__block__body">
                <div class="form-group form-group--float form-group--centered">
                    <input type="text" class="form-control">
                    <label><span class="h4">名称</span></label>
                    <i class="form-group__bar"></i>
                </div>

                <div class="form-group form-group--float form-group--centered">
                    <input type="text" class="form-control">
                    <label><span class="h4">邮箱</span></label>
                    <i class="form-group__bar"></i>
                </div>

                <div class="form-group form-group--float form-group--centered">
                    <input type="password" class="form-control">
                    <label><span class="h4">密码</span></label>
                    <i class="form-group__bar"></i>
                </div>

                <div class="input-centered">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            <i class="input-helper"></i>
                            <h4>接受注册条款</h4>
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn--light btn--icon m-t-15"><i class="zmdi zmdi-plus"></i></button>
            </div>
        </form>
    </div>

    <!-- Forgot Password -->
    <div class="login__block" id="l-forget-password">
        <div class="login__block__header palette-Purple bg">
            <i class="zmdi zmdi-account-circle"></i>
            <h1>忘记密码?</h1>

            <div class="actions login__block__actions">
                <div class="dropdown">
                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                    <ul class="dropdown-menu pull-right">
                        <li><a data-block="#l-login" href="">已经有帐号?</a></li>
                        <li><a data-block="#l-register" href="">注册</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <form method="POST" action="">
            {{ csrf_field() }}
            <div class="login__block__body">
                <p class="m-t-30"><span class="h4">请输入您注册时使用的邮箱</span></p>

                <div class="form-group form-group--float form-group--centered">
                    <input type="text" class="form-control h1">
                    <label><span class="h4">邮箱</span></label>
                    <i class="form-group__bar"></i>
                </div>

                <button type="submit" class="btn btn--light btn--icon m-t-15"><i class="zmdi zmdi-check"></i></button>
            </div>
        </form>
    </div>
</div>

<!-- Older IE Warning -->
<!--[if lt IE 9]>
@include('admin.layouts._checkIe')
<![endif]-->


<!-- Javascript Libraries -->

<!-- jQuery -->
<script src="{{ asset('static/admin/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('static/admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- SweetAlert -->
<script src="{{ asset('static/admin/vendors/bower_components/sweetalert2/dist/sweetalert2.min.js') }}"></script>

<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="{{ asset('static/admin/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js') }}"></script>
<![endif]-->

<!-- Site Functions & Actions -->
<script src="{{ asset('static/admin/js/app.min.js') }}"></script>
</body>
</html>