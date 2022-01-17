<?php

$employees = $data["employees"];

//Script en el que haré que se cargue la imagen correspondiente al empleado cuando se haga click en ver imagen.
echo "<script src='assets/js/cargarImagen.js'></script>";
echo "<script src='assets/js/EliminarFila.js'></script>";



echo "<table class='table table-bordered grocery-crud-table table-hover' id='tablaRecursos'>
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>";


foreach ($employees as $employee) {
  $id = $employee['id'];

    echo "<tr id='$id'>
      <td>";
      
      echo $employee['name'];
      echo "</td><td>";
      echo $employee['lastname1'] . " " . $employee['lastname2'];

      echo "</td>";

      echo "<td>";
      
      echo "<div id='container$id'>";
      echo "<a class='btn btn-dark verImagen' href='#'>Ver imagen</a>";

      echo "</div>";
      echo "</td>";

     echo "<td>
      <a class='btn btn-warning' href='#'>Editar</a>";
      echo "<a class='btn btn-danger eliminar' href='#''>Eliminar</a>";


      
      echo "</td>";

   echo " </tr>";
    }
  echo "</tbody>";
  
  
echo "</table>";