@extends('layouts.app')

@section('content')
<div class="homeBanner">
	<div class="container">
		<div class="row">
			<div class="col-md-4 headerColor">
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
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-dirt">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>Congratulations... you remembered your login!</p>
                    <p>Use this time to think about all the great things you have done!</p>
                </div>
            </div>
						<img style="margin:0 auto" src="../images/logos/dirtLifeLogoLarge.png" alt="Logo" class="img img-responsive">
        </div>
    </div>
</div>
@endsection
