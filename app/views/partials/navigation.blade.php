<nav class="navbar filter-bar fixed-absolute" role="navigation" style="{{(Request::segment(1)=='' || Request::segment(1)=='home')?
'':'background-color:#444;background:rgb(0,0,0,0.6)'}}">
    <div class="container">
      <div class="notification">
        <div id="notif-message" class="notif-message" style="display: none;" notice-type="success">
        </div>
        <!--
         <div class="notif-message success" style="" notice-type="info">
            Database updates 6-8pm GMT+0 :-)
         </div>
-->

      </div>
    <div class="navbar-header">
             <a class="navbar-brand" href="/">
        <div class="logo">
         <img src="{{Url()}}/images/logo.png">
        </div>    
      </a>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" style="color:#fff">
      <span class="fa fa-bars"></span>
    </button>

  </div>


  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      
    </ul>

     
    <ul class="nav navbar-nav navbar-right"> 
     <li>
        <a href="javascript:void(0)" onclick="showSearchForm(this)">
            <i class="fa fa-book"></i>
            Amasomo
        </a>
      </li>
      <li>
        <a href="javascript:void(0)" onclick="showSearchForm(this)">
            <i class="icon-search icon-2x"></i>
            Ama Series
        </a>
      </li>
      <li>
        <a href="javascript:void(0)" onclick="showSearchForm(this)">
            <i class="icon-search icon-2x"></i>
            Ibiganiro
        </a>
      </li>
      @if (Sentry::check())
        <li {{ (Request::is('users/show/' . Session::get('userId')) ? 'class="active"' : '') }}><a href="{{ URL::route('users.show', Session::get('userId')) }}">{{ Session::get('email') }}</a></li>
        <li><a href="{{ URL::route('Sentinel\logout') }}">Logout</a></li>
        @else
        <li {{ (Request::is('login') ? 'class="active"' : '') }}><a href="{{ URL::route('Sentinel\login') }}">Login</a></li>
        <li {{ (Request::is('users/create') ? 'class="active"' : '') }}><a href="{{ URL::route('Sentinel\register') }}">Register</a></li>
        @endif
    </ul>
    
  </div>
</div>

</nav>