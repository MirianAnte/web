<?php

class Curso extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  //funcion para insertar un curso
  function insertar($datos){
    //CONSULTAR ACTIVE RECORD -> CodeIgniter Inyeccion SQL
    return $this->db->insert("curso",$datos);
  }
  function obtenerTodos(){
    $listadoCursos=$this->db->get("curso");
    if($listadoCursos->num_rows()>0){//Si hay datos
      return $listadoCursos->result();
    }else{
      return false;
    }
  }
  function borrar($id_cur)
  {
    $this->db->where("id_cur",$id_cur);
    return $this->db->delete("curso");
    //modo facil
    // if ($this->db->delete("instructor")) {
    //   return true;
    // } else {
    //   return false;
    // }

  }

}//cierre de la clase

 ?>
