<?php
// llamamos al modelo 
require_once "../modelo/PersonaModelo.php";
// creamos clase persona que va a tener todos los metodos para los datos de la tabla persona en la cual estan los datos de instructores , administrador, bienestar y parametrizacion
class PersonaControlador
{
	//metodo para traer los datos de las personas dependiendo el cargo 
	public function ListarPersona($cargo)
    {
	  		$respuesta = PersonaModelo::ListarPersona($cargo);
         return $respuesta;
	}
    // metodo para guardar datos una persona
	public function GuardarPersona($datos)
    {
	  	 
		 $respuesta = PersonaModelo::GuardarPersona($datos);
         return $respuesta;
	}
	// metodo para consultar una persona por medio de la cedula
	public function ConsultarPersona($cedula)
    {
		 
		 $respuesta = PersonaModelo::ConsultarPersona($cedula);
		 return $respuesta;
	}
	//metodo para actualizar los datos de una persona
	public function ActualizarPersona($datos)
    {
		 
		 $respuesta = PersonaModelo::ActualizarPersona($datos);
		 return $respuesta;
	}
	// metodo para eliminar una persona
	public function EliminarPersona($id)
    {
		 
		 $respuesta = PersonaModelo::EliminarPersona($id);
		 return $respuesta;
	}




}
// recibimos la opcion y validamos si existe
if(isset($_POST["opcion"]))
{
	if($_POST["opcion"]=="ListarPersona")
	{
		//recibimos el cargo 
		$cargo = (isset($_POST['cargo'])) ? $_POST['cargo'] : null;
		// creamos un objeto de la clase persona controlador
		$respuesta = new PersonaControlador();
		//llamamos al metodo listarpersona de la clase persona controlador y le pasamos de parametro el cargo
		$respuesta =$respuesta -> ListarPersona($cargo);
		//obtenemos el array con los datos de las personas dependiendo al cargo enviando y hacemos un json para enviarlo al ajax
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}
	else
	{
		if($_POST["opcion"]=="GuardarPersona")
	    {
			// obtenenmos todos los datos para guardarlos 
			$cedula = (isset($_POST['cedula'])) ? $_POST['cedula'] : null;
			$nombres = (isset($_POST['nombres'])) ? $_POST['nombres'] : null;
			$primer_apellido = (isset($_POST['primer_apellido'])) ? $_POST['primer_apellido'] : null;
			$segundo_apellido = (isset($_POST['segundo_apellido'])) ? $_POST['segundo_apellido'] : null;
			$fechaNac = (isset($_POST['fechaNac'])) ? $_POST['fechaNac'] : null;
			$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : null;
			$correo = (isset($_POST['correo'])) ? $_POST['correo'] : null;
			$cargo =(isset($_POST['cargo'])) ? $_POST['cargo'] : null;;
			$direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : null;
			$contrato = (isset($_POST['contrato'])) ? $_POST['contrato'] : null;
			$tipo_documento ="CEDULA";
    		$contraseña = (isset($_POST['contraseña'])) ? $_POST['contraseña'] : null;
			// creamos un array que se llame datos y metemos todos los datos de la persona a guardar
			$datos=
			[
         		'cedula' => $cedula,
		 		'nombres' => $nombres,
		 		'primer_apellido' => $primer_apellido,
		 		'segundo_apellido' => $segundo_apellido,
		 		'fechaNac' => $fechaNac,
		 		'telefono' => $telefono,
		 		'correo' => $correo,
		 		'cargo' => $cargo,
		 		'direccion' => $direccion,
		 		'contrato' => $contrato,
		 		'tipo_documento' => $tipo_documento,
		 		'password' => $contraseña
			];
	         // creamos un objeto de la clase persona y llamamos al metodo guardar persona
			$objeto = new PersonaControlador();
			$objeto =$objeto -> GuardarPersona($datos);
			// si los datos se guardaron objeto va a ser verdadero y se va enviar un 1 al ajax sino se envia 2
       		if($objeto)
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
			
			if($_POST["opcion"]=="ConsultarPersona")
	        {
			   // optenemos la cedula de la persona y la consultamos mediante la cedula con el metodo consultar persona  
			   $cedula = (isset($_POST['cedula'])) ? $_POST['cedula'] : null;
			   $objeto = new PersonaControlador();
			   $objeto =$objeto ->ConsultarPersona($cedula);
			   // este consulta nos retorna un array que enviamos en formato json al ajax
			   echo json_encode($objeto, JSON_UNESCAPED_UNICODE);
       		}
			else
			{
				if($_POST["opcion"]=="ActualizarPersona")
	       		{
					// obtenemos todos los datos de la persona para actualizarlos 
					$cedula = (isset($_POST['cedulaE'])) ? $_POST['cedulaE'] : null;
					$nombres = (isset($_POST['nombresE'])) ? $_POST['nombresE'] : null;
					$primer_apellido = (isset($_POST['primer_apellidoE'])) ? $_POST['primer_apellidoE'] : null;
					$segundo_apellido = (isset($_POST['segundo_apellidoE'])) ? $_POST['segundo_apellidoE'] : null;
					$fechaNac = (isset($_POST['fechaNacE'])) ? $_POST['fechaNacE'] : null;
					$telefono = (isset($_POST['telefonoE'])) ? $_POST['telefonoE'] : null;
					$correo = (isset($_POST['correoE'])) ? $_POST['correoE'] : null;
					$direccion = (isset($_POST['direccionE'])) ? $_POST['direccionE'] : null;
					$contraseña = (isset($_POST['contraseñaE'])) ? $_POST['contraseñaE'] : null;
					$id_persona = (isset($_POST['id_persona'])) ? $_POST['id_persona'] : null;
					// guardamos todos los datos en el array llamado datos
					$datos=
					[
						 'cedulaE' => $cedula,
						 'nombresE' => $nombres,
						 'primer_apellidoE' => $primer_apellido,
						 'segundo_apellidoE' => $segundo_apellido,
						 'fechaNacE' => $fechaNac,
						 'telefonoE' => $telefono,
						 'correoE' => $correo,
						 'direccionE' => $direccion,
						 'id_persona' => $id_persona,
						 'passwordE' => $contraseña
					];
					// enviamos el array al metodo actualizar persona
					$objeto = new PersonaControlador();
					$objeto =$objeto -> ActualizarPersona($datos);
					// si los datos se actualizaron enviamos 1 sino enviamos 2
       				if($objeto)
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
					if($_POST["opcion"]=="EliminarPersona")
					{
						// obtenemos el id para enviarlo al metodo que eliminara los datos de la persona con ese id
                        $id_persona = (isset($_POST['id_persona'])) ? $_POST['id_persona'] : null;
						$objeto = new PersonaControlador();
						$objeto =$objeto ->EliminarPersona($id_persona);
       					if($objeto)
						{
          					echo 1;
						}
						else
						{
							echo 2;
						}
					}
				}

			}

		}

	}
}





   
?> 
