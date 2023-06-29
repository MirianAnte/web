<h1>NUEVO CURSO</h1>
<form class="" action="<?php echo site_url(); ?>/cursos/guardar" method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="">Nombre del curso:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el nombre del curso"
          class="form-control"
          name="nombre_cur" value=""
          id="nombre_cur">
      </div>
      <div class="col-md-4">
          <label for="">Tipo del curso</label>
          <br>
          <input type="text"
          placeholder="Ingrese el tipo de curso"
          class="form-control"
          name="tipo_cur" value=""
          id="tipo_cur">
      </div>
      <div class="col-md-4">
        <label for="">Modalidad del curso:</label>
        <br>
        <input type="text"
        placeholder="Ingrese la modalidad del curso"
        class="form-control"
        name="modalidad_cur" value=""
        id="modalidad_cur">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
          <label for="">Jornada del curso:</label>
          <br>
          <input type="text"
          placeholder="Ingrese la jornada del curso"
          class="form-control"
          name="jornada_cur" value=""
          id="jornada_cur">
      </div>
      <div class="col-md-6">
          <label for="">Horario</label>
          <br>
          <input type="text"
          placeholder="Ingrese el horario del curso"
          class="form-control"
          name="horario_cur" value=""
          id="horario_cur">
      </div>
    </div>

    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/cursos/listado"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
