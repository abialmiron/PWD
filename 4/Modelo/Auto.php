<?php 
    class Auto{
        private $patente;
        private $marca;
        private $modelo;
        private $objDuenio;
        private $msjeOperacion;

        public function __construct(){
            $this->patente = "";
            $this->marca = "";
            $this->modelo = "";
            $this->objDuenio = new Persona();
            $this->msjeOperacion = "";
        }

        public function cargar ($patente, $marca, $modelo, $duenio){
            $this->setPatente($patente);
            $this->setMarca($marca);
            $this->setModelo($modelo);
            $this->setObjDuenio($duenio);
        }

        // Metodos GET
        public function getPatente(){
            return $this->patente;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function getObjDuenio(){
            return $this->objDuenio;
        }

        public function getMsjeOperacion(){
            return $this->msjeOperacion;
        }

        // Metodos SET
        public function setPatente($patente){
            $this->patente = $patente;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function setObjDuenio($objDuenio){
            $this->objDuenio = $objDuenio;
        }

        public function setMsjeOperacion($msjeOperacion){
            $this->msjeOperacion = $msjeOperacion;
        }

        public function buscar(){
            $resp = false;
            $base = new BaseDatos();
            $sql = "SELECT * FROM auto WHERE Patente = '" . $this->getPatente() . "'";
            if ($base->Iniciar()){
                $res = $base->Ejecutar($sql);
                if ($res > -1){
                    if ($res > 0){
                        $row = $base->Registro();
                        $objDuenio = new Persona();
                        $objDuenio->setNroDni($row['DniDuenio']);
                        $objDuenio->buscar();
                        $this->cargar($row['Patente'], $row['Marca'], $row['Modelo'], $objDuenio);
                        $resp = true;
                    }
                }
            } else {
                $this->setMsjeOperacion("auto->listar: " . $base->getError());
            }
            return $resp;
        }

        public function listar ($condicion = ""){
            $array = [];
            $base = new BaseDatos();
            $sql = "SELECT * FROM auto";
            if($condicion != ""){
                $sql .= 'WHERE ' . $condicion;
            }

            $res = $base->ejecutar($sql);
            if ($res >-1){
                if($res > 0){
                    while ($row = $base->Registro()){
                        $obj = new Auto();
                        $objDuenio = new Persona();
                        $objDuenio->setNroDni($row['DniDuenio']);
                        $obj->cargar($row['Patente'], $row['Marca'], $row['Modelo'], $objDuenio);
                        $array [] = $obj;
                    }
                }
            } else {
                $this->setMsjeOperacion("auto->listar: " . $base->getError());
            }
            return $array;
        }

        public function insertar (){
            $resp = false;
            $base = new BaseDatos();
            if ($this->getObjDuenio() != null){
                $sql = "INSERT INTO auto(Patente, Marca, Modelo, DniDuenio) VALUES ('" . $this->getPatente() . "', '" . $this->getMarca() . "' , '" . $this->getModelo() . "', '" . $this->getObjDuenio()->getNroDni() . "')";
                if($base->Iniciar()){
                    if ($patente = $base->Ejecutar($sql)){
                        $this->setPatente($patente);
                        $resp = true;
                    } else {
                        $this->setMsjeOperacion("auto->insertar: " . $base->getError());
                    }
                } else {
                    $this->setMsjeOperacion("auto->insertar: " . $base->getError());
                }
            }
            return $resp;
        }

        public function modificar (){
            $resp = false;
            $base = new BaseDatos();
            $sql = "UPDATE auto SET Marca = '" . $this->getMarca() . "',Modelo='" . $this->getModelo() . "',
            DniDuenio='" . $this->getObjDuenio()->getNroDni() . "' WHERE Patente='" . $this->getPatente() . "'";
            if ($base->Iniciar()){
                if($base->Ejecutar($sql)){
                    $resp = true;
                } else {
                    $this->setMsjeOperacion("auto->modificar: " . $base->getError());
                }
            } else {
                $this->setMsjeOperacion("auto->modificar: " . $base->getError());
            }
            return $resp;
        }

        public function eliminar(){
            $resp = false;
            $base = new BaseDatos();
            $sql = "DELETE FROM auto WHERE Patente= " . $this->getPatente();
            if ($base->Iniciar()){
                if($base->Ejecutar($sql)){
                    $resp = true;
                } else {
                    $this->setMsjeOperacion("auto-eliminar: " . $base->getError());
                }
            } else {
                $this->setMsjeOperacion("auto->eliminar: " . $base->getError());
            }
            return $resp;
        }
    }
?>