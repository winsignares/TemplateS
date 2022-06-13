$(document).ready(function () {
    var opcion;
    //llenar select de regional
    var select='<option value="null" >--SELECCIONE--</option>';
    $.ajax({
        url: "app/controlador/ConfiguracionControlador.php",
        type: 'post',
        datatype: "json",
        data: {opcion:"ListarRegional" }
    }).done(function (res) {
      var datos = JSON.parse(res);
      $.each(datos, function(i, item) {
        select +=' <option value="'+datos[i].id_regional+'" >'+datos[i].nombre_regional+'</option>';
        $("#regional").html(select);
        $("#regionale").html(select);
      });
      
    });
  
    var fila; 
    var contadorR=0;
    var contadorC=0;
    // tabla regional 
    var tablaRegional = $('#tablaRegional').DataTable({ retrieve: true, paging: false });
    tablaRegional.destroy();
    tablaRegional = $('#tablaRegional').DataTable({
        "ajax": {
            "url": "app/controlador/ConfiguracionControlador.php",
            "method": 'POST', 
            "data": { opcion:"ListarRegional"}, 
            "dataSrc": ""
        },
        "columns": [
            {
                data: null, render: function ( data, type, row ) {
                    contadorR=contadorR+1;
                    return "<b>"+contadorR+"</b>";
                }
             },
            { "data": "nombre_regional"},
            {
                data: null, render: function ( data, type, row ) {
                    return '<button type="button" class="btn btn-primary btnEditarRegional" data-id="'+data.id_regional+'"  data-bs-toggle="modal" data-bs-target="#ModalEditRegional" ><i class="bi bi-pencil-square"></i></button>';
                }
            },
            {
                data: null, render: function ( data, type, row ) {
                    return '<button type="button" class="btn btn-danger btnEliminarRegional" data-id="'+data.id_regional+'" ><i class="bi bi-trash"></i></button>';
                }
             }
        ]
    });
// tabla centro

var tablaCentro = $('#tablaCentro').DataTable({ retrieve: true, paging: false });
tablaCentro.destroy();
tablaCentro = $('#tablaCentro').DataTable({
    "ajax": {
        "url": "app/controlador/ConfiguracionControlador.php",
        "method": 'POST', 
        "data": { opcion:"ListarCentro"}, 
        "dataSrc": ""
    },
    "columns": [
        {
            data: null, render: function ( data, type, row ) {
                contadorC=contadorC+1;
                return "<b>"+contadorC+"</b>";
            }
         },
        { "data": "nombre_regional"},
        { "data": "nombre_centro"},
        { "data": "telefono_centro"},
        { "data": "subdirector"},
        {
            data: null, render: function ( data, type, row ) {
                return '<button type="button" class="btn btn-primary btnEditarCentro" data-id="'+data.id_centro+'"  data-bs-toggle="modal" data-bs-target="#ModalEditCentro" ><i class="bi bi-pencil-square"></i></button>';
            }
        },
        {
            data: null, render: function ( data, type, row ) {
                return '<button type="button" class="btn btn-danger btnEliminarCentro" data-id="'+data.id_centro+'" ><i class="bi bi-trash"></i></button>';
            }
         }
    ]
});



    $('#RegistrarRegional').submit(function (e)
    {
        e.preventDefault(); 
        nombre_regional=$.trim($('#nombre_regional').val());
        opcion= "GuardarRegional";
        $.ajax({
          url: "app/controlador/ConfiguracionControlador.php",
          type: "POST",
          data:{nombre_regional:nombre_regional, opcion: opcion}
        }).done(function (data)
        {
            if(data==1)
            {
                $('#ModalRegistroRegional').modal('hide');
                $("#ModalRegistroRegional").find("input,textarea,select").val("");
                swal("GUARDADO EXITOSAMENTE", "", "success");
                contadorR=0;
                tablaRegional.ajax.reload(null, false);
            }
            else
            {
                swal("", "ESTE REGIONAL YA EXISTE", "error");
            }
        });
        
        
    });

    $(document).on("click", ".btnEditarRegional", function () {
        id_regional= $(this).data("id");
        opcion ="ConsultarRegional";
        
         $.ajax({
            url: "app/controlador/ConfiguracionControlador.php",
            type: 'post',
            datatype: "json",
            data: { id_regional: id_regional, opcion: opcion }
        }).done(function (res) {
          var datos = JSON.parse(res);
          $("#nombre_regionale").val(datos.nombre_regional);
          $("#id_regional").val(id_regional);  
        });
    });
    
    $('#EditarRegional').submit(function (e) {
       e.preventDefault(); 
        id_regional = $.trim($('#id_regional').val());
        nombre_regionale= $.trim($('#nombre_regionale').val());
        opcion="ActualizarRegional"; 

        $.ajax({
          url: "app/controlador/ConfiguracionControlador.php",
          type: "POST",
          data: { id_regional: id_regional, nombre_regionale: nombre_regionale, opcion : opcion }
         }).done( function (data){
           if(data==1)
            {
                $('#ModalEditRegional').modal('hide');
                swal("DATOS ACTUALIZADOS", "", "success");
                contadorR=0;
                tablaRegional.ajax.reload(null, false);
            }
            else
            {
                swal("", "ERROR", "error");
            }
         });
      
    });



    $(document).on("click", ".btnEliminarRegional", function () {
        opcion = "EliminarRegional";
        id_regional= $(this).data("id");
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
                    url: "app/controlador/ConfiguracionControlador.php",
                    type: "POST",
                    data: { opcion: opcion, id_regional: id_regional }
                 }).done (function (data) {
                     if(data=1)
                     {
                        contadorR=0;
                        tablaRegional.row(fila.parents('tr')).remove().draw(); 
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

// metodos centro

  $('#RegistrarCentro').submit(function (e)
    {
        e.preventDefault(); 
        regional=$.trim($('#regional').val());
        nombre_centro=$.trim($('#nombre_centro').val());
        telefono_centro=$.trim($('#telefono_centro').val());
        subdirector=$.trim($('#subdirector_centro').val());
        
        opcion= "GuardarCentro";
        $.ajax({
          url: "app/controlador/ConfiguracionControlador.php",
          type: "POST",
          data:{opcion: opcion, nombre_centro : nombre_centro, telefono_centro: telefono_centro, subdirector: subdirector,regional: regional}
        }).done(function (data)
        {
            if(data==1)
            {
                $('#ModalRegistroCentro').modal('hide');
                $("#ModalRegistroCentro").find("input,textarea,select").val("");
                swal("GUARDADO EXITOSAMENTE", "", "success");
                contadorC=0;
                tablaCentro.ajax.reload(null, false);
            }
            else
            {
                alert(data);
            }
        });
    });


    $(document).on("click", ".btnEditarCentro", function () {
        id_centro= $(this).data("id");
        opcion ="ConsultarCentro";
        $("#id_centro").val(id_centro);  
         $.ajax({
            url: "app/controlador/ConfiguracionControlador.php",
            type: 'post',
            datatype: "json",
            data: { id_centro: id_centro, opcion: opcion }
        }).done(function (res) {
          var datos = JSON.parse(res);
          $("#nombre_centroe").val(datos.nombre_centro);
          $("#telefono_centroe").val(datos.telefono_centro); 
          $("#subdirector_centroe").val(datos.subdirector); 
          $("#regionale").val(datos.regional);  
         
        });
    });
   
    
});




