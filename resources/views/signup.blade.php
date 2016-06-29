@extends('layouts.app')

@section('css')
<style type="text/css">
	body {
		background-image: url('/images/background.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		color: #FFF;
	}
</style>
@stop

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12"><br>
				<div class="text-center"><br>
					<h2 class="text-center">Checkeasy - Sign Up!</h2><br>
					<form class="form-horizontal" role="form" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-offset-2 col-sm-2" for="name">Name:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="name" placeholder="Enter name">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-offset-2 col-sm-2" for="email">Email:</label>
							<div class="col-sm-4">
								<input type="email" class="form-control" id="email" placeholder="Enter email">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-offset-2 col-sm-2" for="pwd">Phone Number:</label>
							<div class="col-sm-4">
								<input type="tel" class="form-control" id="ph" placeholder="+1 followed by 10 digit number">
							</div>
						</div>

						<!-- <div class="form-group">
							<div class="col-sm-offset-2 col-sm-8">
								<div class="checkbox">
									<label><input type="checkbox"> Remember me</label>
								</div>
							</div>
						</div> -->

						<span class="payment-errors"></span>

						<div class="form-group">
							<label class="control-label col-sm-offset-2 col-sm-2" for="name">Card Number:</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="name" size="20" data-stripe="number">
							</div>
						</div>

						<!-- <div class="form-group">
							<label>
								<span>Card Number:</span>
								<input type="text" size="20" data-stripe="number">
							</label>
						</div> -->

						<div class="form-group row">
							<label class="form-control-label col-sm-offset-2 col-sm-2" for="exp">Expiration (MM/YY):</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" data-stripe="exp_month" placeholder="MM">
								<span> / </span>
								<input type="text" class="form-control" data-stripe="exp_year" placeholder="YY">
							</div>
						</div>

						<!-- <div class="form-group">
							<label>
								<span>Expiration (MM/YY):</span>
								<input type="text" size="2" data-stripe="exp_month">
							</label>
							<span> / </span>
							<input type="text" size="2" data-stripe="exp_year">
						</div> -->

						<div class="form-group">
							<label class="control-label col-sm-offset-2 col-sm-2" for="name">CVC:</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" size="4" data-stripe="cvc">
							</div>
						</div>

						<!-- <div class="form-group">
							<label>
								<span>CVC:</span>
								<input type="text" size="4" data-stripe="cvc">
							</label>
						</div> -->

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-8">
								<a type="submit" href="{{route('thank_you')}}" class="submit btn btn-default" value="Submit Payment">Submit</a>
							</div>
						</div>
					</form><br>
					<!-- <p> Name </p>
					<input type="TEXT" id="user" size="40"><br><br>
					<p>Email</p>
					<input type="TEXT" id="email" size="40"><br><br>
					<p>Phone number with +1 format ex:+15133008697</p>
					<input type="TEXT" id="phone" size="40"><br><br>
					<input type="button" id="submit" value="Submit" href="/public/pages/thanks.html"><br><br> -->
					<img style="width: 100px; height: 100px;" src="/images/Checkeasy.jpg" alt="Image goes here" />
				</div><br><br>
			</div>
		</div>
	</div>
</div>
@stop