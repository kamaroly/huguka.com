<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Huguka - Iyandikishe</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/gsdk-base.css" rel="stylesheet" />  
    
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
  
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('images/wizard.jpg')">
<nav class="navbar filter-bar fixed-absolute" role="navigation">
    <div class="container">
      <div class="notification">
        <div id="notif-message" class="notif-message" style="display: none;" notice-type="success">
        </div>
        <!--
         <div class="notif-message success" style="" notice-type="info">
            Database updates 6-8pm GMT+0 :-)
         </div>
-->

      </div>
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    
</a>
  </div>


  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="brand">    <a class="navbar-brand" href="/">
        <div class="logo">
         <img src="images/logo.png">
        </div>
    
</a></li>
    </ul>

     
    <ul class="nav navbar-nav navbar-right"> 
     <li>
        <a href="javascript:void(0)" onclick="showSearchForm(this)">
            <i class="fa fa-book"></i>
            Amasomo
        </a>
      </li>
      <li>
        <a href="javascript:void(0)" onclick="showSearchForm(this)">
            <i class="icon-search icon-2x"></i>
            Ama Series
        </a>
      </li>
      <li>
        <a href="javascript:void(0)" onclick="showSearchForm(this)">
            <i class="icon-search icon-2x"></i>
            Ibiganiro
        </a>
      </li>
    </ul>
    
  </div>
</div>

</nav>
    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
           
            <!--      Wizard container        -->   
            <div class="wizard-container"> 
                <form action="" method="">
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
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Izina</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Andrew...">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">E-mail</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="kamaro@huguka.com">
                                      </div>
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Password</label>
                                          <input type="password" class="form-control" placeholder="Ijambo ry'ibanga">
                                      </div>
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Emeza Password</label>
                                          <input type="password" class="form-control" placeholder="Emeza ijambo ry'ibanga">
                                      </div>
                                  </div>
                              </div>
                            </div>
                        
                        <div class="wizard-footer">
                            	<div class="pull-right">
                                      <a href="#"> Injira</a>
                                    <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Emeza' />
                                
        
                                </div>
                                <div class="pull-left">
                                 
                                </div>
                                <div class="clearfix"></div>
                        </div>	
                </div>
                </form>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->
    


    
     <div class="footer">
      <div class="container">
             Huguka.com .</a>
      </div>
    </div>
    
    


</div>

</body>

    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
		
	<!--   plugins 	 -->
	<script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
	<script src="js/wizard.js"></script>
	
</html>