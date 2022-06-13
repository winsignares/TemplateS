<?php
// llamamos al modelo 
require_once "../modelo/FidelizacionModelo.php";

// creamos la clase del controlador de fidelizacion
class FidelizacionControlador
{
	//  metodo para listar los aprendices
	public function ListarFidelizacion()
    {
		    //llamamos al metodo que esta en el modelo y el cual nos va a traer los datos de los aprendices en un array
	  		$respuesta = FidelizacionModelo::ListarFidelizacion();
            return $respuesta;
	}
	//metodo para traer los datos de un solo aprendiz 
	public function ListarFidelizacionAprendiz($numero_documento)
    {
	  		$respuesta = FidelizacionModelo::ListarFidelizacionAprendiz($numero_documento);
            return $respuesta;
	}
	

}

//capturamos la opcion a realizar mandada desde ajax
if(isset($_POST["opcion"]))
{
	if($_POST["opcion"]=="ListarFidelizacion")
	{
		//creamos un objeto de la clase fidelizacion y llamamos al metodo ListarFidelizacion que es el que nos trae todos los datos de los aprendices
		$respuesta = new FidelizacionControlador();
		$respuesta =$respuesta -> ListarFidelizacion();
		//enviamos los datos en formato json al ajax 
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}
	else
	{
		if($_POST["opcion"]=="ListarFidelizacionAprendiz")
	    {
		   //capturamos el numero de documento del aprendiz enviando por ajax
		   $numero_documento = (isset($_POST['numero_documento'])) ? $_POST['numero_documento'] : null;
           //creamos un objeto de la clase fidelizacion y llamamos al metodo ListarFidelizacionAprendiz  que es el que nos trae  los datos de un solo aprendiz
	   	   $respuesta = new FidelizacionControlador();
		   $respuesta =$respuesta -> ListarFidelizacionAprendiz($numero_documento);
		   //enviamos los datos en formato json al ajax
           echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
		}
	}

}

   
?> 
