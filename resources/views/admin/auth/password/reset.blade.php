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
</head>

<body>
<div class="login">

    <!-- Reset -->
    <div class="login__block toggled" id="l-login">
        <div class="login__block__header">
            <i class="zmdi zmdi-account-circle"></i>
            <h1>密码重置</h1>
        </div>

        <form method="POST" action="{{ route('admin.password.reset') }}">
            {{ csrf_field() }}
            <label>邮箱必填</label>
            <div class="login__block__body">
                <div class="form-group form-group--float form-group--centered form-group--centered">
                    <input type="button" class="form-control" value="oksvip@sina.com" readonly>
                    <label><span class="h4">邮箱</span></label>
                    <i class="form-group__bar"></i>
                </div>

                <label>邮箱必填</label>
                <div class="form-group form-group--float form-group--centered form-group--centered">
                    <input type="password" class="form-control">
                    <label><span class="h4">密码</span></label>
                    <i class="form-group__bar"></i>
                </div>

                <label>邮箱必填</label>
                <div class="form-group form-group--float form-group--centered form-group--centered">
                    <input type="password_confirmation" class="form-control">
                    <label><span class="h4">确认密码</span></label>
                    <i class="form-group__bar"></i>
                </div>

                <button type="submit" class="btn btn--light btn--icon m-t-15"><i class="zmdi zmdi-long-arrow-right"></i></button>
            </div>
        </form>
    </div>
</div>

<!-- Older IE Warning -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>警告!!</h1>
    <p>此系统已不再支持您当前使用的浏览器，请升级 <br/>下面任意一款浏览器后再访问此页面</p>
    <div class="ie-warning__container">
        <ul class="ie-warning__download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="{{ asset('static/admin/img/browsers/chrome.png') }}" alt="">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="{{ asset('static/admin/img/browsers/firefox.png') }}" alt="">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="{{ asset('static/admin/img/browsers/opera.png') }}" alt="">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="{{ asset('static/admin/img/browsers/safari.png') }}" alt="">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="{{ asset('static/admin/img/browsers/ie.png') }}" alt="">
                    <div>IE (New)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>给您带来不便敬请谅解!</p>
</div>
<![endif]-->


<!-- Javascript Libraries -->

<!-- jQuery -->
<script src="{{ asset('static/admin/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('static/admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="{{ asset('static/admin/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js') }}"></script>
<![endif]-->

<!-- Site Functions & Actions -->
<script src="{{ asset('static/admin/js/app.min.js') }}"></script>
</body>
</html>