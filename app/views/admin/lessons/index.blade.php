@extends('admin.layouts.default')
	
@section('content')
<div class="container">
  <div class="row-fuild">
    <div class="span12">
      <h3>Lessons</h3>
<a href="/admin/lessons/add" class="btn btn-success publish pull-right"><i class="icon-plus"></i> New</a>
    </div>
  <div class="span12">
    @if($lessons->count()>0)
 
 {{ $lessons->links()}}
 <table>
  <thead>
    <tr>
      <th>Title</th>
      <th>Body</th>
      <th>Difficulity</th>
      <th>Length</th>
      <th></th>
    </tr>
  </thead>
  @foreach($lessons as $Lesson)
  <tr>
     <td>{{$Lesson->title}}</td>
     <td>{{$Lesson->body}}</td>
     <td>{{$Lesson->difficulity}}</td>
     <td>{{$Lesson->length}}</td>
     <td><a href="/admin/lessons/{{$Lesson->id}}"><i class="icon-pencil"></i></a></td>
  </tr>
  @endforeach 
 </table>
@else
No Lesson found
@endif
  </div>
</div>
</div>
@stop