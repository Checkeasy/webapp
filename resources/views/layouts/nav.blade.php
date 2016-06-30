<nav class="navbar navbar-default navbar-fixed-top">
    <!-- <div class="container"> -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/"><img src="/images/Checkeasy.png" alt="Checkeasy-Logo" style="display: inline; margin: 5px 0 2px 2px; width: 40px; height: 40px;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{route('index')}}">Checkeasy</a></li>

                <li><a href="{{route('signup')}}">Signup</a></li>

                <li><a href="{{route('customers')}}">Customers</a></li>

                <li><a href="{{route('restaurants')}}">Restaurants</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a style="margin-right: 10px;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{ Name } <span class="glyphicon glyphicon-user"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('customers')}}">Customers</a></li>
                        <li><a href="{{route('restaurants')}}">Restaurants</a></li>
                        <li><a href="{{route('index')}}">Logout</a></li>
                    </ul>
                </li>
            </ul>
    	</div>
    <!-- </div> -->
</nav>

@section('js')
<script type="text/javascript">
$(document).ready( function() {
	$('a[href="' + this.location.pathname + '"]').parent().addClass('active');
});
</script>
@stop