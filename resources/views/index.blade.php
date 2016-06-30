@extends('layouts.app')

@section('css')
<style type="text/css">
	#back {
		background: url('images/background.jpg');
		background-size: cover;
		background-repeat: no-repeat;
}
</style>
@stop

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 class="page-header">Checkeasy - The Bill is On Us</h1>
				<div id="back" class="text-center"><br><br><br><br><br><br>
					<a class="btn btn-lg btn-primary" style="background-color: #3f528a;" href="{{route('signup')}}">Sign Up</a><br><br><br><br><br><br>
				</div><br>
				<div class="row">
					<div class="col-md-6">
						<i class="fa fa-camera-retro fa-5x"></i>
					</div>
					<div class="col-md-offset-6">
						<h3>Tired of waiting for the bill?</h3>
						<p>
							The checkout process at resturants takes too long and involes too many steps.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<h3>We can fix that.</h3>
						<p>
							We have found a way to eliminate the checkout process by creating a text message based billing service that allows you to leave the restaurant on your time.
						</p>
					</div>
					<div>
						<i class="fa fa-mobile fa-6"></i>
					</div>
				</div>
				<div class="text-center">
					<div>
						<h3> Here's how.</h3>
					</div>
					<div class="row">
						<div class="col-md-6">
							<button class="btn btn-primary" style="background-color: #3f528a;" href="#">For the customer</button>
						</div>
						<div class="col-md-offset-6">
							<button class="btn btn-primary" style="background-color: #3f528a;" href="#">For the restaurant</button>
						</div>
					</div>
				</div><br><br>
			</div>
		</div>
	</div>
</div>
@stop