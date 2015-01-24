@extends('admin.layouts.default')
	
@section('content')

<div class="span12">
	<div class="well">
 <form class="form-horizontal center" method="POST" action="/admin/lessons/save">
  <div class="control-group">
    <label class="control-label" for="title">Title</label>
    <div class="controls">
      <input type="icon"  name="title" value="{{Input::old('title')}}">
            {{ $errors->first('title','<span class="help-block error">:message</span>')}}
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="length">Length</label>
    <div class="controls">
      <input type="icon"  name="length" value="{{Input::old('length')}}">
      {{ $errors->first('length','<span class="help-block error">:message</span>')}}
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="difficulity">Difficulity</label>
    <div class="controls">
      <input type="icon"  name="difficulity" value="{{Input::old('difficulity')}}">
          {{ $errors->first('difficulity','<span class="help-block error">:message</span>')}}
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="video_script">Video Script</label>
    <div class="controls">
      <input type="icon"  name="video_script" value="{{Input::old('video_script')}}">
          {{ $errors->first('video_script','<span class="help-block error">:message</span>')}}
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="icon">icon</label>
    <div class="controls">
      <input  type="icon" name="icon" value="{{Input::old('icon')}}">
          {{ $errors->first('icon','<span class="help-block error">:message</span>')}}
    </div>
  </div>
  <div class="control-group">
  	<div class="control-label">
  		body
  	</div>
  	<div class="controls">
  		{{ Form::textarea('body', Input::old('body'), [])}}
  		 {{ $errors->first('body','<span class="help-block error">:message</span>')}}
  	</div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success save">Save Account</button>
    </div>
  </div>
</form>
</div>
</div>
@stop