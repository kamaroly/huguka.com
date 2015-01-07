@extends(Config::get('Sentinel::config.layout'))

{{-- Web site Title --}}
@section('title')
@parent
home-banner
@stop

{{-- Content --}}
@section('content')

<div class="home-banner">
        <h2 class="wow bounceInDown animated" style="visibility: visible; -webkit-animation: bounceInDown;">
            Ikoranabuhanga ry'umwimerere mu kinyarwanda
          </h2>

        <h1 id="home-learn-next-choices">
            <a href="/collections/solid-principles" style="opacity: 1;">HTML</a>
        </h1>

        <a href="/register" class="btn btn-join">
            Tangira kwiga .
        </a>

                    <footer>
                <a href="/login">Usanzwe ufite konti hano ? Injira.</a>
            </footer>
</div>
@stop

@section('belowbanner')
@include('lessons.lessons')

@stop