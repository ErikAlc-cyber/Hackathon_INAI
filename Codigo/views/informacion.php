<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../static/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../static/vendor/W3School/w3.css">
</head>
<body>
        <?php
          foreach ($dato as $key => $value)
	         foreach ($value as $va ):
               echo "<h1>".$va['id_vacante']."</h1>";
               echo "".$va['Sujeto_Obligado']."";
               echo "".$va['Estado']."";
               echo "".$va['Fecha_Modif']."";
               echo "".$va['Periodo']."";
               echo "".$va['Tot_plazas_BVacantes']."";
               echo "".$va['Tot_plazas_CVacantes']."";
               echo "".$va['Tot_plazas_Vacantes']."";
               echo "".$va['Area']."";
               echo "".$va['Nota']."";
               //Esta impresion solo se usa para  ver si los datos pasan a la vista correctamente
               //print_r($va);
               //IMPORTANTE: Cuidado al modificar este enlace ya que envia el nombre del metodo y la id para mostrar el contacto a nuestro views.php  y asigne la vista correcta
               echo "<h3><a href='views.php?m=mostrar_contacto&id=".$va['id_contacto']."'>Contacto</a></h3>";
            endforeach
        ?>


        <script src="../static/vendor/jquery/jquery-3.6.0.min.js"></script>
        <script src="../static/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
