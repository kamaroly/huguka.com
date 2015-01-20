<h1 class="lesson-title">
            {{ $lesson->title}}
                            
    <a id="episode-next-link" href="https://laracasts.com/series/code-katas-in-php/episodes/2" title="Next Episode - or press the right-arrow key">
        <i class="icon-arrow-right"></i>
    </a>
</h1>
<p class="lesson-title-meta">
          Ryashyizweho kuwa {{ date('d-M-Y',strtotime($lesson->updated_at))}}    •
            
    <strong>{{ $lesson->difficulity}}</strong>
</p>
<div class="lesson-body col-sm-12">
    <p>{{ $lesson->body }} </p>
 
</div>