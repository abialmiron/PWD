<?php
Class ABMAuto{

     /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return object
     * Devuelve el obj de persona ya cargado para insertar.
     */
    private function cargarObjeto($param){
        $obj = null;
           
        if( array_key_exists('patente',$param) && array_key_exists('marca',$param) && array_key_exists('modelo',$param) && array_key_exists('nroDNI',$param)){
            $obj = new Auto();
            $objPersona = new ABMPersona();
            $this->cargarObjetoSoloID($param);
            $obj->cargar($param['patente'], $param['marca'],$param['modelo'],$objPersona); 
        }
        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con el ID del OBJ auto.
     * Se utiliza para cargar un OBJ a partir de un ID.
     * @param array $param
     * @return object
     */
    private function cargarObjetoSoloID($param){
        $obj = null;
        if (isset($param['patente'])) {
            $obj = new Auto();
            $obj->setId($param['patente']);
            $obj->buscar();
        }
        return $obj;
    }

     /**
     * Corrobora que dentro del arreglo asociativo se encuentren los campos claves
     * @param array $param
     * @return boolean
     */
    
     private function seteadosCamposClaves($param){
        
        $resp = false;
        if (isset($param['patente'])){
            $resp = true;
        } 
        return $resp;
    }

    /**
     * Realizamos la inserción de un registro
     * @param array $param
     * @return boolean 
     */
    public function alta($param){
        
        $resp = false;
        $objAuto = new Auto();
        $objAuto = $this->cargarObjeto($param);

        if ($objAuto!=null && $objAuto->insertar()){
            $resp = true;
        }
        
        return $resp;
    }

    /**
     * Realiza la eliminación de un auto.
     * @param array $param
     * @return boolean
     */
    
     public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $objAuto = $this->cargarObjetoSoloID($param);
            if ($objAuto !=null && $objAuto->eliminar()){  
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * Realiza la modificación de un objeto.
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $objAuto = $this->cargarObjetoSoloID($param);
            if($objAuto !=null && $objAuto->modificar()){
                $resp = true;
                
            }
        }
        return $resp;
    }

      /**
     * Realiza la busqueda de un objeto
     * @param array $param
     * @return boolean
     */
    
    public function buscar($param){
        $where = " true ";
        if ($param != NULL){
            if  (isset($param['patente']))
            $where.=" and Patente='".$param['patente']."'";
            if  (isset($param['marca']))
            $where.=" and Marca ='".$param['marca']."'";
            if  (isset($param['modelo']))
            $where.=" and Modelo ='".$param['modelo']."'";
            if  (isset($param['nroDNI']))
            $where.=" and DniDuenio ='".$param['nroDNI']."'";
        }
        
        $arreglo = Auto::listar($where);
        
        return $arreglo;
    }
}
?>