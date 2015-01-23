<div class="videomenu" style="background:#fff;">
	<div class="col-md-3 video-small">
	<div class="video-small-wrap">
          
                    <a href="{{ Wardrobe::route('posts.show', $post->slug) }}" >
                       <img src="{{ $post->image}}}" style="width:100px;height:70px;">
                      </a>
                        <p style="color:#fff;">
                           <a href="{{ Wardrobe::route('posts.show', $post->slug) }}">
                            <strong class="title" style="color:#fff;">{{ $post->title }}</strong>
                            </a>
                            <br>
                             <a href="{{ Wardrobe::route('posts.show', $post->slug) }}" >
                             <small class="difficulity" style="color:#fff;"> {{ date("M/d/Y", strtotime($post->publish_date)) }}</small>
                             </a>
                             <br>
                              <a href="{{ Wardrobe::route('posts.show', $post->slug) }}" >
                             <small class="time" style="color:#fff;">{{ $post->parsed_intro }}</small>
                             </a>
                        </p>                          
</div>
</div>
</div>


