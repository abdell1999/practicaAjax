console.log("Script para cargar imagen asociado correctamente!");

console.log("Se ha actualizado la cache correctamente, 5");

//function cargarImagen(){
    $(document).ready(function() {
        $('.verImagen').click(function() {
            var id = $(this).parent().parent().parent().attr("id");
                //alert(id);
                $.get('index.php?controller=Ajax&action=cargarImagen', 
                      {id: id }, 
                      function(imagen) { 
                        //$("#foto").attr("src",ruta); 
                        //alert(imagen);
                        identificador = 'container' + id
                        $('#'+identificador).html("<img class='card-img-top col-md-4 d-none d-md-block ml-6' src='"+imagen+"' alt='Imagen'></td>");
                        
                        
                  }
                );
        })
    });
//}
