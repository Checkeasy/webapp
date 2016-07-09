@extends('layouts.app')

@section('css')
<style type="text/css">
	.content {
		background: url('images/chef.jpg');
		background-size: cover;
		background-repeat: no-repeat;
	}

</style>
@stop

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12"><br><br><br><br><br><br><br>
			<section>
				<h1 style="color: #FFF; margin-left: 50px;">Restaurants - Do More Than Ever</h1>
				<h4>Just 3 Simple Steps</h4><br><br>
			</section>
			<section>
				<div class="row">
					<div class="col-md-4 text-center">
						<img style="width: 200px; height: 200px;" src="/images/install.png"><br><br>
						<ul class="text-left">
							<li>We provide a free tablet with our app</li>
						</ul>
					</div>
					<div class="col-md-4 text-center">
						<img style="width: 200px; height: 200px;" src="/images/server.png"><br><br>
						<ul class="text-left">
							<li>In the app, Server matches customer(s) to a table</li>
						</ul>
					</div>
					<div class="col-md-4 text-center">
						<img style="width: 200px; height: 200px;" src="/images/pos.png"><br><br>
						<ul>
							<li>Simply close the tab and Checkeasy will handle the billing</li>
						</ul>
					</div>
				</div>
			</section>
			</div>
		</div>
	</div>
</div>
@stop