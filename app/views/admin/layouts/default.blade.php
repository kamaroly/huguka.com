<html lang="en"><head>
  <title>	Admin
 | Wardrobe</title>
  <meta name="env" content="production">
  <meta name="token" content="v33jhEuDXf7rnD7oOJqdCcrjo9MYt0j4r7BevoSz">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="http://localhost:8000/packages/wardrobe/core/admin/style.css">
</head>
<body>
  <div id="header-region"><header><nav>
  <ul>
    <li><a class="users" href="{{Url()}}/admin/membership"><i class="icon-money"></i> Membership</a></li>
    <li><a class="lessons" href="{{Url()}}/admin/lessons"><i class="icon-book"></i> Lessons</a></li>
    <li><a class="write" href="{{Url()}}/admin#"><i class="icon-plus"></i> Write</a></li>
    <li><a class="posts" href="{{Url()}}/admin#post"><i class="icon-list"></i> Posts</a></li>
    <li><a class="accounts" href="#accounts"><i class="icon-user"></i> Accounts</a></li>
    <li><a href="{{Url()}}/admin/logout"><i class="icon-off"></i> Logout</a></li>
  </ul>
</nav>
<style type="text/css">
  .error{
    color: red;
  }
</style>
</header>
</div>
  <div id="js-alert"></div>
  <div class="container-fluid">
    <div class="row-fluid">
      	<div id="main-region">
          <div class="span12">
          @include('Sentinel::layouts/notifications')
          @yield('content')

          </div>
        </div>
    </div>
  </div>
  <script type="text/javascript" src="{{ asset(wardrobe_path('admin/js/app.js')) }}"></script>
  <script src="{{ asset(wardrobe_path('admin/js/jquery.min.js')) }}"></script>
  <script>window.jQuery || document.write('<script src="{{ asset(wardrobe_path('admin/js/jquery.js')) }} "><\/script>')
  </script>
  <script type="text/javascript" src="{{ asset(wardrobe_path('admin/js/structure.js')) }}"></script>
  <script type="text/javascript" src="{{ asset(wardrobe_path('admin/js/app.js')) }}"></script>

</body>
</html>