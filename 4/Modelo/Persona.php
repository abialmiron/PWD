<?php 
    class Persona{
        private $nroDni;
        private $apellido;
        private $nombre;
        private $fechaNacimiento;
        private $tel;
        private $domicilio;
        private $msjeOperacion;

        public function __construct(){
            $this->nroDni = "";
            $this->apellido = "";
            $this->nombre = "";
            $this->fechaNacimiento = "";
            $this->tel = "";
            $this->domicilio = "";
            $this->msjeOperacion = "";
        }

        public function cargar ($nroDni, $apellido, $nombre, $fechaNacimiento, $tel, $domicilio){
            $this->setNroDni($nroDni);
            $this->setApellido($apellido);
            $this->setNombre($nombre);
            $this->setFechaNacimiento($fechaNacimiento);
            $this->setTel($tel);
            $this->setDomicilio($domicilio);
        }

        public function setId ($nroDni){
            $this->setNroDni($nroDni);
            $this->apellido = "";
            $this->nombre = "";
            $this->fechaNacimiento = "";
            $this->tel = "";
            $this->domicilio = "";
            $this->msjeOperacion = "";
        }

        // Metodos GET
        public function getNroDni(){
            return $this->nroDni;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getFechaNacimiento(){
            return $this->fechaNacimiento;
        }

        public function getTel(){
            return $this->tel;
        }

        public function getDomicilio(){
            return $this->domicilio;
        }

        public function getMsjeOperacion(){
            return $this->msjeOperacion;
        }

        // Metodos SET
        public function setNroDni($nroDni){
            $this->nroDni = $nroDni;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setFechaNacimiento($fechaNacimiento){
            $this->fechaNacimiento = $fechaNacimiento;
        }

        public function setTel($tel){
            $this->tel = $tel;
        }

        public function setDomicilio($domicilio){
            $this->domicilio = $domicilio;
        }

        public function setMsjeOperacion($msjeOperacion){
            $this->msjeOperacion = $msjeOperacion;
        }

        public function buscar(){
            $resp = false;
            $base = new BaseDatos();
            $nroDni = $this->getNroDni();
            $sql = "SELECT * FROM persona WHERE NroDni = '$nroDni'";
            if ($base->Iniciar()){
                $res = $base->Ejecutar($sql);
                if ($res > -1){
                    if ($res >0){
                        $row = $base->Registro();
                        $this->cargar($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                        $resp = true;
                    }
                }
            } else {
                $this->setMsjeOperacion("persona->listar: " . $base->getError());
            }
            return $resp;
        }

        public static function  listar($condicion = ""){
            $arreglo = [];
            $base = new BaseDatos();
            $sql = "SELECT * FROM persona";
            if ($condicion != ""){
                $sql .= 'WHERE' . $condicion;
            }
            $res = $base->Ejecutar($sql);

            if($res > -1){
                if ($res > 0){
                    while ($row = $base->registro()){
                        $objDuenio = new Persona;
                        $objDuenio->cargar($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                        $arreglo [] = $objDuenio;
                    }
                }
            } else {
                $this->setMsjeOperacion("persona->listar " . $base->getError());
            }
            return $arreglo;
        }

        public function insertar(){
            $resp = false;
            $base = new baseDatos();
            $sql = "INSERT INTO persona (NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio) values ('"
                . $this->getNroDni() . "' , '"
                . $this->getApellido() . "' , '"
                . $this->getNombre(). "' , '"
                . $this->getFechaNacimiento() . "' , '"
                . $this->getTel() . "' , '"
                . $this->getDomicilio() 
                . "')";
            if ($base->Iniciar()){
                if ($id = $base->Ejecutar($sql)){
                    $this->setNroDni($id);
                    $resp = true;
                } else {
                    $this->setMsjeOperacion("persona->insertar " . $base->getError());
                }
            } else {
                $this->setMsjeOperacion("persona->insertar " . $base->getError());
            }
            return $resp;
        }

        public function modificar (){
            $resp = false;
            $base = new BaseDatos();
            $sql = "UPDATE persona SET  Apellido ='" . $this->getApellido() . "', Nombre = '" . $this->getNombre() . "', fechaNac = '" . $this->getFechaNacimiento() ."', Telefono = '" . $this->getTel() . "', Domicilio = '" . $this->getDomicilio() ."' WHERE NroDni = ". $this->getNroDni(); 
            if ($base->Iniciar()){
                if ($base->Ejecutar($sql)){
                    $resp = true;
                } else {
                    $this->setMsjeOperacion("persona->modificar: " . $base->getError());
                }
            } else {
                $this->setMsjeOperacion("persona->modificar: " . $base->getError());
            }
            return $resp;
        }

        public function eliminar(){
            $resp = false;
            $base = new BaseDatos();
            $sql = "DELETE FROM person WHERE NroDni =" . $this->getNroDni();
            if ($base->Iniciar()){
                if($base->Ejecutar($sql)){
                    $resp = true;
                } else {
                    $this->setMsjeOperacion("persona->eliminar: " . $base->getError());
                }
            } else {
                $this->setMsjeOperacion("persona->eliminar: " . $base->getError());
            }
            return $resp;
        }
    }
?>