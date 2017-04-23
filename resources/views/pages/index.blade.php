@extends('layouts.app')
@section('title')
WV DIRT
@stop
@section('description')
Southern WV Enduro Trails and Info
@stop
@section('content')
<div class="homeBanner">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h1>LIFE AND THE PURSUIT OF HAPPINESS IN SOUTHERN WEST VIRGINIA</h1>
				<div class="smallBanner">
					<h3><em>or whatever</em></h3>
				</div>

			</div>
			<div class="col-md-4">
				<div class="homeBannerMid">
					<i class="fa fa-arrow-circle-left fa-5x"></i>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>
<div class="homeInfo">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1><strong>FUN ON <span class="mainColor">2 WHEELS</span></strong></h1>
				<hr>
				<p>Life's doesn't always go as you expect, so get your bike out and leave all that crap behind.
					We are going to film our middle-aged adventures and broadcast them for the enjoyment of whoever gets bored
					and clicks on this stuff.</p>
          <p>But that's not all! Register here and you can link your vids for all your loyal fans.
					<span class="mainColor">Dirt / Trail / Rock Garden only!!!</span> No street stuff... unless you are just going to the trails.</p>
		</div>
		<div class="col-md-6">
			<h3 class="text-center"><strong>{{$d->title}} | {{ $d->user->name }}</strong></h3>
			<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$d->url}}"></iframe>
							</div>
		</div>
	</div>
</div>
</div>
<div class="infoBlocks">
	<div class="row">
		<div class="col-md-4 col-xs-12">
			<div class="hovereffect">
				<img class="img img-responsive" src="../images/slider/test1.jpg" alt="">
				<div class="overlay">
					<h3>TRAIL INFO</h3>
					<p>Local Trails and Tracks</p>
					<p><a class="btn btn-main" href="">INFO</a></p>
				</div>
			</div>

		</div>
		<div class="col-md-4 col-xs-12">
			<div class="hovereffect">
				<img class="img img-responsive" src="../images/slider/test1.jpg" alt="">
				<div class="overlay">
					<h3>LOCAL SHOPS</h3>
					<p>Parts, Bikes, Wrenches</p>
					<p><a class="btn btn-main" href="">Fix it</a></p>
				</div>
			</div>

		</div>
		<div class="col-md-4 col-xs-12">
			<div class="hovereffect">
				<img class="img img-responsive" src="../images/slider/test1.jpg" alt="">
				<div class="overlay">
					<h3>Info</h3>
					<p>stuff</p>
					<p><a class="btn btn-main" href=""></a></p>
				</div>
			</div>

		</div>
	</div>
</div>

@stop
