console.log("El script que sirve para eliminar con AJAX se ha cargado correctamente");
console.log("Comprobación de cache, 8");



$(document).ready(function() {
    $('.eliminar').click(function() {
            var id = $(this).parent().parent().attr("id");
            //alert(id);

            

            $.get('index.php?controller=Ajax&action=eliminarFila', 
                  {id: id }, 
                  function() { 
                    $('#'+id).html("");
                        
                        
                        
                  }
            );
            
    })
});