<?php

class Modelo{
    private $Modelo;
    private $db;
  //CONSTRUCTOR
    public function __construct(){
        $this->Modelo = array();
          //PORTFORWARDING AL SERVER REMOTO
          $this->db=new PDO('pgsql:host=app-278688fa-10dd-478a-9146-e68f61bc710f-do-user-8741944-0.b.db.ondigitalocean.com; port=25060; dbname=dne; user=dne; password=ohreisgk1e3hbuk9');
    }
//MUESTRA DE INFORMACION
    public function mostrar($tabla,$condicion = "", $orden = "", $columna=""){
        //CONDICION PARA MOESTRAR SOOLO UNO O MAS DATOS
        if($condicion != ""){
            $consul_uniq="select * from ".$tabla." where id_vacante = ".$condicion.";";
            $resul_uniq = $this->db->query($consul_uniq);
            while($fila = $resul_uniq->FETCHALL(PDO::FETCH_OBJ)) {
                $this->vacante[]=$fila;
            }

            return $this->vacante;

        }elseif($orden != "" && $columna != ""){
            $general_consul_O = "select * from ".$tabla." ORDER BY ".$columna." ".$orden.";";
            $resu_O = $this->db->query($general_consul_O);
            $this->vacantes_O = $resu_O->FETCHALL(PDO::FETCH_OBJ);

            return $this->vacantes_O;
        }else{
            $general_consul = "select * from ".$tabla.";";
            $resu = $this->db->query($general_consul);
            $this->vacantes = $resu->FETCHALL(PDO::FETCH_OBJ);

            return $this->vacantes;
        }

        }
//MUESTRA DE LA INFORMACION DE CONTACTO SEGUN LA ID DE LA VACANTE
    public function mostrar_contacto($tabla, $id_contacto){

        $consul_contact="select * from ".$tabla." where id_contacto = ".$id_contacto.";";
        $resul_contact = $this->db->query($consul_contact);
        while($fila_contact = $resul_contact->FETCHALL(PDO::FETCH_OBJ)) {
            $this->contacto[]=$fila_contact;
        }

        return $this->contacto;

    }


/*
    public function insertar($tabla, $data){
        $consulta="insert into ".$tabla." values(null,". $data .")";
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
     }


    public function actualizar($tabla, $data, $condicion){
        $consulta="update ".$tabla." set ". $data ." where ".$condicion;
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
     }
    public function eliminar($tabla, $condicion){
        $eli="delete from ".$tabla." where ".$condicion;
        $res=$this->db->query($eli);
        if ($res) {
            return true;
        }else {
            return false;
        }
    }
     */
}
