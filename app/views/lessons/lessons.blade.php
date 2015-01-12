<h2 class="section-heading">Amasomo asobanutse ya mudasobwa , atunganywa buri munsi.</h2>
<span class="section-heading-divider"></span>

<div class="row lesson-set lessons__row">
 
 @foreach($lessons as $lesson)
    <article class="lesson-block col-md-4">

        <div class="full-center lesson-block-inner">       
        
            <div class="lesson-block-thumbnail">
                <i class="{{ $lesson->thumbnail }}"></i>
            </div>
        
            <h5 class="lesson-block-difficulty">{{ $lesson->difficulity}}</h5>
           
            <h3 class="lesson-block-title  not-watched">
                <a href="{{Url()}}/lessons/{{$lesson->slug}}" title="{{ $lesson->title }}">
                    {{ $lesson->title}}
                </a>                  
            </h3>
         
             <small class="lesson-block-length">
                {{ $lesson->length }}   
             </small>
        </div>

        <div class="lesson-block-meta">
             <div class="lesson-date">
                {{ date('d-M-Y',strtotime($lesson->update_at))}}      
             </div>   
        </div>

        <div class="lesson-block-excerpt">
             <p>{{ $lesson->body }}
                <a href="{{Url()}}/lessons/{{ $lesson->slug}}"> komeza isomo </a>
            </p>    
      </div>
    </article>  

 @endforeach

</div>