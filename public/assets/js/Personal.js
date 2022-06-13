$(document).ready(function () {
    var opcion;
    var fila; 
    var contadorA=0;
    var contadorI=0;
    var contadorB=0;
    var contadorH=0;
    var contadorF=0;
    var tablaAdministrador = $('#tablaAdministrador').DataTable({ retrieve: true, paging: false });
    tablaAdministrador.destroy();
    tablaAdministrador = $('#tablaAdministrador').DataTable({
        
        "ajax": {
            "url": "app/controlador/PersonaControlador.php",
            "method": 'POST', 
            "data": { opcion:"ListarPersona", cargo:1}, 
            "dataSrc": ""
        },
        "columns": [
            
            {
                data: null, render: function ( data, type, row ) {
                    contadorA=contadorA+1;
                    return "<b>"+contadorA+"</b>";
                }
             },
            { "data": "cedula"},
            {
                data: null, render: function ( data, type, row ) {
                    // Combinar campos
                    return data.nombres+" "+data.primer_apellido+" "+data.segundo_apellido;
                }
             },
            { "data": "telefono"},
            { "defaultContent": '<button type="button" class="btn btn-primary btnEditarAdministrador" data-bs-toggle="modal" data-bs-target="#ModalEditAdministrador" ><i class="bi bi-pencil-square"></i></button>' },
            {
                data: null, render: function ( data, type, row ) {
                                       
                    return '<button type="button" class="btn btn-danger btnEliminarAdministrador" data-id="'+data.id_persona+'" ><i class="bi bi-trash"></i></button>';
                }
             }
        ]

    });
   
   
    var tablaInstructor = $('#tablaInstructor').DataTable({ retrieve: true, paging: false });
    tablaInstructor.destroy();
    tablaInstructor = $('#tablaInstructor').DataTable({
        "ajax": {
            "url": "app/controlador/PersonaControlador.php",
            "method": 'POST', 
            "data": { opcion:"ListarPersona", cargo:3}, 
            "dataSrc": ""
        },
        "columns": [
            {
                data: null, render: function ( data, type, row ) {
                    
                    contadorI=contadorI+1;
                    return "<b>"+contadorI+"</b>";
                }
             },
            { "data": "cedula"},
            {
                data: null, render: function ( data, type, row ) {
                   
                    return data.nombres+" "+data.primer_apellido+" "+data.segundo_apellido;
                }
             },
            { "data": "telefono"},
            { "defaultContent": '<button type="button" class="btn btn-primary btnEditarInstructor" data-bs-toggle="modal" data-bs-target="#ModalEditInstructor" ><i class="bi bi-pencil-square"></i></button>' },
            {
                data: null, render: function ( data, type, row ) {
                   
                    return '<button type="button" class="btn btn-danger btnEliminarInstructor" data-id="'+data.id_persona+'" ><i class="bi bi-trash"></i></button>';
                }
             }
        ]

    });


    var tablaHerramentero = $('#tablaHerramentero').DataTable({ retrieve: true, paging: false });
    tablaHerramentero.destroy();
    tablaHerramentero = $('#tablaHerramentero').DataTable({
        "ajax": {
            "url": "app/controlador/PersonaControlador.php",
            "method": 'POST', 
            "data": { opcion:"ListarPersona", cargo:2}, 
            "dataSrc": ""
        },
        "columns": [
            {
                data: null, render: function ( data, type, row ) {
                    
                    contadorH=contadorH+1;
                    return "<b>"+contadorH+"</b>";
                }
             },
            { "data": "cedula"},
            {
                data: null, render: function ( data, type, row ) {
                    // Combinar campos
                    return data.nombres+" "+data.primer_apellido+" "+data.segundo_apellido;
                }
             },
            { "data": "telefono"},
            { "defaultContent": '<button type="button" class="btn btn-primary btnEditarHerramentero" data-bs-toggle="modal" data-bs-target="#ModalEditHerramentero" ><i class="bi bi-pencil-square"></i></button>' },
            {
                data: null, render: function ( data, type, row ) {
                    // Combinar campos
                    return '<button type="button" class="btn btn-danger btnEliminarHerramentero" data-id="'+data.id_persona+'" ><i class="bi bi-trash"></i></button>';
                }
             }
        ]

    });


    var tablaBienestar = $('#tablaBienestar').DataTable({ retrieve: true, paging: false });
    tablaBienestar.destroy();
    tablaBienestar = $('#tablaBienestar').DataTable({
        "ajax": {
            "url": "app/controlador/PersonaControlador.php",
            "method": 'POST', 
            "data": { opcion:"ListarPersona", cargo:4}, 
            "dataSrc": ""
        },
        "columns": [
            {
                data: null, render: function ( data, type, row ) {
                    
                    contadorB=contadorB+1;
                    return "<b>"+contadorB+"</b>";
                }
             },
            { "data": "cedula"},
            {
                data: null, render: function ( data, type, row ) {
                    // Combinar campos
                    return data.nombres+" "+data.primer_apellido+" "+data.segundo_apellido;
                }
             },
            { "data": "telefono"},
            { "defaultContent": '<button type="button" class="btn btn-primary btnEditarBienestar" data-bs-toggle="modal" data-bs-target="#ModalEditBienestar" ><i class="bi bi-pencil-square"></i></button>' },
            {
                data: null, render: function ( data, type, row ) {
                    // Combinar campos
                    return '<button type="button" class="btn btn-danger btnEliminarBienestar" data-id="'+data.id_persona+'" ><i class="bi bi-trash"></i></button>';
                }
             }
        ]

    });




   
    var tablaFidelizacion = $('#tablaFidelizacion').DataTable({ retrieve: true, paging: false });
    tablaFidelizacion.destroy();
    tablaFidelizacion = $('#tablaFidelizacion').DataTable({
        "ajax": {
            "url": "app/controlador/FidelizacionControlador.php",
            "method": 'POST', 
            "data": { opcion:"ListarFidelizacion"}, 
            "dataSrc": ""
        },
        "columns": [
            {
                data: null, render: function ( data, type, row ) {
                    contadorF=contadorF+1;
                    return "<b>"+contadorF+"</b>";
                }
             },
            { "data": "numero_documento"},
            {
                data: null, render: function ( data, type, row ) {
                    // Combinar campos
                    return data.nombres+" "+data.apellidos;
                }
             },
            { "data": "celular"},
            { "defaultContent": '<button type="button" class="btn btn-primary btnVerAprendizFidelizacion" data-bs-toggle="modal" data-bs-target="#ModalDatosAprendiz" ><i class="bi bi-eye"></i></button>' },
            {
                data: null, render: function ( data, type, row ) {
                    // Combinar campos
                    return '<button type="button" class="btn btn-secondary btnRegistrarProcesoFidelizacion" data-bs-toggle="modal" data-bs-target="#ModalRegistrarProcesoFidelizacion"><i class="bi bi-folder"></i></button>';
                }
             },
             {
                data: null, render: function ( data, type, row ) {
                    // Combinar campos
                    return '<button type="button" class="btn btn-danger btnAbrirProcesoFidelizacion" data-bs-toggle="modal" data-bs-target="#ModalAbrirProcesoFidelizacion"><i class="bi bi-trash"></i></button>';
                }
             }
        ]

    });






    $('#RegistrarInstructor').submit(function (e) {
       
        e.preventDefault(); 
        cedula = $.trim($('#cedula').val());
        nombres= $.trim($('#nombres').val());
        primer_apellido = $.trim($('#primer_apellido').val());
        segundo_apellido = $.trim($('#segundo_apellido').val());
        fechaNac = $.trim($('#fechaNac').val());
        direccion = $.trim($('#direccion').val());
        telefono = $.trim($('#telefono').val());
        correo = $.trim($('#correo').val());
        contrato ="CONTRATISTA";
        contraseña = $.trim($('#contraseña').val());
        opcion="GuardarPersona"; 
        cargo=3;
        $.ajax({
            url: "app/controlador/PersonaControlador.php",
            type: "POST",
            data: { cedula: cedula, nombres: nombres,primer_apellido: primer_apellido, segundo_apellido: segundo_apellido, fechaNac: fechaNac, direccion: direccion, telefono: telefono, contrato : contrato, contraseña: contraseña, opcion: opcion,correo :correo,cargo:cargo }
        }).done( function (data) 
        {
            if(data==1)
            {
                $('#ModalRegistroInstructor').modal('hide');
                $("#ModalRegistroInstructor").find("input,textarea,select").val("");
                swal("GUARDADO EXITOSAMENTE", "", "success");
                contadorI=0;
                tablaInstructor.ajax.reload(null, false);
            }
            else
            {
                swal("", "ESTA CEDULA YA EXISTE POR FAVOR DIJITE OTRA", "error");
            }
        });
        
    });

    $(document).on("click", ".btnEditarInstructor", function () {
        fila = $(this).closest("tr");
        cedula = parseInt(fila.find('td:eq(1)').text()); 
        opcion ="ConsultarPersona";
        
         $.ajax({
            url: "app/controlador/PersonaControlador.php",
            type: 'post',
            datatype: "json",
            data: { cedula: cedula, opcion: opcion }
        }).done(function (res) {
          var datos = JSON.parse(res);
          $("#cedulaE").val(cedula);
          $("#nombresE").val(datos.nombres);
          $("#primer_apellidoE").val(datos.primer_apellido);
          $("#segundo_apellidoE").val(datos.segundo_apellido);
          $("#direccionE").val(datos.direccion);
          $("#telefonoE").val(datos.telefono);
          $("#correoE").val(datos.correo);
          $("#contraseñaE").val(datos.password);
          $("#fechaNacE").val(datos.fechaNac);
          $("#id_persona").val(datos.id_persona);  
        });
    });


    $('#EditarInstructor').submit(function (e) {
  
        e.preventDefault(); 
        cedulaE = $.trim($('#cedulaE').val());
        nombresE= $.trim($('#nombresE').val());
        primer_apellidoE = $.trim($('#primer_apellidoE').val());
        segundo_apellidoE = $.trim($('#segundo_apellidoE').val());
        fechaNacE = $.trim($('#fechaNacE').val());
        direccionE = $.trim($('#direccionE').val());
        telefonoE = $.trim($('#telefonoE').val());
        correoE = $.trim($('#correoE').val());
        contraseñaE = $.trim($('#contraseñaE').val());
        id_persona = $.trim($('#id_persona').val());
        opcion="ActualizarPersona"; 

        $.ajax({
          url: "app/controlador/PersonaControlador.php",
          type: "POST",
          data: { cedulaE: cedulaE, nombresE: nombresE,primer_apellidoE: primer_apellidoE, segundo_apellidoE: segundo_apellidoE, fechaNacE: fechaNacE, direccionE: direccionE, telefonoE: telefonoE, contraseñaE: contraseñaE, opcion: opcion,correoE :correoE,id_persona: id_persona }
         }).done( function (data){
           if(data==1)
            {
                $('#ModalEditInstructor').modal('hide');
                swal("DATOS ACTUALIZADOS", "", "success");
                contadorI=0;
                tablaInstructor.ajax.reload(null, false);
            }
            else
            {
                swal("", "ERROR", "error");
            }
         });
      
    });

    $(document).on("click", ".btnEliminarInstructor", function () {
        opcion = "EliminarPersona";
        id_persona= $(this).data("id");
        fila = $(this);
        swal({
            title: "Estas Seguro De Eliminar ",
            text: "",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete)
            {
                $.ajax({
                    url: "app/controlador/PersonaControlador.php",
                    type: "POST",
                    data: { opcion: opcion, id_persona: id_persona }
                 }).done (function (data) {
                     if(data=1)
                     {
                        contadorI=0;
                        tablaInstructor.row(fila.parents('tr')).remove().draw(); 
                        swal("Datos Eliminados", {icon: "success", });
                     }
                     else
                     {
                         alert(data);
                     }
                        
    
                    });
              
            } else {
                swal("CANCELADO", "", "error");
            }
          });
    });


    $('#RegistrarAdministrador').submit(function (e) {
       
        e.preventDefault(); 
        cedula = $.trim($('#cedula').val());
        nombres= $.trim($('#nombres').val());
        primer_apellido = $.trim($('#primer_apellido').val());
        segundo_apellido = $.trim($('#segundo_apellido').val());
        fechaNac = $.trim($('#fechaNac').val());
        direccion = $.trim($('#direccion').val());
        telefono = $.trim($('#telefono').val());
        correo = $.trim($('#correo').val());
        contrato ="CONTRATISTA";
        contraseña = $.trim($('#contraseña').val());
        opcion="GuardarPersona"; 
        cargo=1;
        $.ajax({
            url: "app/controlador/PersonaControlador.php",
            type: "POST",
            data: { cedula: cedula, nombres: nombres,primer_apellido: primer_apellido, segundo_apellido: segundo_apellido, fechaNac: fechaNac, direccion: direccion, telefono: telefono, contrato : contrato, contraseña: contraseña, opcion: opcion,correo :correo,cargo:cargo }
        }).done( function (data) 
        {
            if(data==1)
            {
                $('#ModalRegistroAdministrador').modal('hide');
                $("#ModalRegistroAdministrador").find("input,textarea,select").val("");
                swal("GUARDADO EXITOSAMENTE", "", "success");
                contadorA=0;
                tablaAdministrador.ajax.reload(null, false);
            }
            else
            {
                swal("", "ESTA CEDULA YA EXISTE POR FAVOR DIJITE OTRA", "error");
            }
        });
        
    });


    $(document).on("click", ".btnEditarAdministrador", function () {
        fila = $(this).closest("tr");
        cedula = parseInt(fila.find('td:eq(1)').text()); 
        opcion ="ConsultarPersona";
        
         $.ajax({
            url: "app/controlador/PersonaControlador.php",
            type: 'post',
            datatype: "json",
            data: { cedula: cedula, opcion: opcion }
        }).done(function (res) {
          var datos = JSON.parse(res);
          $("#cedulaE").val(cedula);
          $("#nombresE").val(datos.nombres);
          $("#primer_apellidoE").val(datos.primer_apellido);
          $("#segundo_apellidoE").val(datos.segundo_apellido);
          $("#direccionE").val(datos.direccion);
          $("#telefonoE").val(datos.telefono);
          $("#correoE").val(datos.correo);
          $("#contraseñaE").val(datos.password);
          $("#fechaNacE").val(datos.fechaNac);
          $("#id_persona").val(datos.id_persona);  
        });
    });

    $('#EditarAdministrador').submit(function (e) {
  
            e.preventDefault(); 
            cedulaE = $.trim($('#cedulaE').val());
            nombresE= $.trim($('#nombresE').val());
            primer_apellidoE = $.trim($('#primer_apellidoE').val());
            segundo_apellidoE = $.trim($('#segundo_apellidoE').val());
            fechaNacE = $.trim($('#fechaNacE').val());
            direccionE = $.trim($('#direccionE').val());
            telefonoE = $.trim($('#telefonoE').val());
            correoE = $.trim($('#correoE').val());
            contraseñaE = $.trim($('#contraseñaE').val());
            id_persona = $.trim($('#id_persona').val());
            opcion="ActualizarPersona"; 
    
            $.ajax({
              url: "app/controlador/PersonaControlador.php",
              type: "POST",
              data: { cedulaE: cedulaE, nombresE: nombresE,primer_apellidoE: primer_apellidoE, segundo_apellidoE: segundo_apellidoE, fechaNacE: fechaNacE, direccionE: direccionE, telefonoE: telefonoE, contraseñaE: contraseñaE, opcion: opcion,correoE :correoE,id_persona: id_persona }
             }).done( function (data){
               if(data==1)
                {
                    $('#ModalEditAdministrador').modal('hide');
                    swal("DATOS ACTUALIZADOS", "", "success");
                    contadorA=0;
                    tablaAdministrador.ajax.reload(null, false);
                }
                else
                {
                    swal("", "ERROR", "error");
                }
             });
          
        });



        $(document).on("click", ".btnEliminarAdministrador", function () {
            opcion = "EliminarPersona";
            id_persona= $(this).data("id");
            fila = $(this);
            swal({
                title: "Estas Seguro De Eliminar ",
                text: "",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete)
                {
                    $.ajax({
                        url: "app/controlador/PersonaControlador.php",
                        type: "POST",
                        data: { opcion: opcion, id_persona: id_persona }
                     }).done (function (data) {
                         if(data=1)
                         {
                            contadorA=0;
                            tablaAdministrador.row(fila.parents('tr')).remove().draw(); 
                            swal("Datos Eliminados", {icon: "success", });
                         }
                         else
                         {
                             alert(data);
                         }
                            
        
                        });
                  
                } else {
                    swal("CANCELADO", "", "error");
                }
              });
        });

  
       

      

        $('#RegistrarHerramentero').submit(function (e) {
       
            e.preventDefault(); 
            cedula = $.trim($('#cedula').val());
            nombres= $.trim($('#nombres').val());
            primer_apellido = $.trim($('#primer_apellido').val());
            segundo_apellido = $.trim($('#segundo_apellido').val());
            fechaNac = $.trim($('#fechaNac').val());
            direccion = $.trim($('#direccion').val());
            telefono = $.trim($('#telefono').val());
            correo = $.trim($('#correo').val());
            contrato ="CONTRATISTA";
            contraseña = $.trim($('#contraseña').val());
            opcion="GuardarPersona"; 
            cargo=2;
            $.ajax({
                url: "app/controlador/PersonaControlador.php",
                type: "POST",
                data: { cedula: cedula, nombres: nombres,primer_apellido: primer_apellido, segundo_apellido: segundo_apellido, fechaNac: fechaNac, direccion: direccion, telefono: telefono, contrato : contrato, contraseña: contraseña, opcion: opcion,correo :correo,cargo:cargo }
            }).done( function (data) 
            {
                if(data==1)
                {
                    $('#ModalRegistroHerramentero').modal('hide');
                    $("#ModalRegistroHerramentero").find("input,textarea,select").val("");
                    swal("GUARDADO EXITOSAMENTE", "", "success");
                    contadorH=0;
                    tablaHerramentero.ajax.reload(null, false);
                }
                else
                {
                    swal("", "ESTA CEDULA YA EXISTE POR FAVOR DIJITE OTRA", "error");
                }
            });
            
        });


        $(document).on("click", ".btnEditarHerramentero", function () {
            fila = $(this).closest("tr");
            cedula = parseInt(fila.find('td:eq(1)').text()); 
            opcion ="ConsultarPersona";
            
             $.ajax({
                url: "app/controlador/PersonaControlador.php",
                type: 'post',
                datatype: "json",
                data: { cedula: cedula, opcion: opcion }
            }).done(function (res) {
              var datos = JSON.parse(res);
              $("#cedulaE").val(cedula);
              $("#nombresE").val(datos.nombres);
              $("#primer_apellidoE").val(datos.primer_apellido);
              $("#segundo_apellidoE").val(datos.segundo_apellido);
              $("#direccionE").val(datos.direccion);
              $("#telefonoE").val(datos.telefono);
              $("#correoE").val(datos.correo);
              $("#contraseñaE").val(datos.password);
              $("#fechaNacE").val(datos.fechaNac);
              $("#id_persona").val(datos.id_persona);  
            });
        });


        $('#EditarHerramentero').submit(function (e) {
  
            e.preventDefault(); 
            cedulaE = $.trim($('#cedulaE').val());
            nombresE= $.trim($('#nombresE').val());
            primer_apellidoE = $.trim($('#primer_apellidoE').val());
            segundo_apellidoE = $.trim($('#segundo_apellidoE').val());
            fechaNacE = $.trim($('#fechaNacE').val());
            direccionE = $.trim($('#direccionE').val());
            telefonoE = $.trim($('#telefonoE').val());
            correoE = $.trim($('#correoE').val());
            contraseñaE = $.trim($('#contraseñaE').val());
            id_persona = $.trim($('#id_persona').val());
            opcion="ActualizarPersona"; 
    
            $.ajax({
              url: "app/controlador/PersonaControlador.php",
              type: "POST",
              data: { cedulaE: cedulaE, nombresE: nombresE,primer_apellidoE: primer_apellidoE, segundo_apellidoE: segundo_apellidoE, fechaNacE: fechaNacE, direccionE: direccionE, telefonoE: telefonoE, contraseñaE: contraseñaE, opcion: opcion,correoE :correoE,id_persona: id_persona }
             }).done( function (data){
               if(data==1)
                {
                    $('#ModalEditHerramentero').modal('hide');
                    swal("DATOS ACTUALIZADOS", "", "success");
                    contadorH=0;
                    tablaHerramentero.ajax.reload(null, false);
                }
                else
                {
                    swal("", "ERROR", "error");
                }
             });
          
        });


        $(document).on("click", ".btnEliminarHerramentero", function () {
            opcion = "EliminarPersona";
            id_persona= $(this).data("id");
            fila = $(this);
            swal({
                title: "Estas Seguro De Eliminar ",
                text: "",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete)
                {
                    $.ajax({
                        url: "app/controlador/PersonaControlador.php",
                        type: "POST",
                        data: { opcion: opcion, id_persona: id_persona }
                     }).done (function (data) {
                         if(data=1)
                         {
                            contadorH=0;
                            tablaHerramentero.row(fila.parents('tr')).remove().draw(); 
                            swal("Datos Eliminados", {icon: "success", });
                         }
                         else
                         {
                             alert(data);
                         }
                            
        
                        });
                  
                } else {
                    swal("CANCELADO", "", "error");
                }
              });
        });

        
        $(document).on("click",".btnVerAprendizFidelizacion", function()
        {
               fila = $(this).closest("tr");
               numero_documento = parseInt(fila.find('td:eq(1)').text()); 
               opcion="ListarFidelizacionAprendiz";
              
               
               $.ajax({
                url: "app/controlador/FidelizacionControlador.php",
                type: "POST",
                data: {opcion: opcion, numero_documento: numero_documento}
               }).done( function (data){
                 var datos = JSON.parse(data);
                 $("#tipo_documento_fidelizacion").text(datos.tipo_documento);
                 $("#numero_documento_fidelizacion").text(numero_documento);
                 $("#nombres_fidelizacion").text(datos.nombres);
                 $("#apellidos_fidelizacion").text(datos.apellidos);
                 $("#direccion_fidelizacion").text(datos.direccion);
                 $("#telefono_fidelizacion").text(datos.celular);
                 $("#correo_fidelizacion").text(datos.correo);
                 $("#programa_fidelizacion").text(datos.nombre_programa);
                 $("#ficha_fidelizacion").text(datos.ficha);
                 $("genero").text(datos.genero);
               });
                       
        });


        $('#RegistrarBienestar').submit(function (e) {
       
            e.preventDefault(); 
            cedula = $.trim($('#cedula').val());
            nombres= $.trim($('#nombres').val());
            primer_apellido = $.trim($('#primer_apellido').val());
            segundo_apellido = $.trim($('#segundo_apellido').val());
            fechaNac = $.trim($('#fechaNac').val());
            direccion = $.trim($('#direccion').val());
            telefono = $.trim($('#telefono').val());
            correo = $.trim($('#correo').val());
            contrato ="CONTRATISTA";
            contraseña = $.trim($('#contraseña').val());
            opcion="GuardarPersona"; 
            cargo=4;
            $.ajax({
                url: "app/controlador/PersonaControlador.php",
                type: "POST",
                data: { cedula: cedula, nombres: nombres,primer_apellido: primer_apellido, segundo_apellido: segundo_apellido, fechaNac: fechaNac, direccion: direccion, telefono: telefono, contrato : contrato, contraseña: contraseña, opcion: opcion,correo :correo,cargo:cargo }
            }).done( function (data) 
            {
                if(data==1)
                {
                    $('#ModalRegistroBienestar').modal('hide');
                    $("#ModalRegistroHerramentero").find("input,textarea,select").val("");
                    swal("GUARDADO EXITOSAMENTE", "", "success");
                    contadorB=0;
                    tablaBienestar.ajax.reload(null, false);
                }
                else
                {
                    swal("", "ESTA CEDULA YA EXISTE POR FAVOR DIJITE OTRA", "error");
                }
            });
            
        });


        $(document).on("click", ".btnEditarBienestar", function () {
            fila = $(this).closest("tr");
            cedula = parseInt(fila.find('td:eq(1)').text()); 
            opcion ="ConsultarPersona";
            
             $.ajax({
                url: "app/controlador/PersonaControlador.php",
                type: 'post',
                datatype: "json",
                data: { cedula: cedula, opcion: opcion }
            }).done(function (res) {
              var datos = JSON.parse(res);
              $("#cedulaE").val(cedula);
              $("#nombresE").val(datos.nombres);
              $("#primer_apellidoE").val(datos.primer_apellido);
              $("#segundo_apellidoE").val(datos.segundo_apellido);
              $("#direccionE").val(datos.direccion);
              $("#telefonoE").val(datos.telefono);
              $("#correoE").val(datos.correo);
              $("#contraseñaE").val(datos.password);
              $("#fechaNacE").val(datos.fechaNac);
              $("#id_persona").val(datos.id_persona);  
            });
        });


        $('#EditarBienestar').submit(function (e) {
  
            e.preventDefault(); 
            cedulaE = $.trim($('#cedulaE').val());
            nombresE= $.trim($('#nombresE').val());
            primer_apellidoE = $.trim($('#primer_apellidoE').val());
            segundo_apellidoE = $.trim($('#segundo_apellidoE').val());
            fechaNacE = $.trim($('#fechaNacE').val());
            direccionE = $.trim($('#direccionE').val());
            telefonoE = $.trim($('#telefonoE').val());
            correoE = $.trim($('#correoE').val());
            contraseñaE = $.trim($('#contraseñaE').val());
            id_persona = $.trim($('#id_persona').val());
            opcion="ActualizarPersona"; 
    
            $.ajax({
              url: "app/controlador/PersonaControlador.php",
              type: "POST",
              data: { cedulaE: cedulaE, nombresE: nombresE,primer_apellidoE: primer_apellidoE, segundo_apellidoE: segundo_apellidoE, fechaNacE: fechaNacE, direccionE: direccionE, telefonoE: telefonoE, contraseñaE: contraseñaE, opcion: opcion,correoE :correoE,id_persona: id_persona }
             }).done( function (data){
               if(data==1)
                {
                    $('#ModalEditBienestar').modal('hide');
                    swal("DATOS ACTUALIZADOS", "", "success");
                    contadorB=0;
                    tablaBienestar.ajax.reload(null, false);
                }
                else
                {
                    swal("", "ERROR", "error");
                }
             });
          
        });


        $(document).on("click", ".btnEliminarBienestar", function () {
            opcion = "EliminarPersona";
            id_persona= $(this).data("id");
            fila = $(this);
            swal({
                title: "Estas Seguro De Eliminar ",
                text: "",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete)
                {
                    $.ajax({
                        url: "app/controlador/PersonaControlador.php",
                        type: "POST",
                        data: { opcion: opcion, id_persona: id_persona }
                     }).done (function (data) {
                         if(data=1)
                         {
                            contadorB=0;
                            tablaBienestar.row(fila.parents('tr')).remove().draw(); 
                            swal("Datos Eliminados", {icon: "success", });
                         }
                         else
                         {
                             alert(data);
                         }
                        });
                  
                } else {
                    swal("CANCELADO", "", "error");
                }
              });
        });

    
});




