<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>@yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
  <link href="{{ Url()}}/css/bootstrap.min.css" rel="stylesheet" />
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
       @yield('content')
    </div> <!--  big container -->

     <div class="footer">
      <div class="container">
             Huguka.com .</a>
      </div>
    </div>

</div>

</body>

    <script src="{{Url()}}/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="{{Url()}}/js/bootstrap.min.js" type="text/javascript"></script>
		
	<!--   plugins 	 -->
	<script src="{{Url()}}/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
	<script src="{{Url()}}/js/wizard.js"></script>
	
</html>