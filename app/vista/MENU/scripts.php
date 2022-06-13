  
  <script src="public/assets/vendor/simple-datatables/jquery-3.3.1.min.js"></script>
  <script src="public/assets/vendor/simple-datatables/jquery.dataTables.min.js"></script>
  <script src="public/assets/vendor/simple-datatables/dataTables.bootstrap.min.js"></script> 

  <script src="public/assets/vendor/popper/popper.min.js"></script> 

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

  <script src="public/assets/vendor/simple-datatables/sweetalert.min.js"></script>
  <script src="public/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/assets/vendor/chart.js/chart.min.js"></script>
  <script src="public/assets/vendor/echarts/echarts.min.js"></script>
  <script src="public/assets/vendor/quill/quill.min.js"></script>
  <script src="public/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="public/assets/vendor/php-email-form/validate.js"></script>
  <script src="public/assets/js/main.js"></script>
  <script src="public/assets/js/Personal.js"></script>
  <script src="public/assets/js/Configuracion.js"></script>

  <script type="text/javascript">
  
  $('#Formulario_Usuario').submit(function (e) {
    e.preventDefault(); //actualizar datos
    nombres = $.trim($('#nombres_usuario').val());
    primer_apellido = $.trim($('#primer_apellido_usuario').val());
    segundo_apellido = $.trim($('#segundo_apellido_usuario').val());
    direccion = $.trim($('#direccion_usuario').val());
    telefono = $.trim($('#telefono_usuario').val());
    correo = $.trim($('#correo_usuario').val());
    id_usuario = $.trim($('#id_usuario').val());
    opcion = 1;
    
    $.ajax({
        url: "app/controlador/LoginControlador.php",
        type: "POST",
        data: { nombres: nombres, primer_apellido: primer_apellido, segundo_apellido: segundo_apellido, direccion: direccion, correo: correo, telefono: telefono,id_usuario:id_usuario, opcion:opcion }
    }).done( function (data) {
      if(data==1)
       {
        swal("DATOS ACTUALIZADOS", "", "success").then((value) => { location.reload(); });
       }
       else
       {
           alert(data);
       }    
    });

});


  
  
  
  </script>