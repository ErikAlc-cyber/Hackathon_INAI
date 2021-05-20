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

                echo "<div class='w3-card-4 w3-display-middle' style='background-color: white; width: 80%;'>";
 
                echo "    <header class='w3-container w3-pink'>";
                echo"      <h3>".$va['Sujeto_Obligado']."</h3>";
                echo "    </header>";

                echo"    <div class='w3-container'>";
                echo"      <strong>Total de plazas Vacantes</strong><p>".$va['Tot_plazas_BVacantes']."</p>";
                echo"      <hr>";

                echo"      <strong>Estado</strong><p>".$va['Estado']."</p>";
                echo"      <strong>Fecha de Modificacion</strong><p>".$va['Fecha_Modif']."</p>";
                echo"      <strong>Periodo</strong><p>".$va['Periodo']."</p>";
                echo"      <strong>Plazas Vacantes de Base</strong><p>".$va['Tot_plazas_BVacantes']."</p>";
                echo"      <strong>Plazas Vacantes de Confianza</strong><p>".$va['Tot_plazas_CVacantes']."</p>";
                
                echo"      <strong>Area</strong><p>".$va['Area']."</p>";
                echo"      <strong>Nota</strong><p>".$va['Nota']."</p>";
                echo"    </div>";

                echo " <strong><a class='w3-button w3-block w3-grey w3-hover-pink' href='views.php?m=mostrar_contacto&id=".$va['id_contacto']."'>Contacto</a></strong>";

                echo"</div>";

                  
            endforeach
        ?>

       
            


        <script src="../static/vendor/jquery/jquery-3.6.0.min.js"></script>
        <script src="../static/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
