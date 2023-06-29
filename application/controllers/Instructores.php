<?php
class Instructores extends CI_Controller
{

  function __construct()
  {
    parent:: __construct();
    //cargar modelo
    $this->load->model('Instructor');
    if (!$this->session->userdata("conectado")){
      redirect("welcome/login");
    }
  }
  //funcion que renderiza la vista index
  public function index(){
    $data['instructores']=$this->Instructor->obtenerTodos();
    $this->load->view('header');
    $this->load->view('instructores/index',$data);
    $this->load->view('footer');
  }
 //funcion para renderizar la vista nuevo
 //nuevo commit
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('instructores/nuevo');
    $this->load->view('footer');
  }
  public function guardar(){
    //codigo neto
    $datosNuevoInstructor=array(
      "cedula_ins"=>$this->input->post('cedula_ins'),
      "primer_apellido_ins"=>$this->input->post('primer_apellido_ins'),
      "segundo_apellido_ins"=>$this->input->post('segundo_apellido_ins'),
      "nombres_ins"=>$this->input->post('nombres_ins'),
      "titulo_ins"=>$this->input->post('titulo_ins'),
      "telefono_ins"=>$this->input->post('telefono_ins'),
      "direccion_ins"=>$this->input->post('direccion_ins')
    );
    if ($this->Instructor->insertar($datosNuevoInstructor)) {
      $this->session->set_flashdata("confirmacion","Instructor guardado exitosamente");
    }else {
      $this->session->set_flashdata("error","Error al guardar intenten nuevamente");
    }
    redirect('instructores/index');

  }
  //funcion para eliminar instructores
  public function eliminar($id_ins){
    if ($this->session->userdata("conectado")->perfil_usu!="ADMINISTRADOR") {
    $this->session->set_flashdata("error","No tiene permisos para eliminar");
    redirect("instructores/index");
      // code...
    }
    if ($this->Instructor->borrar($id_ins))
    {//invocando el modelo
      $this->session->set_flashdata("confirmacion","Instructor eliminado exitosamente");
    }else{
      $this->session->set_flashdata("error","Error al eliminar intenten nuevamente");
    }
      redirect('instructores/index');
  }
  //funcion renderiza vista editar con el instructor
  public function editar($id_ins){
    $data["instructorEditar"]=$this->Instructor->obtenerPorId($id_ins);
    $this->load->view('header');
    $this->load->view('instructores/editar',$data);
    $this->load->view('footer');
  }

  public function procesarActualizacion($value='')
  {
    $datosEditados=array(
      "cedula_ins"=>$this->input->post('cedula_ins'),
      "primer_apellido_ins"=>$this->input->post('primer_apellido_ins'),
      "segundo_apellido_ins"=>$this->input->post('segundo_apellido_ins'),
      "nombres_ins"=>$this->input->post('nombres_ins'),
      "titulo_ins"=>$this->input->post('titulo_ins'),
      "telefono_ins"=>$this->input->post('telefono_ins'),
      "direccion_ins"=>$this->input->post('direccion_ins')
    );
    $id_ins=$this->input->post("id_ins");
    if ($this->Instructor->actualizar($id_ins,$datosEditados)) {
      $this->session->set_flashdata("confirmacion","Instructor actualizado exitosamente");
    }else {
      $this->session->set_flashdata("error","Error al editar intenten nuevamente");
    }
    redirect("instructores/index");
  }
    //forma para aprender
    //echo $this->input->post('cedula_ins');
    //echo "<br>";
    //echo $this->input->post('primer_apellido_ins');
    //echo $this->input->post('segundo_apellido_ins');
    //echo $this->input->post('nombres_ins');
    //echo $this->input->post('titulo_ins');
    //echo $this->input->post('telefono_ins');
    //echo $this->input->post('direccion_ins');
  }
?>
