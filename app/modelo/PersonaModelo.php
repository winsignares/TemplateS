<?php

require_once "conexion.php";

Class PersonaModelo{
    static public function ListarPersona($cargo)
    {
        $x=Conexion::conectar()->prepare("SELECT P.tbl_persona_ID as id_persona, P.tbl_persona_NUMDOCUMENTO as cedula, 
        P.tbl_persona_NOMBRES as nombres, P.tbl_persona_PRIMERAPELLIDO as primer_apellido,
        P.tbl_persona_SEGUNDOAPELLIDO as segundo_apellido, P.tbl_persona_TELEFONO as telefono FROM tbl_persona as P WHERE tbl_cargo_tbl_cargo_ID=:cargo");
         $x->bindParam(":cargo", $cargo, PDO::PARAM_INT);
        $x->execute();
       return $x->fetchAll(PDO::FETCH_ASSOC);
    }
    static public function GuardarPersona($datos)
    {
        $y=Conexion::conectar()->prepare("SELECT COUNT(*) FROM  tbl_persona WHERE tbl_persona_NUMDOCUMENTO=:cedula");
        $y->bindParam(":cedula", $datos['cedula'], PDO::PARAM_INT);
        $y->execute();
        $n = $y->fetchColumn();
        
        if($n>0)
        {
          return false;
        }
        else
        {
            $x=Conexion::conectar()->prepare("INSERT INTO tbl_persona (tbl_persona_ID, tbl_persona_NUMDOCUMENTO, tbl_persona_NOMBRES, tbl_persona_PRIMERAPELLIDO, tbl_persona_SEGUNDOAPELLIDO, 
        tbl_persona_FECHANAC, tbl_persona_TELEFONO, tbl_persona_CORREO, tbl_cargo_tbl_cargo_ID, tbl_persona_DIRECCION, tipo_contrato, tbl_tipodocumento_tbl_tipodocumento_ID, 
        tbl_persona_ESTADO,tbl_persona_imagen,tbl_persona_PASSWORD)  VALUES (NULL, :cedula, :nombres, :primer_apellido, :segundo_apellido, :fechaNac, :telefono, :correo, :cargo, 
        :direccion, :contrato, :tipo_documento, 1,'',:password)");
         $x->bindParam(":cedula", $datos['cedula'], PDO::PARAM_INT);
         $x->bindParam(":nombres", $datos['nombres'], PDO::PARAM_STR);
         $x->bindParam(":primer_apellido", $datos['primer_apellido'], PDO::PARAM_STR);
         $x->bindParam(":segundo_apellido", $datos['segundo_apellido'], PDO::PARAM_STR);
         $x->bindParam(":fechaNac", $datos['fechaNac'], PDO::PARAM_STR);
         $x->bindParam(":telefono", $datos['telefono'], PDO::PARAM_STR);
         $x->bindParam(":correo", $datos['correo'], PDO::PARAM_STR);
         $x->bindParam(":cargo", $datos['cargo'], PDO::PARAM_INT);
         $x->bindParam(":direccion", $datos['direccion'], PDO::PARAM_STR);
         $x->bindParam(":contrato", $datos['contrato'], PDO::PARAM_STR);
         $x->bindParam(":tipo_documento", $datos['tipo_documento'], PDO::PARAM_STR);
         $x->bindParam(":password", $datos['password'], PDO::PARAM_STR);
         if($x->execute()){ return true; }else{ return false;}

        }


        
    }

    static public function ConsultarPersona($cedula)
    {
        $x=Conexion::conectar()->prepare("SELECT  P.tbl_persona_ID as id_persona, P.tbl_persona_NOMBRES as nombres,
         P.tbl_persona_PRIMERAPELLIDO as primer_apellido, P.tbl_persona_SEGUNDOAPELLIDO as segundo_apellido,
         P.tbl_persona_TELEFONO as telefono, P.tbl_persona_FECHANAC as fechaNac, P.tbl_persona_CORREO as correo, 
         P.tbl_persona_DIRECCION as direccion, P.tbl_persona_PASSWORD as password FROM tbl_persona as P
          WHERE tbl_persona_NUMDOCUMENTO=:cedula");
         $x->bindParam(":cedula", $cedula, PDO::PARAM_STR);
         $x->execute();
         return $x->fetch(PDO::FETCH_ASSOC);
    }

    static public function ActualizarPersona($datos)
    {
        $x=Conexion::conectar()->prepare("UPDATE tbl_persona SET tbl_persona_NOMBRES = :nombres, 
        tbl_persona_PRIMERAPELLIDO = :primer_apellido, tbl_persona_SEGUNDOAPELLIDO = :segundo_apellido, tbl_persona_DIRECCION = :direccion,
        tbl_persona_TELEFONO = :telefono, tbl_persona_CORREO = :correo, tbl_persona_NUMDOCUMENTO= :cedula, tbl_persona_PASSWORD=:password,
        tbl_persona_FECHANAC=:fechaNac  WHERE tbl_persona_ID = :id_persona ");
         $x->bindParam(":cedula", $datos['cedulaE'], PDO::PARAM_INT);
         $x->bindParam(":nombres", $datos['nombresE'], PDO::PARAM_STR);
         $x->bindParam(":primer_apellido", $datos['primer_apellidoE'], PDO::PARAM_STR);
         $x->bindParam(":segundo_apellido", $datos['segundo_apellidoE'], PDO::PARAM_STR);
         $x->bindParam(":fechaNac", $datos['fechaNacE'], PDO::PARAM_STR);
         $x->bindParam(":telefono", $datos['telefonoE'], PDO::PARAM_STR);
         $x->bindParam(":correo", $datos['correoE'], PDO::PARAM_STR);
         $x->bindParam(":direccion", $datos['direccionE'], PDO::PARAM_STR);
         $x->bindParam(":password", $datos['passwordE'], PDO::PARAM_STR);
         $x->bindParam(":id_persona", $datos['id_persona'], PDO::PARAM_STR);
         if($x->execute()){ return true; }else{ return false;}
    }

    static public function EliminarPersona($id)
    {
        $x=Conexion::conectar()->prepare("DELETE FROM tbl_persona WHERE tbl_persona_ID=:id_persona ");
        $x->bindParam(":id_persona", $id, PDO::PARAM_INT);
        if($x->execute()){ return true; }else{ return false;}
    }

    

   
}
?>


