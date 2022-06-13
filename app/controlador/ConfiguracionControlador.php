<?php

require_once "../modelo/ConfiguracionModel.php";
class ConfiguracionControlador
{
    //metodos de la tabla regional
	public function ListarRegional()
    {
	  	 $respuesta = Configuracion::ListarRegional();
         return $respuesta;
	}
    public function GuardarRegional($nombre_regional)
    {
	  	 $respuesta = Configuracion::GuardarRegional($nombre_regional);
         return $respuesta;
	}
    public function ConsultarRegional($id)
    {
	  	 $respuesta = Configuracion::ConsultarRegional($id);
         return $respuesta;
	}
    public function ActualizarRegional($id,$nombre_regionale)
    {
	  	 $respuesta = Configuracion::ActualizarRegional($id, $nombre_regionale);
         return $respuesta;
	}
    public function EliminarRegional($id)
    {
	  	 $respuesta = Configuracion::EliminarRegional($id);
         return $respuesta;
	}
	//metodos de la tabla centro
    public function ListarCentro()
    {
	  	 $respuesta = Configuracion::ListarCentro();
         return $respuesta;
	}
    public function GuardarCentro($datos)
    {
	  	 $respuesta = Configuracion::GuardarCentro($datos);
         return $respuesta;
	}
    public function ConsultarCentro($id)
    {
	  	 $respuesta = Configuracion::ConsultarCentro($id);
         return $respuesta;
	}



}
if(isset($_POST["opcion"]))
{
    //opciones de la tabla regional
	if($_POST["opcion"]=="ListarRegional")
	{
		$respuesta = new ConfiguracionControlador();
		$respuesta =$respuesta -> ListarRegional();
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}
    else
    {
        if($_POST["opcion"]=="GuardarRegional")
	    {
            $nombre_regional = (isset($_POST['nombre_regional'])) ? $_POST['nombre_regional'] : null;
		    $respuesta = new ConfiguracionControlador();
		    $respuesta =$respuesta -> GuardarRegional($nombre_regional);
            if($respuesta)
            {
               echo 1;
            }
            else
            {
                echo 2;
            }
	    }
        else
        {
            if($_POST["opcion"]=="ConsultarRegional")
            {
                $id = (isset($_POST['id_regional'])) ? $_POST['id_regional'] : null;
                $respuesta = new ConfiguracionControlador();
                $respuesta =$respuesta -> ConsultarRegional($id);
                echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
            }
            else
            {
                if($_POST["opcion"]=="ActualizarRegional")
                {
                    $id = (isset($_POST['id_regional'])) ? $_POST['id_regional'] : null;
                    $nombre_regionale = (isset($_POST['nombre_regionale'])) ? $_POST['nombre_regionale'] : null;
                    $respuesta = new ConfiguracionControlador();
                    $respuesta =$respuesta -> ActualizarRegional($id,$nombre_regionale);
                    if($respuesta)
                    {
                        echo 1;
                    }
                    else
                    {
                        echo 2;
                    }
                }
                else
                {
                    if($_POST["opcion"]=="EliminarRegional")
                    {
                        $id = (isset($_POST['id_regional'])) ? $_POST['id_regional'] : null;
                        $respuesta = new ConfiguracionControlador();
                        $respuesta =$respuesta -> EliminarRegional($id);
                        if($respuesta)
                        {
                            echo 1;
                        }
                        else
                        {
                            echo 2;
                        }
                    }
                    //opciones de la tabla centro
                    else
                    {
                        if($_POST["opcion"]=="ListarCentro")
                        {
                            $respuesta = new ConfiguracionControlador();
                            $respuesta =$respuesta -> ListarCentro();
                            echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
                        }
                        else
                        {
                            if($_POST["opcion"]=="GuardarCentro")
                            {
                                $regional = (isset($_POST['regional'])) ? $_POST['regional'] : null;
                                $nombre_centro = (isset($_POST['nombre_centro'])) ? $_POST['nombre_centro'] : null;
                                $telefono_centro = (isset($_POST['telefono_centro'])) ? $_POST['telefono_centro'] : null;
                                $subdirector= (isset($_POST['subdirector'])) ? $_POST['subdirector'] : null;
                                $datos=[
                                    'regional'=>$regional,
                                    'nombre_centro'=>$nombre_centro,
                                    'telefono_centro'=>$telefono_centro,
                                    'subdirector'=>$subdirector
                                ];
                                $respuesta = new ConfiguracionControlador();
                                $respuesta =$respuesta -> GuardarCentro($datos);
                                if($respuesta)
                                {
                                    echo 1;
                                }
                                else
                                {
                                    echo 2;
                                }
                            }
                            else
                            {
                                if($_POST["opcion"]=="ConsultarCentro")
                                {
                                    $id = (isset($_POST['id_centro'])) ? $_POST['id_centro'] : null;
                                    $respuesta = new ConfiguracionControlador();
                                    $respuesta =$respuesta -> ConsultarCentro($id);
                                    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
                                }
                            }
                        }
                    }
                }
            }
        }
    }
	
}





   
?> 
