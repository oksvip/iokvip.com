@extends('index.layouts.app')

@section('content')
	<div id="workswrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<h4>THE WEBPAGE NOW IS IN</h4>
					<h1>WORKS</h1>
					<h4>WEB DESIGNER, DEVELOPER & GAME ADDICT</h4>
				</div>
			</div><!--/row -->
		</div> <!-- /container -->
	</div><!--/headerwrap -->

	<section id="works"></section>
	<div class="container">
		<div class="row centered mt mb">
			<h1>My Works</h1>

			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="{{ route('works.show') }}"><img src="{{ asset('static/index/img/portfolio/folio01.png') }}" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="{{ route('works.show') }}"><img src="{{ asset('static/index/img/portfolio/folio02.png') }}" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="{{ route('works.show') }}"><img src="{{ asset('static/index/img/portfolio/folio03.png') }}" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="{{ route('works.show') }}"><img src="{{ asset('static/index/img/portfolio/folio04.png') }}" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="{{ route('works.show') }}"><img src="{{ asset('static/index/img/portfolio/folio05.png') }}" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="{{ route('works.show') }}"><img src="{{ asset('static/index/img/portfolio/folio06.png') }}" class="img-responsive"></a>
			</div>
		</div><!--/row -->
	</div><!--/container -->
@endsection