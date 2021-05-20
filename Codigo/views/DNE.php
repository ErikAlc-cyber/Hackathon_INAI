<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../static/vendor/fontawesome/css/font-awesome.min.css">

  <title>Menu Principal</title>


</head>
<body>
<h1>
    <table align="center">
      <td><img src="../imagenes/titulo.png" alt="Logo" class="logo"></td>
      <td><p class="titulo">Menu Principal</p></td>
    </table>
    </h1>

    <ul>
      <li><a href="../index.php">Pagina Principal</a></li>
      <li><a href="views.php" class="active">DNE</a></li>
      <li><a href="../Documentacion/InvestigacionPNT.pdf">Porque del proyecto?</a></li>
      <li><a href="http://www.snt.org.mx/">Que es el PNT?</a></li>
      <li><a href="http://www.snt.org.mx/index.php/consejo-nacional/acuerdos">Que hace el PNT?</a></li>
      <li><a href="perfiles.html">Info. Creadores</a></li>
  </ul>
  <div class="menu">
      <p>Filtros:</p>
          <h2>Ordenar por:</h2>

          <h4>Matricula</h4>
          <a href='views.php?col=id_vacante&order=asc'><i class='fa fa-arrow-circle-up' aria-hidden='true'></i></a>

          <a href='views.php?col=id_vacante&order=desc'>
                <i class='fa fa-arrow-circle-down' aria-hidden='true'></i>
                </a>

          <h4>Estado</h4>
          <a href='views.php?col=estado&order=asc'><i class='fa fa-arrow-circle-up' aria-hidden='true'></i></a>
          <a href='views.php?col=estado&order=desc'><i class='fa fa-arrow-circle-down' aria-hidden='true'></i></a>
  </div>

<?php

      echo '<table class="datos"> <tr> <th>Identificacion</th> <th>Estado</th> <th>Nombre</th> <th>Ultima fecha disponible</th> <th>Mas informacion</th> <th>Elimina este registro</th> </tr>';
      foreach ($dato as $va ):
        //IMPORTANTE: Cuidado al modificar este enlace ya que envia el nombre del metodo y la id para mostrar al vacante a nuestro views.php   y asigne la vista correcta
        echo "<tr><td><a href='views.php?m=mostrar_uno&id=".$va['id_vacante']."'>".$va['id_vacante']."</a></td> <td>".$va['Estado']."</td> <td>".$va['Sujeto_Obligado']."</td><td>S./".$va['Fecha_Modif']."</td>";

        echo "<td><a href='views.php?m=mostrar_uno&id=".$va['id_vacante']."'>Mas Informacion</a></td> <td><a href='index.php?m=eliminar&id=".$va['id_vacante']."'>ELIMINAR</a></td>";
        echo "</tr>";
      endforeach;
      echo "</table>";

?>

<<<<<<< HEAD
=======
    <h2>Ordenar por:</h2>
<div style="display: inline-block;">
  <h4>Matricula</h4>
    <a href='views.php?col=id_vacante&order=asc'><i class='fa fa-arrow-circle-up' aria-hidden='true'></i></a>

    <a href='views.php?col=id_vacante&order=desc'>
          <i class='fa fa-arrow-circle-down' aria-hidden='true'></i>
          </a>
</div>
  
<div style="display: inline-block;">
    <h4>Estado</h4>
    <a href='views.php?col=estado&order=asc'><i class='fa fa-arrow-circle-up' aria-hidden='true'></i></a>
    <a href='views.php?col=estado&order=desc'><i class='fa fa-arrow-circle-down' aria-hidden='true'></i></a>
</div>

>>>>>>> 74017f1eea0c8b69ec6e55a7399aad28d36b46f3
</body>
</html>
