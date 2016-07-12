@extends('layouts.app')

@section('css')
<style type="text/css">
	#actual {
		background: url('images/food.jpg');
		background-size: cover;
		background-repeat: no-repeat;
	}

	#problem {
		margin-left: 15px;
	}

</style>
@stop

@section('content')
<div id="actual" class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12"><br><br><br><br><br><br><br>
			<section>
				<h1 style="color: #FFF; margin-left: 50px;"><b>Checkeasy - The Bill is On Us</b></h1>
				<div class="text-center"><br><br><br><br>
					<a class="btn btn-lg btn-primary" style="background-color: #3f528a; padding: 15px 25px 15px 25px; font-size: 22px;" href="{{route('signup')}}">Sign Up</a><br><br><br><br><br><br>
				</div><br><br><br><br><br><br><br><br><br>
			</section>
			</div>
		</div>
	</div>
</div>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12"><br><br><br><br>
			<section id="intro">
				<div class="row">
					<div class="col-md-6">
						<i class="fa fa-camera-retro fa-5x"></i>
					</div>
					<div class="col-md-offset-6">
						<div id="problem">
							<h3>Tired of waiting for the bill?</h3>
							<p>
								The checkout process at resturants takes too long and involes too many steps.
							</p>
						</div>
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
							<a href="{{route('customers')}}" class="btn btn-primary" style="background-color: #3f528a;" href="#">For the customer</a>
						</div>
						<div class="col-md-offset-6">
							<a href="{{route('restaurants')}}" class="btn btn-primary" style="background-color: #3f528a;" href="#">For the restaurant</a>
						</div>
					</div>
				</div><br><br>
			</section>
			</div>
		</div>
	</div>
</div>
@stop