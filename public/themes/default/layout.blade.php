<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>@yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
      <!-- Custom styles for this template -->

  <link href="{{Url()}}/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ Url() }}/css/jquery-ui.css" rel="stylesheet">
	<link href="{{ Url()}}/css/huguka.com.css" rel="stylesheet" />  
  <link href="{{ Url()}}/css/font-awesome.css" rel="stylesheet">
  
</head>

<body>

<div class="image-container" style="{{(Request::segment(1)=='' || Request::segment(1)=='home')?
'background-image: url('.Url().'/images/wizard.jpg)':'background-color:rgb(231,231,231)'}}">
   @include('partials.navigation')
    <!--   Big container   -->
    <div class="container">
      <div class="row">
      <!-- Notifications -->
      @include('Sentinel::layouts/notifications')
      <!-- ./ notifications -->        
      </div>
       <div class="container">
			<header>
				<nav class="navbar navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-left">
            <li><a href="{{ Wardrobe::route('/') }}">{{ site_title() }}</a></li>
						<li><a href="{{ Wardrobe::route('posts.archive') }}">izakera</a></li>
					</ul>
				</nav>
			</header>
			<div class="content">
				@yield('content')
			</div>
			
		</div>
    </div> <!--  big container -->

     <div class="footer"> 
      <div class="container">
      </div>
    </div>

</div>

<div class="container wrap">
    @yield('belowbanner')
</div>


@include('partials.footer')


    
</body>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{Url()}}/js/jquery.min.js"></script>
    <script src="{{Url()}}/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{Url()}}/js/ie10-viewport-bug-workaround.js"></script>
        <!--   plugins   -->
  <script src="{{Url()}}/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
  <script src="{{Url()}}/js/wizard.js"></script>
	
</html>