<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$( document ).ready(function() {
    $('.user_row').mouseover(function() {
            var email = this.id;
            $.get('index.php?controller=AjaxController&action=getFotoPerfil', 
                  {email: email }, 
                  function(ruta) { 
                        $("#foto").attr("src",ruta); 
                  }
            );
    })
});
</script>

<h4 align="center">Cargando fotos de perfil con Ajax</h4>
<h1 align="center">Administración de usuarios</h1>

<div align="center"><img id="foto" align="center"/></div>

<table border="1" align="center"> 
    <tr bgcolor="#bbb">
        <td>Nombre</td><td>Email</td><td>Teléfono</td><td colspan="2" align="center">Acciones</td>
    </tr>
    <tr>
 <?php
      foreach ($data['list_users'] as $user) {
          echo "<tr>";
          echo "<td class='user_row' id='".$user['email']."'>".$user['name']."</td><td>".$user['phone']."</td>";
          echo "<td>Modificar</td>";
          echo "<td>Eliminar</td>";
          echo "</tr>";
      }
      
 ?>
    </tr>
</table>

<p align='center'>Nuevo</p>

