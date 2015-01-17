@extends(Config::get('Sentinel::config.layout'))
{{-- Web site Title --}}
@section('title')
@parent
Watch
@stop
@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="sign-up-video-substitute">
            <h3>Uburyo bu 3 bwo kureba ino nyigisho</h3>

            <ul class="naked naked-list">
                <li><a href="{{Url()}}/login?uvuye={{ URL::current()}}">Injira (Login) </a></li>
                <li><a href="{{Url()}}/register" class="">Gura ifatabuguzi rya 5000 Rwf</a></li>
                <li><a href="{{Url()}}/purchase">Yigure ku mafaranga 1500 Rwf</a></li>
            </ul>
        </div>
    @include('lessons.videoinfo')
  </div>
  @include('lessons.videomenu')


  </div>
     @include('lessons.episodeslist')
</div>
@stop