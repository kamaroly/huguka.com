@extends('layouts.default')

@section('content')
     <style type="text/css">
 .ui-corner-all
        {
            -moz-border-radius: 4px 4px 4px 4px;
        }
        .ui-widget-content
        {
            border: 5px solid black;
            color: #222222;
            background-color: Red;
        }
        .ui-widget
        {
            font-family: Verdana,Arial,sans-serif;
            font-size: 15px;
        }
        .ui-menu
        {
            display: block;
            float: left;
            list-style: none outside none;
            margin: 0;
            padding: 2px;
        }
        .ui-autocomplete
        {
            cursor: default;
            position: absolute;
        }
        .ui-menu .ui-menu-item
        {
            clear: left;
            float: left;
            margin: 0;
            padding: 0;
            width: 100%;
        }
        .ui-menu .ui-menu-item a
        {
            display: block;
            padding: 3px 3px 3px 3px;
            text-decoration: none;
            cursor: pointer;
            background-color: Green;
        }
        .ui-menu .ui-menu-item a:hover
        {
            display: block;
            padding: 3px 3px 3px 3px;
            text-decoration: none;
            color: White;
            cursor: pointer;
            background-color: ButtonText;
        }
        .ui-widget-content a
        {
            color: #222222;
        }
     </style>
      <!-- Javascript -->
      <script>
         $(function() {
           
            $( "#automplete-1" ).autocomplete({

               source:function(request, response) {
					$.getJSON("/search/autocomplete", {
						term: request.term
					}, function(data) {
						// data is an array of objects and must be transformed for autocomplete to use
						response(data);
					});
				},

				focus: function(event, data) {
					// prevent autocomplete from updating the textbox
					event.preventDefault();
				},
				select: function(event, data) {
					// prevent autocomplete from updating the textbox
					event.preventDefault();

					// navigate to the selected item's url
					window.location.replace('{{Url()}}/users/'+data.item.id);
				}
            });
         });
      </script>
   </head>
   <body>
      <!-- HTML --> 
      <div class="ui-widget">
         <p>Type "a" or "s"</p>
         <label for="automplete-1">Tags: </label>
         <input id="automplete-1">
      </div>


@stop