@extends(Config::get('Sentinel::config.layout'))
{{-- Web site Title --}}
@section('title')
@parent
Amasomo 
@stop
@section('content')
    <link href='//fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT' rel='stylesheet' type='text/css'/>
    <link href="{{ asset(theme_path('css/style.css')) }}" rel="stylesheet" media="screen">
  
  <body>
    <div class="container">
      <header>
        <h1><a href="{{ wardrobe_url('/') }}">{{ site_title() }}</a></h1>
        <nav>
          <ul>
            <li><a href="{{ wardrobe_url('/archive') }}">Posts</a></li>
            <li><a href="{{ wardrobe_url('/rss') }}">RSS</a></li>
          </ul>
        </nav>
      </header>
      <div class="content">
        @yield('content')
      </div>
    </div>
  </body>
@stop