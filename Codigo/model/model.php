<?php

class Modelo{
    private $Modelo;
    private $db;
  
    public function __construct(){
        $this->Modelo = array();
        $this->db=new PDO('mysql:host=localhost;dbname=dne',"root","");
        
    }

    public function mostrar($tabla,$condicion = ""){
        if($condicion != ""){

            $consul_uniq="select * from ".$tabla." where id_vacante = ".$condicion.";";
            $resul_uniq = $this->db->query($consul_uniq);
            while($fila = $resul_uniq->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->vacante[]=$fila;
            }
            
            return $this->vacante;

        }else{
            echo "Todos";
            $general_consul = "select * from ".$tabla.";";
            $resu = $this->db->query($general_consul);
            $this->vacantes = $resu->FETCHALL(PDO::FETCH_ASSOC);

            return $this->vacantes;
        } 

        } 

    public function mostrar_contacto($tabla, $id_contacto){
        
        $consul_contact="select * from ".$tabla." where id_contacto = ".$id_contacto.";";
        $resul_contact = $this->db->query($consul_contact);
        while($fila_contact = $resul_contact->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->contacto[]=$fila_contact;
        }
        echo "Contacto";
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