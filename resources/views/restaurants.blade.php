@extends('layouts.app')

@section('css')
<style type="text/css">
	#actual {
		background: url('images/chef.jpg');
		background-size: cover;
		background-repeat: no-repeat;
	}

</style>
@stop

@section('content')
<div id="actual" class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12"><br><br><br><br><br><br><br>
			<section>
				<h1 style="color: #FFF; margin-left: 50px;">Restaurants - Do More Than Ever</h1>
				<h4></h4><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</section>
			</div>
		</div>
	</div>
</div>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12"><br><br><br>
			<section>
				<h4>The familiar process, now simplified.</h4><br><br>
				<div class="row">
					<div class="col-md-4 text-center">
						<img style="width: 200px; height: 200px;" src="/images/install.png"><br><br>
							<p>We provide a free tablet with our app</p>
					</div>
					<div class="col-md-4 text-center">
						<img style="width: 200px; height: 200px;" src="/images/server.png"><br><br>
							<p>In the app, Server matches customer(s) to a table</p>
					</div>
					<div class="col-md-4 text-center">
						<img style="width: 200px; height: 200px;" src="/images/pos.png"><br><br>
							<p>Simply close the tab and Checkeasy will handle the billing</p>
					</div>
				</div><br><br>
			</section>
			</div>
		</div>
	</div>
</div>
@stop