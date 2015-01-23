@extends(theme_view('layout'))

@section('title')
  Archives
@stop

@section('content')
  <section>

    {{-- Archive Heading --}}
    {{-- Notice the triple brackets to escape any xss for tags and search term. --}}
    @if (isset($tag))
      <h4 class="title">{{{ ucfirst($tag) }}} Archives</h4>
    @elseif ($search)
      <h4 class="title">Results for {{{ $search }}}</h4>
    @else
      <h4 class="title">Archives</h4>
    @endif

    @foreach ($posts as $post)
      @include(theme_view('inc.post'))
    @endforeach

    {{ $posts->appends(array('q' => Input::get('q')))->links() }}

  </section>
@stop
