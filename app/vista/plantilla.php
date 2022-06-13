<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SENA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public/assets/img/logosena.png" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  

  
   <link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

   <link href="public/assets/css/datatable.min.css" rel="stylesheet">
  <link href="public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> 
  <link href="public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="public/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="public/assets/vendor/simple-datatables/style.css" rel="stylesheet">


  
  <!-- Template Main CSS File -->
  <link href="public/assets/css/style.css" rel="stylesheet">
  


</head>

<body>

  <?php

    if (isset($_SESSION["sesion_active"]) && ($_SESSION["sesion_active"]["tipo_usuario"] == "ADMINISTRADOR")) 
    {
      require_once "app/controlador/LoginControlador.php";
      include "app/vista/MENU/navAdministrador.php";
      include "app/vista/MENU/menuAdministrador.php";
      if (isset($_GET["ruta"]) &&$_GET["ruta"] == "index" ) :
        include "app/vista/HOME/administrador/index.php";
      elseif (isset($_GET["ruta"]) && $_GET["ruta"] == "fidelizacion") :
        include "app/vista/FIDELIZACION/index.php";
      elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "securita") :
        include "app/vista/SECURITA/index.php";
      elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "perfil") :
        include "app/vista/HOME/PERFIL/perfil.php";
      elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "salir") :
       include "app/vista/LOGIN/salir.php";
      elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "DatosInstructor") :
        include "app/vista/PERSONAL/DatosInstructor.php";
      elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "DatosHerramentero") :
          include "app/vista/PERSONAL/DatosHerramentero.php";
      elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "DatosBienestar") :
            include "app/vista/PERSONAL/DatosBienestar.php";
      elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "DatosRegional") :
            include "app/vista/CONFIGURACION/DatosRegional.php";
      elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "DatosCentro") :
             include "app/vista/CONFIGURACION/DatosCentro.php";
      else:
        include "app/vista/HOME/ADMINISTRADOR/index.php";
      endif;
      include "app/vista/MENU/footer.php";
      include "app/vista/MENU/scripts.php";
    } 
    else 
    {
        if (isset($_SESSION["sesion_active"]) && ($_SESSION["sesion_active"]["tipo_usuario"] == "INSTRUCTOR")) 
        {
          require_once "app/controlador/LoginControlador.php";
          include "app/vista/MENU/navInstructor.php";
          include "app/vista/MENU/menuInstructor.php";
          if (isset($_GET["ruta"]) &&$_GET["ruta"] == "index" ) :
              include "app/vista/HOME/INSTRUCTOR/index.php";
          elseif (isset($_GET["ruta"]) && $_GET["ruta"] == "fidelizacion") :
              include "app/vista/FIDELIZACION/index.php";
          elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "securita") :
              include "app/vista/SECURITA/index.php";
          elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "perfil") :
              include "app/vista/HOME/PERFIL/perfil.php";
           elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "salir") :
               include "app/vista/LOGIN/salir.php";
          else:
                include "app/vista/HOME/INSTRUCTOR/index.php";
          endif;
          include "app/vista/MENU/footer.php";
          include "app/vista/MENU/scripts.php";
        } 
        else
        {
              
           if (isset($_SESSION["sesion_active"]) && ($_SESSION["sesion_active"]["tipo_usuario"] == "BIENESTAR")) 
           {
                require_once "app/controlador/LoginControlador.php";
                include "app/vista/MENU/navBienestar.php";
                include "app/vista/MENU/menuBienestar.php";
                if (isset($_GET["ruta"]) &&$_GET["ruta"] == "index" ) :
                    include "app/vista/HOME/BIENESTAR/index.php";
                elseif (isset($_GET["ruta"]) && $_GET["ruta"] == "fidelizacion") :
                    include "app/vista/FIDELIZACION/index.php";
                elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "securita") :
                    include "app/vista/SECURITA/index.php";
                elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "perfil") :
                    include "app/vista/HOME/PERFIL/perfil.php";
                elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "salir") :
                    include "app/vista/LOGIN/salir.php";
                else:
                    include "app/vista/HOME/BIENESTAR/index.php";
                endif;
                  include "app/vista/MENU/footer.php";
                  include "app/vista/MENU/scripts.php";
            }
            else
            {
               if (isset($_SESSION["sesion_active"]) && ($_SESSION["sesion_active"]["tipo_usuario"] == "PARAMETRIZACION")) 
               {
                    require_once "app/controlador/LoginControlador.php";
                    include "app/vista/MENU/navParametrizacion.php";
                    include "app/vista/MENU/menuParametrizacion.php";
                    if (isset($_GET["ruta"]) &&$_GET["ruta"] == "index" ) :
                        include "app/vista/HOME/PARAMETRIZACION/index.php";
                    elseif (isset($_GET["ruta"]) && $_GET["ruta"] == "fidelizacion") :
                        include "app/vista/FIDELIZACION/index.php";
                    elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "securita") :
                        include "app/vista/SECURITA/index.php";
                    elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "perfil") :
                        include "app/vista/HOME/PERFIL/perfil.php";
                    elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "salir") :
                       include "app/vista/LOGIN/salir.php";
                    elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "DatosAdministrador") :
                        include "app/vista/PERSONAL/DatosAdministrador.php";
                    elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "DatosInstructor") :
                          include "app/vista/PERSONAL/DatosInstructor.php";
                    elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "DatosHerramentero") :
                            include "app/vista/PERSONAL/DatosHerramentero.php";
                    elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "DatosBienestar") :
                        include "app/vista/PERSONAL/DatosBienestar.php";
                    elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "DatosRegional") :
                         include "app/vista/CONFIGURACION/DatosRegional.php";
                    elseif (isset($_GET["ruta"]) &&$_GET["ruta"] == "DatosCentro") :
                         include "app/vista/CONFIGURACION/DatosCentro.php";
                    else:
                        include "app/vista/HOME/ADMINISTRADOR/index.php";
                    endif;
                    include "app/vista/MENU/footer.php";
                    include "app/vista/MENU/scripts.php";
                }
                else
                {
                    require_once "app/controlador/LoginControlador.php";
                    include "app/vista/LOGIN/index.php";
                    include "app/vista/MENU/scripts.php";
                } 
               
            } 
                
        }
    }



  ?>


</body>

</html>