<?php
// capturamos la opcion 
if(isset($_POST["opcion"]))
{
	//si la opcin es mandada por un ajax va a entrar aqui 
	if($_POST["opcion"]==1)
	{
		require_once "../modelo/LoginModelo.php";
	}
}
else
{
	//si la opcion no es mandada por ajax entra aqui
	require_once "app/modelo/LoginModelo.php";
}

//creamos la clase del login del proyecto
class LoginControlador{
	// creamos el metodo para iniciar sesion
	public function IniciarSesion(){
		// capturamos el usuario y validamos que la variable enviada por post exista
		if(isset($_POST["usuario"])){
			//validamos si los datos enviados no son nulos
			if($_POST["usuario"]!= null && $_POST["password"]!=null)
			{
				
	    		$valor = $_POST["usuario"];
				//llamamos al metodo consultar usuario que esta en el modelo y le enviamos el usuario para validar si existe en la BD
				$respuesta = ModeloUsuarios::ConsultarUsuario($valor);
				// si el usuario no existe entra aqui
				if($respuesta==false)
				{
					echo '
				    	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                			Usuario o Contraseña Incorrecta
                		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              			</div>
					';
				}
				else
				{
					//si el ususario y la contreseña estan correctos entra aqui
     				if(($respuesta["numero_documento"] == $_POST["usuario"]) && ($respuesta["password"] == $_POST["password"]))
					 {
                 		
						$id_persona= $respuesta["id_persona"];
						$cargo= $respuesta["cargo"];
                    	$datos = 
						[
					   		'id_persona' => $id_persona,
							'tipo_usuario' => $cargo
    					];
                    	$_SESSION['sesion_active'] = $datos; 
						echo '<script>
							window.location = "index";
						</script>';
					}
					else
					{
						//si el usuario existe pero la contraseña esta incorrecta entra aqui
						echo '
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
                			<i class="bi bi-exclamation-octagon me-1"></i>
               				Usuario o Contraseña Incorrecta
                			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              				</div>
						';
					}
				}
			}
		}

	}

    // meotodo para actualizar los datos del usuario
	public function ActualizarDatos($nombres,$primer_apellido,$segundo_apellido,$direccion,$telefono,$correo,$id_usuario)
	{
		$nombres = $nombres;
		$primer_apellido = $primer_apellido;
		$segundo_apellido = $segundo_apellido;
		$direccion = $direccion;
		$telefono = $telefono;
		$correo = $correo;
		$id_usuario = $id_usuario;
		// creamos un array asociativo de los datos
        $datos=
		[
		  'nombres' => $nombres,
		  'primer_apellido' => $primer_apellido,
		  'segundo_apellido' => $segundo_apellido,
		  'direccion' => $direccion,
		  'telefono' => $telefono,
		  'correo' => $correo,
		  'id_usuario' => $id_usuario
		];
		//mandamos el array al metodo actualizarDatos del modelo para que se actualicen
		$respuesta = ModeloUsuarios::ActualizarDatos($datos);
		
		//retornamos la rspuesta 
		return $respuesta;
		
	}
   
	//meotodo para obtener los datos del usuario y mostrarlos en el nav y el perfil
	public function DatosUsuario($id)
	{
		$id = $id;
		// le enviamos el id al metodo del modelo datosUsusario y el nos devuelve os datos en un array
	    $r = ModeloUsuarios::DatosUsuario($id);
		// creamos un nuevo array llamado datos y lo retornamos
			$datos=
	    	[
		     'nombres' => $r["nombres"],
		     'primer_apellido' => $r["primer_apellido"],
		     'segundo_apellido' => $r["segundo_apellido"],
		     'direccion' => $r["direccion"],
		     'telefono' =>$r["telefono"],
		     'correo' => $r["correo"],
			 'cedula' =>$r["cedula"]
		   ];
    	
		return $datos;
	}

}

// capturamos la opcion 
if(isset($_POST["opcion"]))
{
	if($_POST["opcion"]==1)
	{
		$nombres = (isset($_POST['nombres'])) ? $_POST['nombres'] : null;
		$primer_apellido = (isset($_POST['primer_apellido'])) ? $_POST['primer_apellido'] : null;
		$segundo_apellido = (isset($_POST['segundo_apellido'])) ? $_POST['segundo_apellido'] : null;
		$direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : null;
		$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : null;
		$correo = (isset($_POST['correo'])) ? $_POST['correo'] : null;
		$id_usuario = (isset($_POST['id_usuario'])) ? $_POST['id_usuario'] : null;
	     // creamos un objeto del controlador y llamamos al metodo Actualizar datos y le pasamos todos los datos para actualizar
		$login = new LoginControlador();
		$login =$login -> ActualizarDatos($nombres,$primer_apellido,$segundo_apellido,$direccion,$telefono,$correo,$id_usuario);
        // recibimos la respuesta y si es verdadera enviamos 1 sino 2
		if($login):
  		
		    echo 1;
			
		else:
  			echo 2;	
		endif;
	}
}

