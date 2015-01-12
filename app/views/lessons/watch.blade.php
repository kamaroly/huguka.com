@extends(Config::get('Sentinel::config.layout'))
{{-- Web site Title --}}
@section('title')
@parent
Watch
@stop
@section('content')
<script type="text/javascript" src="//cdn.sublimevideo.net/js/b77r2rgh.js"></script>
<article class="article clearfix">
        <div><span class="sublimevideo-View sublimevideo-VideoView" id="sv_player_0" style="position: relative !important; top: 0px !important; height: 530px !important; left: 0px !important; width: 848px !important;"><span class="sublimevideo-View sublimevideo-Video sublimevideo-Html5Video sublimevideo-ChromeVideo" style="max-width: 848px !important; top: 0px !important; bottom: 0px !important; margin: 0px !important; height: 100% !important; left: 0px !important; right: 0px !important; width: 100% !important;"><video width="848" height="530" preload="auto" data-autoresize="fit" data-sharing-url="https://laracasts.com/series/laravel-5-fundamentals/episodes/1" style="position: absolute !important; top: 0px !important; left: 0px !important; width: 100% !important; height: 100% !important; visibility: visible !important; display: block !important;">
    <source src="//player.vimeo.com/external/116009403.hd.mp4?s=ea5e69bf6013dd326b71747918e856be" data-quality="hd">
            <source src="//player.vimeo.com/external/116009403.sd.mp4?s=84e415902e1339a2fb45406c22ff8dd1">
    </video></span><span class="sublimevideo-View sublimevideo-ImageView" style="opacity: 0.99 !important; pointer-events: none !important; overflow: hidden !important; top: 0px !important; bottom: 0px !important; margin: 0px !important; height: 100% !important; left: 0px !important; right: 0px !important; width: 100% !important; background: black !important;"><img src="https://s3.amazonaws.com/laracasts/images/video-thumbnails/laravel-5-fundamentals-composer.jpg" width="848" height="0" style="position: absolute !important; display: block !important; width: 848px !important; height: 530px !important; top: 0px !important; left: 0px !important; max-width: 848px !important; max-height: none !important;"></span><span class="sublimevideo-View" style="top: 0px !important; bottom: 0px !important; margin: 0px !important; height: 100% !important; left: 0px !important; right: 0px !important; width: 100% !important;"><span class="sublimevideo-View sublimevideo-Button sublimevideo-StartView" style="top: 0px !important; bottom: 0px !important; margin: 0px !important; height: 100% !important; left: 0px !important; right: 0px !important; width: 100% !important;"><span class="sublimevideo-View" style="position: static !important; top: 0px !important; bottom: 0px !important; margin: 0px !important; height: 100% !important; left: 0px !important; right: 0px !important; width: 100% !important;"><span class="sublimevideo-View" style="top: 230px !important; height: 70px !important; left: 0px !important; right: 0px !important; margin-right: auto !important; margin-left: auto !important; width: 70px !important;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="84" height="84" style="pointer-events: none !important; position: absolute !important; top: -7px !important; left: -7px !important; width: 84px !important; height: 84px !important; background: transparent !important;"><g><g><defs><filter id="sublimeFilter1" filterUnits="userSpaceOnUse"><feOffset result="1" dx="0" dy="1"></feOffset><feGaussianBlur result="2" stdDeviation="2.6208"></feGaussianBlur></filter></defs><path d="M42 7 A35, 35, 270, 0, 0, 7, 42 A35, 35, 270, 0, 0, 42, 77 A35, 35, 270, 0, 0, 77, 42 A35, 35, 270, 0, 0, 42, 7 L42 7 M42.00000000000001 11 A31, 31, 90, 0, 1, 73, 42 A31, 31, 90, 0, 1, 42, 73 A31, 31, 90, 0, 1, 11, 42 A31, 31, 90, 0, 1, 42, 11 M30 29 L56 42 L30 55 L30 29 Z" transform="" fill="rgba(0,0,0,0.4)" stroke-width="0" stroke="rgba(0,0,0,0.4)" stroke-linejoin="round" filter="url(&quot;https://laracasts.com/series/laravel-5-fundamentals/episodes/1#sublimeFilter1&quot;)" mask="url(&quot;https://laracasts.com/series/laravel-5-fundamentals/episodes/1#sublimeMask1&quot;)"></path><path d="M42 7 A35, 35, 270, 0, 0, 7, 42 A35, 35, 270, 0, 0, 42, 77 A35, 35, 270, 0, 0, 77, 42 A35, 35, 270, 0, 0, 42, 7 L42 7 M42.00000000000001 11 A31, 31, 90, 0, 1, 73, 42 A31, 31, 90, 0, 1, 42, 73 A31, 31, 90, 0, 1, 11, 42 A31, 31, 90, 0, 1, 42, 11 M30 29 L56 42 L30 55 L30 29 Z" transform="" fill="rgba(255,255,255,0.9)"></path></g></g><defs><mask id="sublimeMask1" maskUnits="userSpaceOnUse"><rect x="0" y="0" width="100%" height="100%" fill="white"></rect><path d="M42 7 A35, 35, 270, 0, 0, 7, 42 A35, 35, 270, 0, 0, 42, 77 A35, 35, 270, 0, 0, 77, 42 A35, 35, 270, 0, 0, 42, 7 L42 7 M42.00000000000001 11 A31, 31, 90, 0, 1, 73, 42 A31, 31, 90, 0, 1, 42, 73 A31, 31, 90, 0, 1, 11, 42 A31, 31, 90, 0, 1, 42, 11 M30 29 L56 42 L30 55 L30 29 Z" fill="black"></path></mask></defs></svg></span></span></span></span></span>
                            <video id="laracasts-video" class="sublime" width="848" height="530" preload="auto" data-autoresize="fit" data-sharing-url="https://laracasts.com/series/laravel-5-fundamentals/episodes/1" poster="//s3.amazonaws.com/laracasts/images/video-thumbnails/laravel-5-fundamentals-composer.jpg" src="" style="display: none !important;">
    <source src="//player.vimeo.com/external/116009403.hd.mp4?s=ea5e69bf6013dd326b71747918e856be" data-quality="hd">
            <source src="//player.vimeo.com/external/116009403.sd.mp4?s=84e415902e1339a2fb45406c22ff8dd1">
    </video>
                    </div>

        <h1 class="lesson-title">
            Meet Composer
                            <a id="episode-next-link" href="https://laracasts.com/series/laravel-5-fundamentals/episodes/2" title="Next Episode - or press the right-arrow key">
        <i class="icon-arrow-right"></i>
    </a>
                    </h1>

        <p class="lesson-title-meta">
            Published on January 5th, 2015 •
            <strong>intermediate</strong>
        </p>

        <div class="lesson-body col-sm-12">
            <p>Before we can get started with Laravel, you'll first need to learn about Composer, which is PHP's premier dependency manager.</p>        </div>
    </article>
@stop