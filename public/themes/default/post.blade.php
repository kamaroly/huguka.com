@extends(theme_view('layout'))

@section('title')
	{{ $post->title }}
@stop

@section('content')
	<section>
		<h4 class="title">{{ $post->title }}</h4>

		{{ $post->parsed_content }}

		@include(theme_view('inc.tags'))
	</section>
@stop

