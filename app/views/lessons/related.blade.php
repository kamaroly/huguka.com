  @if(count($related)>0)
  Izo byerekeranye
<div class="videomenu">

  
  @foreach($related as $similar)
  <div class="col-md-3 video-small">
     <div class="video-small-wrap">
          
                    <a href="/lessons/{{$similar->slug}}" target="_new">
                        <img  />
                      </a>
                        <p >
                           <a href="/lessons/{{$similar->slug}}" >
                            <strong class="title">{{ $similar->title}}</strong>
                            </a>
                            <br>
                             <a href="/lessons/{{$similar->slug}}" target="_new">
                             <small class="difficulity"> {{ $similar->difficulity}}</small>
                             </a>
                             <br/>
                              <a href="/lessons/{{$similar->slug}}" target="_new">
                             <small class="time">{{ $similar->length}}</small>
                             </a>
                        </p>

                           
            </div>
     </div>
     @endforeach

</div>
   @endif