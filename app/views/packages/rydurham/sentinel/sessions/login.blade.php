@extends(Config::get('Sentinel::config.layout'))
{{-- Web site Title --}}
@section('title')
@parent
Login
@stop
@section('content')
 <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
           
            <!--      Wizard container        -->   
            <div class="wizard-container"> 
                <div class="card wizard-card ct-wizard-orange" id="wizard">
                
                <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->
                
                        <div class="wizard-header">
                            <h3>
                               <b>INJIRA</b> MURI HUGUKA <br>
                               <small>Injira muri huguka maze ugire ubushobozi bwo kureba amasomo yose .</b></small>
                            </h3>
                        </div>
                        <ul>
                            <li><a href="#about" data-toggle="tab">Koresha konte yawe maze winjire</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text"> </h4>
                                  <div class="col-sm-4 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="images/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
   {{ Form::open(array('action' => 'Sentinel\SessionController@store')) }}


            <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
              {{ Form::label('Email')}}
                {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email', 'autofocus')) }}
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
              {{ Form::label('Password')}}
                {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password'))}}
                {{ ($errors->has('password') ?  $errors->first('password') : '') }}
            </div>
            
            <label class="checkbox">
                {{ Form::checkbox('rememberMe', 'rememberMe') }} Remember me
            </label>
            {{ Form::submit('Sign In', array('class' => 'btn btn-finish btn-fill btn-warning btn-wd btn-sm'))}}
            <a class="btn btn-link" href="{{ route('Sentinel\forgotPasswordForm') }}">Forgot Password</a>
        {{ Form::close() }}
                                    
                                  </div>
                              </div>
                            </div>
                        
                            
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
  @stop