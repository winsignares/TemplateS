<?php

require_once "conexion.php";

Class Configuracion{

    // consultas de regional
    static public function ListarRegional()
    {
        $x=Conexion::conectar()->prepare("SELECT R.tbl_regional_ID as id_regional, R.tbl_regional_NOMBRE as nombre_regional,
         R.tbl_regional_ESTADO as estado_regional FROM  tbl_regional as R ");
        $x->execute();
        return $x->fetchAll(PDO::FETCH_ASSOC);
    }
    static public function GuardarRegional($nombre_regional)
    {
        $y=Conexion::conectar()->prepare("SELECT COUNT(*) FROM  tbl_regional WHERE tbl_regional_NOMBRE=:nombre");
        $y->bindParam(":nombre", $nombre_regional, PDO::PARAM_STR);
        $y->execute();
        $n = $y->fetchColumn();
        
        if($n>0)
        {
          return false;
        }
        else
        {
            $x=Conexion::conectar()->prepare("INSERT INTO tbl_regional (tbl_regional_ID, tbl_regional_NOMBRE,tbl_regional_ESTADO) 
             VALUES (NULL, :nombre,1)");
             $x->bindParam(":nombre", $nombre_regional, PDO::PARAM_STR);
             if($x->execute()){ return true; }else{ return false;}
        }
    }

    static public function ConsultarRegional($id)
    {
        $x=Conexion::conectar()->prepare("SELECT R.tbl_regional_NOMBRE as nombre_regional FROM tbl_regional as R WHERE tbl_regional_ID=:id");
         $x->bindParam(":id", $id, PDO::PARAM_INT);
         $x->execute();
         return $x->fetch(PDO::FETCH_ASSOC);
    }

    static public function ActualizarRegional($id,$nombre_regionale)
    {
        $x=Conexion::conectar()->prepare("UPDATE tbl_regional SET tbl_regional_NOMBRE = :nombre  WHERE tbl_regional_ID = :id_regional ");
         $x->bindParam(":id_regional", $id, PDO::PARAM_INT);
         $x->bindParam(":nombre", $nombre_regionale, PDO::PARAM_STR);
         if($x->execute()){ return true; }else{ return false;}
    }

    static public function EliminarRegional($id)
    {
        $x=Conexion::conectar()->prepare("DELETE FROM tbl_regional WHERE tbl_regional_ID=:id_regional");
        $x->bindParam(":id_regional", $id, PDO::PARAM_INT);
        if($x->execute()){ return true; }else{ return false;}
    }
  //consulta de centro

    static public function ListarCentro()
    {
        $x=Conexion::conectar()->prepare("SELECT C.tbl_centro_ID as id_centro, C.tbl_centro_NOMBRE as nombre_centro, C.tbl_centro_TELEFONO as telefono_centro,
        C.tbl_centro_SUBDIRECTOR as subdirector, R.tbl_regional_NOMBRE as nombre_regional 
        FROM tbl_centro as C inner join tbl_regional as R on C.tbl_regional_tbl_regional_ID=R.tbl_regional_ID");
        $x->execute();
        return $x->fetchAll(PDO::FETCH_ASSOC);
    }

    static public function GuardarCentro($datos)
    {
       
            $x=Conexion::conectar()->prepare("INSERT INTO tbl_centro (tbl_centro_ID, tbl_centro_NOMBRE, tbl_centro_TELEFONO, tbl_centro_SUBDIRECTOR, tbl_regional_tbl_regional_ID) VALUES (null, :nombre_centro, :telefono_centro, :subdirector, :regional)");
             $x->bindParam(":nombre_centro", $datos['nombre_centro'], PDO::PARAM_STR);
             $x->bindParam(":telefono_centro", $datos['telefono_centro'], PDO::PARAM_STR);
             $x->bindParam(":subdirector", $datos['subdirector'], PDO::PARAM_STR);
             $x->bindParam(":regional", $datos['regional'], PDO::PARAM_INT);
             if($x->execute()){ return true; }else{ return false;}
        
    }

    static public function ConsultarCentro($id)
    {
         $x=Conexion::conectar()->prepare("SELECT C.tbl_centro_NOMBRE as nombre_centro, C.tbl_centro_TELEFONO as telefono_centro,
         C.tbl_centro_SUBDIRECTOR as subdirector, C.tbl_regional_tbl_regional_ID as regional FROM tbl_centro as C WHERE tbl_centro_ID=:id_centro");
         $x->bindParam(":id_centro", $id, PDO::PARAM_INT);
         $x->execute();
         return $x->fetch(PDO::FETCH_ASSOC);
    }
    

   
}
?>


