<!DOCTYPE html>

@yield('php')

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, nofollow">

	<link rel="icon" href="/images/favicon.ico">

    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

	<title>Checkeasy</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,100,300,600,700" type="text/css">
	<link rel="stylesheet" href="https://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css">

    <!--[if lt IE 9]>
        <script src="{{asset("js/ie8-responsive-file-warning.js")}}"></script>
        <script src="{{asset("js/html5shiv.min.js")}}"></script>
        <script src="{{asset("js/respond.min.js")}}"></script>
        <![endif]-->

        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

        @yield('head')

        <style type="text/css">

        	#wrapper {
        		position:relative;
        		height: 100%;
        		margin-left: 2%;
        		margin-right: 2%;
        	}

        	#footer {
        		position:absolute;
        		bottom:0;
        		margin:0;
        		width:100%;
        		padding: 1em 2em;
        		z-index: 99999;
        		font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        		font-size: 1em;
        		line-height: 1.6em;
        	}


        	#footer-text{
        		margin: 0;
        	}
        </style>

        @yield('css')
    </head>

    <body>
    	<header>
    		@include('layouts/nav')
    	</header>
    	<div id="wrapper">

    		<div id="content" class="row">
    			<div class="content-container">

    				<div id="content-main" class="col-xs-12 col-sm-12 col-md-12">

    					@yield('content')

    				</div>
    			</div>
    		</div>

    		<footer id="footer" class="footer row">
    			<p id="footer-text">&copy; Checkeasy {{date("Y")}}</p>
    		</footer>
    	</div>

    	@yield('js')

    </body>
</html>