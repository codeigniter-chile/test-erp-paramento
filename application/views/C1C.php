<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container my-container">
  <!-- Page Content -->
  <div id="page-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8">
          <h1><strong>C1A</strong> Listar Cliente</h1>
          <p>Muestra las empresas que son tus clientes</p>                
        </div>
        <div class="col-lg-4">
          <img class="img-responsive" src="<?php echo base_url();?>assets/img/empresa.png" alt="">
        </div>

      </div>
      <hr>

      <table class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Mail</th>
            <th>Web</th>
          </tr>
        </thead>
        <tbody>
         <?php
           foreach($db_cliente as $fila)
         {
          ?>
          <tr>
            <td><?=$fila->idcliente?></td>
            <td><?=$fila->C1Anname?></td>
            <td><?=$fila->C1Aenphone?></td>
            <td><a href="mailto://<?=$fila->C1email?>"><?=$fila->C1email?></a></td>
            <td><a href="mailto://<?=$fila->C1Aenweb?>"><?=$fila->C1Aenweb?></a></td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</form>
</div>
<!-- /#page-content-wrapper -->
</div>
