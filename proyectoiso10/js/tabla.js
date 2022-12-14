$(document).ready(function () {
    $('#tablaEmpresas').DataTable({
        "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
        "oLanguage": {
              "sProcessing":     "Procesando...",
              "sLengthMenu": 'Mostrar <select>'+
                  '<option value="5" >5</option>'+
                  '<option value="10">10</option>'+
                  '<option value="25">20</option>'+
                  '<option value="50">50</option>'+
                  '<option value="100">100</option>'+
                  '<option value="-1">All</option>'+
                  '</select> registros',    
              "sZeroRecords":    "No se registran solicitudes",
              "sEmptyTable":     "no hay datos disponibles para la tabla",
              "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
              "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Filtrar:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Por favor espere - cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "Último",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
              }
      }
    });
  });


