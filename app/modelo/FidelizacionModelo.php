<?php
// llamamos al modelo conexion
require_once "conexion.php";

Class FidelizacionModelo{
    // metodo para traer todos los datos de la tabla de aprendices que esta en la base de datos securitas y se llama tbl_personal
    static public function ListarFidelizacion()
    {
        $x=Conexion::conectar2()->prepare("SELECT A.tbl_personal_ID as id_aprendiz ,A.tbl_personal_DOCUMENTO as numero_documento,  
        A.tbl_personal_NOMBRES as nombres, A.tbl_personal_APELLIDOS as apellidos, A.tbl_personal_CELULAR as celular, A.tbl_personal_DIRECCION as direccion,
        A.tbl_personal_CORREO as correo, F.tbl_ficha_CODIGO as ficha, P.tbl_programa_NOMBRE as nombre_programa, T.tbl_tipodocumento_ABREVIATURA as tipo_documento 
        FROM tbl_personal as A  INNER JOIN tbl_ficha as F on A.tbl_ficha_ID=F.tbl_ficha_ID  INNER JOIN tbl_programa as P on A.tbl_programa_ID=P.tbl_programa_ID INNER JOIN 
        tbl_tipodocumento as T on A.tbl_tipodocumento_ID= T.tbl_tipodocumento_ID");
        $x->execute();

        return $x->fetchAll(PDO::FETCH_ASSOC);
    }
    // metodo para traer los datos de una persona por medio de la cedula
    static public function ListarFidelizacionAprendiz($numero_documento)
    {
        $x=Conexion::conectar2()->prepare("SELECT A.tbl_personal_ID as id_aprendiz ,A.tbl_personal_DOCUMENTO as numero_documento,  
        A.tbl_personal_NOMBRES as nombres, A.tbl_personal_APELLIDOS as apellidos, A.tbl_personal_CELULAR as celular, A.tbl_personal_DIRECCION as direccion,
        A.tbl_personal_CORREO as correo, F.tbl_ficha_CODIGO as ficha, P.tbl_programa_NOMBRE as nombre_programa, T.tbl_tipodocumento_ABREVIATURA as tipo_documento 
        FROM tbl_personal as A  INNER JOIN tbl_ficha as F on A.tbl_ficha_ID=F.tbl_ficha_ID  INNER JOIN tbl_programa as P on A.tbl_programa_ID=P.tbl_programa_ID INNER JOIN 
        tbl_tipodocumento as T on A.tbl_tipodocumento_ID= T.tbl_tipodocumento_ID WHERE A.tbl_personal_DOCUMENTO=:numero_documento");
         $x->bindParam(":numero_documento", $numero_documento, PDO::PARAM_INT);
        $x->execute();
        return $x->fetch(PDO::FETCH_ASSOC);
    }

    
   

   
}
?>


