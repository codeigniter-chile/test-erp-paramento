<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="Marlon" content="Paramento" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.png" type="image/x-icon"/>
<!-- Stylesheets ===== -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/simple-sidebar.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" />
<!-- External JavaScripts ======= -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/angular.min.js"></script>
<title>ERP-LOGIN</title>
 </head>
<body ng-app>
	<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        	<style>
        	   body{
        	   	background-color: #cdcdcd;
        	   }
        	   .mydiv{
                  text-align: center;
                  margin-bottom: 50px;
        	   }
               
               .mydiv img{
                  max-width: 50%;
                  margin: 0 auto;
               }

        	</style>
        <div class="mydiv">
          <img class="img-responsive" src="<?php echo base_url();?>assets/img/empresa.png" alt=""> 
        </div>                
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Entrar</div>
                        <!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div> -->
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" name="loginform" action="#" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group" ng-class="{'has-error':loginform.usermail.$invalid,'has-success':loginform.usermail.$valid }">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-usermail" type="email" class="form-control" name="usermail" ng-model="user.mail" value="" placeholder="Correo Electrónico" required data-toggle="tooltip" data-placement="right" title="Correo Electrónico">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group" ng-class="{'has-error':loginform.password.$invalid,'has-success':loginform.password.$valid }">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" ng-model="user.pass" placeholder="Contraseña" required data-toggle="tooltip" data-placement="right" title="Contraseña" title="Contraseña">
                             </div>
                                    
                            <div style="margin-bottom: 25px" class="input-group" ng-class="{'has-error':loginform.company.$invalid,'has-success':loginform.company.$valid }">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase" name="company" ng-model="user.company" ></i></span>                          
                                        <select class="form-control" required>
                                          <option>Paramento Design</option>
                                          <option>Test</option>
                                      </select>
                             </div>
                             <!--   
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>
                               -->
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button id="btn-login" class="btn btn-success" ng-disabled="loginform.$invalid">LOGIN</button>
                                      <!--  
                                      <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>
                                      -->
                                    </div>
                                </div>
                            </form>



                        </div>                     
                    </div>  
        </div>
    </div>
    <script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    </script>
</body>
</html>