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
      <td><img src="../../Documentacion/imagenes/titulo.png" alt="Logo" class="logo"></td>
      <td><p class="titulo">Menu Principal</p></td>
    </table>
    </h1>

    <ul>
      <li><a href="../index.php">Pagina Principal</a></li>
      <li><a href="#" class="active">DNE</a></li>
      <li><a href="../../Documentacion/InvestigacionPNT.pdf">Porque del proyecto?</a></li>
      <li><a href="http://www.snt.org.mx/">Que es el PNT?</a></li>
      <li><a href="http://www.snt.org.mx/index.php/consejo-nacional/acuerdos">Que hace el PNT?</a></li>
      <li><a href="perfiles.html">Info. Creadores</a></li>
  </ul>
  <div class="filtros">
      <p align="center">Filtros:</p>

      <form action="DNE.php" method="post" id="filtro">
        <h2><label for="Estado">Estado:</label><br></h2>
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
      </form>

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
</body>
</html>
