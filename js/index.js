$(document).ready(function(){
    $.ajax({
      type: 'POST',
      url: 'Francisco-Farias-ProyectoIso1/proyectoiso10/calendario/cargar_listas.php'
    })
    .done(function(empresas){
      $('#lista_reproduccion').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un error al cargar las listas')
    })
  
    $('#lista_reproduccion').on('change', function(){
      var id = $('#lista_reproduccion').val()
      $.ajax({
        type: 'POST',
        url: 'Francisco-Farias-ProyectoIso1/proyectoiso10/calendario/cargar_videos.php',
        data: {'rut_empresa': id}
      })
      .done(function(listas_rep){
        $('#videos').html(listas_rep)
      })
      .fail(function(){
        alert('Hubo un errror al cargar los vídeos')
      })
    })
  
    $('#enviar').on('click', function(){
      var resultado = 'Lista de reproducción: ' + $('#lista_reproduccion option:selected').text() +
      ' Video elegido: ' + $('#videos option:selected').text()
  
      $('#resultado1').html(resultado)
    })
  
  })