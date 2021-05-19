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
      <li> <a href="views/DNE.php" class="active">DNE</a></li>
      <li><a href="../../Documentacion/InvestigacionPNT.pdf">Covid-19</a></li>
      <li><a href="http://www.snt.org.mx/">SNT</a></li>
      <li><a href="http://www.snt.org.mx/index.php/consejo-nacional/acuerdos">Extras</a></li>
  </ul>
  <div class="menu">
      <p>Filtros:</p>
      <form action="DNE.php" method="post">
        <label for="Estado">Estado:</label><br>
        <input type="text" id="txtEst" value=""><br>
        <label for="Area">Area:</label><br>
        <input type="text" id="txtArea" value=""><br><br>
        <button class="button">Buscar</button>
      </form>
  </div>
    <table>

    </table>
 


<?php
      
      foreach ($dato as $va ):
        //IMPORTANTE: Cuidado al modificar este enlace ya que envia el nombre del metodo y la id para mostrar al vacante a nuestro views.php   y asigne la vista correcta 
        echo "<tr><td><a href='views.php?m=mostrar_uno&id=".$va['id_vacante']."'>".$va['id_vacante']."</a></td><td>".$va['Sujeto_Obligado']."</td><td>S./".$va['Fecha_Modif']."</td>";
          
        echo "<td><a href='index.php?m=editar&id=".$va['id_vacante']."'>ACTUALIZAR</a> <a href='index.php?m=eliminar&id=".$va['id_vacante']."'>ELIMINAR</a></td>";
        echo "</tr>";
      endforeach;

?>


  </body>
</html>
