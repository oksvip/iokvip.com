	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ route('home') }}">{{ env('APP_NAME', 'SUNRISE') }}</a>
			</div>
			<!-- Menu -->
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					@if(isset($indexMenus) && count($indexMenus) > 0)
						@foreach($indexMenus as $key=>$menu)
							<li @if($key === \Request::url()) class="active" @endif><a href="{{ $key }}">{{ $menu }}</a></li>
						@endforeach
					@endif
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>