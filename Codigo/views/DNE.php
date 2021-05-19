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

    <p>Filtros:</p>
    <form action="DNE.php" method="post">
      <label for="Estado">Estado:</label><br>
      <input type="text" id="txtEst" value=""><br>
      <label for="Area">Area:</label><br>
      <input type="text" id="txtArea" value=""><br><br>
      <button class="button">Buscar</button>
    </form>
    <table>

    </table>
  </body>
</html>
