console.log("El script que sirve para eliminar con AJAX se ha cargado correctamente");
console.log("Comprobación de cache, 5");



$(document).ready(function() {
    $('.eliminar').click(function() {
            var id = $(this).parent().parent().attr("id");
            alert(id);

            $('#'+id).html("");

            /*$.get('index.php?controller=Ajax&action=cargarImagen', 
                  {id: id }, 
                  function(imagen) { 
                        //$("#foto").attr("src",ruta); 
                        //alert(imagen);
                        identificador = 'container' + id
                        $('#'+identificador).html("<img class='card-img-top col-md-4 d-none d-md-block ml-6' src='"+imagen+"' alt='Imagen'></td>");
                        
                        
                  }
            );
            */
    })
});