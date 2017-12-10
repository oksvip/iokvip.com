<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0" />
<title>404 - 页面未找到</title>

<link type="text/css" rel="stylesheet" href="{{ asset('static/404/css/404.css') }}" />

<!--[if IE 6]>
<script src="{{ asset('static/404/js/png.js') }}"></script>
<script>DD_belatedPNG.fix('*')</script>
<![endif]-->

</head>
<body>

<div id="wrap">
	<div>
		<img src="{{ asset('static/404/img/404.png') }}" alt="404" />
	</div>
	<div id="text">
		<strong>
			<span></span>
			<a href="{{ route('home') }}" target="_self">返回首页</a>
			<a href="{{ url()->previous() }}">返回上一页</a>
		</strong>
	</div>
</div>

<div class="animate below"></div>
<div class="animate above"></div>
<div style="text-align:center;">
</div>
</body>
</html>
