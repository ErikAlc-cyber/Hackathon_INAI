<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="../css/index.css">
  </head>
  <body>
    <h1>
    <table align="center">
      <td><img src="../../Documentacion/imagenes/titulo.png" alt="Logo" class="logo"></td>
      <td><p class="titulo">Menu Principal</p></td>
    </table>
    </h1>

    <ul>
      <li><a href="../index.php">Pagina Principal</a></li>
      <li><a href="views/views.php" class="active">DNE</a></li>
      <li><a href="../../Documentacion/InvestigacionPNT.pdf">Porque del proyecto?</a></li>
      <li><a href="http://www.snt.org.mx/">Que es el PNT?</a></li>
      <li><a href="http://www.snt.org.mx/index.php/consejo-nacional/acuerdos">Que hace el PNT?</a></li>
      <li><a href="perfiles.html">Info. Creadores</a></li>
  </ul>
  <div class="menu">
      <p>Filtros:</p>
      <form action="DNE.php" method="post" id="filtro">
        <label for="Estado">Estado:</label><br>
        <script>
          var x = document.createElement("SELECT");
          x.setAttribute("id", "mySelect");
          document.getElementById("filtro").appendChild(x);

          var z = document.createElement("option");
          z.setAttribute("value", "num1");
          var t = document.createTextNode("Aguascalientes");
          z.appendChild(t);
          document.getElementById("mySelect").appendChild(z);

        </script>
        <br>
        <label for="Area">Id:</label><br>
        <input type="text" id="txtId" value=""><br><br>
        <button class="button">Buscar</button>
      </form>
  </div>

<?php

      echo '<table class="datos"> <tr> <th>Identificacion</th> <th>Nombre</th> <th>Ultima fecha disponible</th> <th>Mas informacion</th> <th>Elimina este registro</th> </tr>';
      foreach ($dato as $va ):
        //IMPORTANTE: Cuidado al modificar este enlace ya que envia el nombre del metodo y la id para mostrar al vacante a nuestro views.php   y asigne la vista correcta
        echo "<tr><td><a href='views.php?m=mostrar_uno&id=".$va['id_vacante']."'>".$va['id_vacante']."</a></td><td>".$va['Sujeto_Obligado']."</td><td>S./".$va['Fecha_Modif']."</td>";

        echo "<td><a href='views.php?m=mostrar_uno&id=".$va['id_vacante']."'>Mas Informacion</a></td> <td><a href='index.php?m=eliminar&id=".$va['id_vacante']."'>ELIMINAR</a></td>";
        echo "</tr>";
      endforeach;
      echo "</table>";

?>


  </body>
</html>
