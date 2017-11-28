	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ route('home') }}">SUNRISE</a>
			</div>
			<!-- Menu -->
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('works.index') }}">Works</a></li>
					<li><a href="{{ route('about') }}">About</a></li>
					<li><a href="{{ route('contact') }}">Contact</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>