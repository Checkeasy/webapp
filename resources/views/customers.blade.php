@extends('layouts.app')

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 class="page-header">Customers - Convenience All Around</h1><br>
				<h4>Just 3 Simple Steps</h4><br><br>
				<div style="height: 250px;" class="row">
					<div class="col-md-4 text-center">
						<img style="width: 200px; height: 200px;" src="/images/desktop.png"><br><br>
						<h4>1. Register</h4>
						<ul class="text-left">
							<li>Name</li>
							<li>Email</li>
							<li>Phone number</li>
							<li>Payment Information</li>
						</ul>
					</div>
					<div class="col-md-4 text-center">
						<img style="width: 150px; height: 200px;" src="/images/mobile.jpg"><br><br>
						<h4>2. Check-in</h4>
						<ul class="text-left">
							<li>Text restaurant code to Checkeasy</li>
							<li>Let the restaurant know you'll be paying with Checkeasy</li>
						</ul>
					</div>
					<div class="col-md-4 text-center">
						<img style="width: 200px; height: 200px;" src="/images/leave.png"><br><br>
						<h4>3. Leave Whenever</h4>
						<ul>
							<li>You will get your receipt via email/text message</li>
							<li>Change the tip if you like up to 2 hours after getting receipt</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop