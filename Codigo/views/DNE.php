<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Menu Principal</title>
  </head>
  <body>
    <h1>Menu Principal</h1>

    <p>Filtros:</p>
    <form action="../php/index.php" method="post">
      <label for="Estado">Estado:</label><br>
      <input type="text" id="txtEst" value=""><br>
      <label for="Area">Area:</label><br>
      <input type="text" id="txtArea" value=""><br><br>
      <input type="submit" value="Buscar">
    </form>
    <table>

    </table>
 


<?php
      
      foreach ($dato as $va ):
          echo "<tr><td><a href='views.php?m=mostrar_uno&id=".$va['id_vacante']."'>".$va['id_vacante']."</a></td><td>".$va['Sujeto_Obligado']."</td><td>S./".$va['Fecha_Modif']."</td>";
        echo "<td><a href='index.php?m=editar&id=".$va['id_vacante']."'>ACTUALIZAR</a> <a href='index.php?m=eliminar&id=".$va['id_vacante']."'>ELIMINAR</a></td>";
        echo "</tr>";
      endforeach;

?>


  </body>
</html>
