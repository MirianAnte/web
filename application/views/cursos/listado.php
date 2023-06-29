<style>
.nuevo{
  margin-top: 18px;
}
</style>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1 class="text-center">LISTADO DE CURSOS</h1>
    </div>
    <div class="col-md-4 nuevo">
      <a href="<?php echo site_url('cursos/nuevo') ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Agregar Cursos</a>
    </div>
</div>
  <br>
  <?php if ($cursos): ?>
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>NOMBRE CURSO</th>
          <th>TIPO CURSO</th>
          <th>MODALIDAD CURSO</th>
          <th>JORNADA CURSO</th>
          <th>HORARIO CURSO</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($cursos as $filaTemporal): ?>
          <tr>
            <td>
              <?php echo $filaTemporal->id_cur ?>
            </td>
            <td>
              <?php echo $filaTemporal->nombre_cur ?>
            </td>
            <td>
              <?php echo $filaTemporal-> tipo_cur ?>
            </td>
            <td>
              <?php echo $filaTemporal-> modalidad_cur ?>
            </td>
            <td>
              <?php echo $filaTemporal-> jornada_cur ?>
            </td>
            <td>
              <?php echo $filaTemporal-> horario_cur ?>
            </td>

            <td class="text-center">
              <a href="#" title="Editar Instructor" style="color:orange;"> <i class="glyphicon glyphicon-pencil"></i></a>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo site_url(); ?>/cursos/eliminar/<?php echo $filaTemporal->id_cur ?>"title="Eliminar Instructor" onclick="return confirm('¿Estas seguro de eliminar el registro?');" style="color:red;"> <i class="glyphicon glyphicon-trash"></i></a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <h1>no hay cursos</h1>
  <?php endif; ?>
</div>

 <!-- sentencias selectivas
 ->if
 ->switch /case
 sentecas repetitivas /iterativa
 ->for  inicio;condicion:incremento
 ->while condicion
 ->do while
 ->foreach -->
