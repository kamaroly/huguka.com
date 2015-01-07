@extends(Config::get('Sentinel::config.layout'))

{{-- Web site Title --}}
@section('title')
@parent
Register
@stop

{{-- Content --}}
@section('content')

        <div class="col-sm-8 col-sm-offset-2">
           
            <!--      Wizard container        -->   
            <div class="wizard-container"> 
            {{ Form::open(array('action' => 'Sentinel\UserController@add')) }}
                <div class="card wizard-card ct-wizard-orange" id="wizard">
                
                <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->
                
                        <div class="wizard-header">
                            <h3>
                               <b>TUBWIRE</b> UWO URIWE <br>
                               <small>Kurikirana amasomo yose kuri runo rubuga, ku mafaranga <b>5000 Rwf ku kwezi gusa !</b></small>
                            </h3>
                        </div>
                        <ul>
                            <li><a href="#about" data-toggle="tab">Urashaka kongera ubumenyi bwawe? Uhisemo neza!</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text"> </h4>
                                  <div class="col-sm-4 col-sm-offset-1">
                                     <div class="picture-container">
                                          <div class="picture">
                                              <img src="images/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                              <input type="file" id="wizard-picture">
                                          </div>
                                          <h6>Shyiraho ifoto</h6>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Numero ya Tigo Cash</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="0722883300">
                                      </div>

                                   <div class="form-group {{ ($errors->has('username')) ? 'has-error' : '' }}">
                                                         <label for="exampleInputEmail1">Izina</label>
                                    {{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Username')) }}
                                    {{ ($errors->has('username') ? $errors->first('username') : '') }}
                                    </div>

                                     <div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
                                       <label for="exampleInputEmail1">E-mail</label>
                                    {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'E-mail')) }}
                                    {{ ($errors->has('email') ? $errors->first('email') : '') }}
                                    </div>
                                    
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                  <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
                                    <label>Password</label>
                                    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Ijambo ry\'ibanga')) }}
                                    {{ ($errors->has('password') ?  $errors->first('password') : '') }}
                                  </div>
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                  <div class="form-group {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
                                    <label>Emeza Password</label>
                                      {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) }}
                                      {{ ($errors->has('password_confirmation') ?  $errors->first('password_confirmation') : '') }}
                                  </div>
                                  </div>
                              </div>
                            </div>
                        
                        <div class="wizard-footer">
                                <div class="pull-right">
                                      <a href="#"> Injira</a>
                                    <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Emeza' />
                                
        
                                </div>
                                <div class="pull-left">
                                 
                                </div>
                                <div class="clearfix"></div>
                        </div>  
                </div>
            {{ Form::close() }}
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    


@stop