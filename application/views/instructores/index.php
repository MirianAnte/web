<style>
  .nuevo{
    margin-top: 18px;
  }
</style>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1 class="text-center">LISTADO DE INSTRUCTORES</h1>
    </div>
    <div class="col-md-4 nuevo">
      <a href="<?php echo site_url('instructores/nuevo') ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Agregar Instructor</a>
    </div>
  </div>
  <br>
  <?php if ($instructores): ?>
    <table class="table table-striped table-bordered table-hover"
    id="tbl_instructores">
      <thead>
        <tr>
          <th>ID</th>
          <th>CEDULA</th>
          <th>PRIMER APELLIDO</th>
          <th>SEGUNDO APELLIDO</th>
          <th>NOMBRES</th>
          <th>TITULO</th>
          <th>TELÉFONO</th>
          <th>DIRECCIÓN</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($instructores as $filaTemporal): ?>
          <tr>
            <td>
              <?php echo $filaTemporal->id_ins ?>
            </td>
            <td>
              <?php echo $filaTemporal->cedula_ins ?>
            </td>
            <td>
              <?php echo $filaTemporal-> primer_apellido_ins?>
            </td>
            <td>
              <?php echo $filaTemporal->segundo_apellido_ins ?>
            </td>
            <td>
              <?php echo $filaTemporal-> nombres_ins?>
            </td>
            <td>
              <?php echo $filaTemporal-> titulo_ins?>
            </td>
            <td>
              <?php echo $filaTemporal->telefono_ins ?>
            </td>
            <td>
              <?php echo $filaTemporal-> direccion_ins ?>
            </td>
            <td class="text-center">
              <a href="<?php echo site_url(); ?>/instructores/editar/<?php echo $filaTemporal->id_ins ?>" title="Editar Instructor" style="color:orange;"> <i class="mdi mdi-pencil"></i>Editar</a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <?php if($this->session->userdata("conectado")->perfil_usu== "ADMINISTRADOR"); ?>
              <a href="<?php echo site_url(); ?>/instructores/eliminar/<?php echo $filaTemporal->id_ins ?>
                "title="Eliminar Instructor" onclick="return confirm('¿Estas seguro de eliminar el registro?');"
                style="color:red;"> <i class="mdi mdi-close"></i>Eliminar</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <h1>no hay instructores</h1>
  <?php endif; ?>
  <script type="text/javascript">
  $("#tbl_instructores")
  .datatable();

  </script>
</div>

 <!-- sentencias selectivas
 ->if
 ->switch /case
 sentecas repetitivas /iterativa
 ->for  inicio;condicion:incremento
 ->while condicion
 ->do while
 ->foreach -->
