<?php
Class ABMPersona{

     /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return object
     * Devuelve el obj de persona ya cargado para insertar.
     */
    private function cargarObjeto($param){
        $obj = null;
           
        if( array_key_exists('nroDNI',$param) && array_key_exists('nombre',$param) && array_key_exists('apellido',$param) && array_key_exists('fechaNac',$param) && array_key_exists('telefono',$param) && array_key_exists('domicilio',$param)){
            $obj = new Persona();
            $obj->cargar($param['nroDNI'], $param['nombre'],$param['apellido'],$param['fechaNac'],$param['telefono'],$param['domicilio']); 
        }
        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con el ID del OBJ compra.
     * Se utiliza para cargar un OBJ a partir de un ID.
     * @param array $param
     * @return object
     */
    private function cargarObjetoSoloID($param){
        $obj = null;
        if (isset($param['nroDNI'])) {
            $obj = new Persona();
            $obj->setId($param['nroDNI']);
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
        if (isset($param['nroDNI'])){
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
        $objPersona = new Persona();
        $objPersona = $this->cargarObjeto($param);

        if ($objPersona!=null && $objPersona->insertar()){
            $resp = true;
        }
        
        return $resp;
    }

    /**
     * Realiza la eliminación de una compra.
     * @param array $param
     * @return boolean
     */
    
     public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $objPersona = $this->cargarObjetoSoloID($param);
            if ($objPersona !=null && $objPersona->eliminar()){  
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
            $objPersona = $this->cargarObjetoSoloID($param);
            if($objPersona !=null && $objPersona->modificar()){
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
        if ($param<>NULL){
            if  (isset($param['nroDNI']))
            $where.=" and NroDNI='".$param['nroDNI']."'";
            if  (isset($param['nombre']))
            $where.=" and Nombre ='".$param['nombre']."'";
            if  (isset($param['apellido']))
            $where.=" and Apellido ='".$param['apellido']."'";
            if  (isset($param['fechaNac']))
            $where.=" and fechaNac ='".$param['fechaNac']."'";
            if  (isset($param['telefono']))
            $where.=" and Telefono ='".$param['telefono']."'";
            if  (isset($param['domicilio']))
            $where.=" and Domicilio ='".$param['domicilio']."'";
        }
        
        $arreglo = Persona::listar($where);
        
        return $arreglo;
    }
}
?>