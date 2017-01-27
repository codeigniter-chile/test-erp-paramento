<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container my-container">
	         <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <h1><strong>C1A</strong> Crear Cliente</h1>
                        <p>Crear la empresas que son tus clientes</p>                
                    </div>
                    <div class="col-lg-4">
                        <img class="img-responsive" src="<?php echo base_url();?>assets/img/empresa.png" alt="">
                    </div>

                </div>
                 <hr>
<form id="provform" class="form-horizontal" name="C1Aprovform" action="#" method="post">                 
                 <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Datos Generales de la Empresa</h3>
                    </div>
                    <div class="panel-body"> 

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">Nombre de la Empresa</span>
                        <input  type="text" class="form-control" name="C1Anname" value="" required>                                        
                   </div>

                   <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">CODIGO</span>
                        <input  type="text" class="form-control" name="C1Ancode" value="">                                        
                   </div>

                   <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">Razon Social</span>
                        <input  type="text" class="form-control" name="C1Aensoc" value="">                                        
                   </div>

                   <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">Dirección</span>
                        <input  type="text" class="form-control" name="C1Aendres" value="">                                        
                   </div>

                   <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">Pais</span>
                        <input  type="text" class="form-control" name="C1Aencontry" value="">                                        
                   </div>

                   <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">Moneda</span>
                        <input  type="text" class="form-control" name="C1Aenmon" value="">                                        
                   </div>

                   <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">Web</span>
                        <input  type="text" class="form-control" name="C1Aenweb" value="">                                        
                   </div>

                   <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">Teléfono</span>
                        <input  type="text" class="form-control" name="C1Aenphone" value="">                                        
                   </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">Ubicación Mapa</span>
                        <input  type="text" class="form-control" name="C1Aenmapa" value="">                                        
                     </div>

                     <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">Correo Electrónico</span>
                        <input  type="email" class="form-control" name="C1email" value="">                                        
                     </div>



                   <textarea class="form-control" rows="3" name="C1AtextEmp"></textarea>


                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Datos de Finanzas</h3>
                    </div>
                    <div class="panel-body"> 
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">Nombre Banco</span>
                        <input  type="text" class="form-control" name="C1Anbanck" value="">                                        
                   </div>
                   <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">No Cuenta</span>
                        <input  type="text" class="form-control" name="C1AenCh" value="">                                        
                   </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon">Info cuenta de finanza</span>
                        <input  type="text" class="form-control" name="C1AenFi" value="">                                        
                   </div>

                    </div>
                </div>
<hr>

<button id="btn-login" class="btn btn-success" ng-disabled="loginform.$invalid">CREAR</button>

            </div>
            </form>
        </div>
        <!-- /#page-content-wrapper -->
</div>
