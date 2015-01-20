@if(count($lesson->tags)>0)
<p class="lesson-tags">
    <strong>Ibyiciro:</strong>
    @foreach($lesson->tags as $tag)
    <a href="{{Url()}}/tags/{{$tag->name}}">{{$tag->name}},</a> 
    @endforeach

</p>
@endif

@include('lessons.related')
	