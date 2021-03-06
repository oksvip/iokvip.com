@extends('index.layouts.app')

@section('content')
	<div id="workwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<h4>NEW WEBSITE FOR</h4>
					<h1>INSTANT</h1>
					<h4>ROLE: LEAD DESIGNER</h4>
				</div>
			</div><! --/row -->
		</div> <!-- /container -->
	</div><!--/workwrap -->

	<section id="works"></section>
	<div class="container">
		<div class="row centered mt mb">
			<div class="col-lg-8 col-lg-offset-2">
				<h4>ABOUT THE PROJECT</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
			</div>
			<div class="col-lg-10 col-lg-offset-1 mt">
				<img class="img-responsive" src="{{ asset('static/index/img/pr01.jpg') }}">
				<br>
				<img class="img-responsive" src="{{ asset('static/index/img/pr02.jpg') }}">
			</div>

		</div><!--/row -->
	</div><!--/container -->
@endsection