<?php

class Instructor extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  //funcion para insertar un instructor
  function insertar($datos){
    //CONSULTAR ACTIVE RECORD -> CodeIgniter Inyeccion SQL
    return $this->db->insert("instructor",$datos);
  }
  //Funcion para consultar instructores
  function obtenerTodos(){
    $listadoInstructores=$this->db->get("instructor");
    if($listadoInstructores->num_rows()>0){//Si hay datos
      return $listadoInstructores->result();
    }else{
      return false;
    }
  }
  //borrar instructores
  function borrar($id_ins)
  {
    $this->db->where("id_ins",$id_ins);
    return $this->db->delete("instructor");
    //modo facil
    // if ($this->db->delete("instructor")) {
    //   return true;
    // } else {
    //   return false;
    // }

  }
  // funcion para consultar instructor
  function obtenerPorId($id_ins){
    $this->db->where("id_ins",$id_ins);
    $instructor=$this->db->get("instructor");
    if ($instructor->num_rows()>0) {
      return $instructor->row();
    }
    return false;
  }

  //funcion para actualizar un instructor
  function actualizar($id_ins,$datos)
  {
    $this->db->where("id_ins",$id_ins);
    return $this->db->update('instructor',$datos);
  }
}//cierre de la clase

 ?>
