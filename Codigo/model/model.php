<?php

class Modelo{
    private $Modelo;
    private $db;
  //CONSTRUCTOR
    public function __construct(){
        $this->Modelo = array();
        shell_exec("ssh -p DeuS1177s ssh -o StrictHostKeyChecking=no -f -L 3306:127.0.0.1:3306 root@157.245.222.210");
        $this->db=new PDO('mysql:host=127.0.0.1, 3306; dbname=DNE', "root","root");

    }
//MUESTRA DE INFORMACION
    public function mostrar($tabla,$condicion = "", $orden = "", $columna=""){
        //CONDICION PARA MOESTRAR SOOLO UNO O MAS DATOS
        if($condicion != ""){
            $consul_uniq="select * from ".$tabla." where id_vacante = ".$condicion.";";
            $resul_uniq = $this->db->query($consul_uniq);
            while($fila = $resul_uniq->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->vacante[]=$fila;
            }

            return $this->vacante;

        }elseif($orden != "" && $columna != ""){
            $general_consul_O = "select * from ".$tabla." ORDER BY ".$columna." ".$orden.";";
            $resu_O = $this->db->query($general_consul_O);
            $this->vacantes_O = $resu_O->FETCHALL(PDO::FETCH_ASSOC);

            return $this->vacantes_O;
        }else{
            $general_consul = "select * from ".$tabla.";";
            $resu = $this->db->query($general_consul);
            $this->vacantes = $resu->FETCHALL(PDO::FETCH_ASSOC);

            return $this->vacantes;
        }

        }
//MUESTRA DE LA INFORMACION DE CONTACTO SEGUN LA ID DE LA VACANTE
    public function mostrar_contacto($tabla, $id_contacto){

        $consul_contact="select * from ".$tabla." where id_contacto = ".$id_contacto.";";
        $resul_contact = $this->db->query($consul_contact);
        while($fila_contact = $resul_contact->FETCHALL(PDO::FETCH_ASSOC)) {
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
