<?php

require_once "conexion.php";

Class ModeloUsuarios{
    static public function ConsultarUsuario($valor)
    {
        $x=Conexion::conectar()->prepare("SELECT P.tbl_persona_ID as id_persona, P.tbl_persona_NUMDOCUMENTO as numero_documento,  P.tbl_persona_NOMBRES as nombres, 
        P.tbl_persona_PRIMERAPELLIDO as primer_apellido, P.tbl_persona_SEGUNDOAPELLIDO as segundo_apellido, P.tbl_cargo_tbl_cargo_ID, P.tbl_persona_DIRECCION as direccion,
        P.tbl_persona_TELEFONO as telefono, P.tbl_persona_CORREO as correo, C.tbl_cargo_TIPO as cargo, 
        P.tbl_persona_password as password FROM tbl_persona as P inner join tbl_cargo as C on P.tbl_cargo_tbl_cargo_ID=C.tbl_cargo_ID WHERE P.tbl_persona_NUMDOCUMENTO=:tbl_persona_NUMDOCUMENTO");
            
        $x->bindParam(":tbl_persona_NUMDOCUMENTO", $valor, PDO::PARAM_STR);
        $x->execute();
       return $x->fetch();
    }

    static public function ActualizarDatos($datos)
    {
        $x=Conexion::conectar()->prepare("UPDATE tbl_persona SET tbl_persona_NOMBRES = :nombres, tbl_persona_PRIMERAPELLIDO = :primer_apellido, tbl_persona_SEGUNDOAPELLIDO = :segundo_apellido, tbl_persona_DIRECCION = :direccion, tbl_persona_TELEFONO = :telefono, tbl_persona_CORREO = :correo WHERE tbl_persona_ID = :id_usuario ");
        $x->bindParam(":id_usuario", $datos['id_usuario'], PDO::PARAM_INT);
        $x->bindParam(":nombres", $datos['nombres'], PDO::PARAM_STR);
        $x->bindParam(":primer_apellido", $datos['primer_apellido'], PDO::PARAM_STR);
        $x->bindParam(":segundo_apellido", $datos['segundo_apellido'], PDO::PARAM_STR);
        $x->bindParam(":direccion", $datos['direccion'], PDO::PARAM_STR);
        $x->bindParam(":telefono", $datos['telefono'], PDO::PARAM_STR);
        $x->bindParam(":correo", $datos['correo'], PDO::PARAM_STR);
        if($x->execute()){ return true; }else{ return false;}
        
    }

    static public function DatosUsuario($id)
    {
        $x=Conexion::conectar()->prepare("SELECT  P.tbl_persona_NUMDOCUMENTO as cedula,  P.tbl_persona_NOMBRES as nombres, 
        P.tbl_persona_PRIMERAPELLIDO as primer_apellido, P.tbl_persona_SEGUNDOAPELLIDO as segundo_apellido, P.tbl_cargo_tbl_cargo_ID, 
        P.tbl_persona_DIRECCION as direccion, P.tbl_persona_TELEFONO as telefono, P.tbl_persona_CORREO as correo, C.tbl_cargo_TIPO as cargo, 
        P.tbl_persona_password as password FROM tbl_persona as P inner join tbl_cargo as C on P.tbl_cargo_tbl_cargo_ID=C.tbl_cargo_ID 
        WHERE P.tbl_persona_ID=:id_usuario");
        $x->bindParam(":id_usuario", $id, PDO::PARAM_INT);
        $x->execute();
        return $x->fetch();
        
    }
}
?>


