<?php
class Cursos extends CI_Controller
{

  function __construct()
  {
    parent:: __construct();
    //cargar modelo
    $this->load->model('Curso');
  }
  //funcion que renderiza la vista index
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('cursos/nuevo');
    $this->load->view('footer');
  }
  public function listado(){
    $data['cursos']=$this->Curso->obtenerTodos();
    $this->load->view('header');
    $this->load->view('cursos/listado',$data);
    $this->load->view('footer');
  }
 //funcion para renderizar la vista nuevo
 //nuevo commit
 public function guardar(){
   //codigo neto
   $datosNuevoCurso=array(
     "nombre_cur"=>$this->input->post('nombre_cur'),
     "tipo_cur"=>$this->input->post('tipo_cur'),
     "modalidad_cur"=>$this->input->post('modalidad_cur'),
     "jornada_cur"=>$this->input->post('jornada_cur'),
     "horario_cur"=>$this->input->post('horario_cur'),
   );
   if ($this->Curso->insertar($datosNuevoCurso)) {
     redirect('cursos/listado');
   }else {
     echo "<h1>ERROR AL INSERTAR</h1>";
   }
 }


 public function eliminar($id_cur){
   if ($this->Curso->borrar($id_cur))
   {//invocando el modelo
     redirect('cursos/listado');
   }else{
     echo "ERROR AL BORRAR :()";
   }

 }
}

?>
