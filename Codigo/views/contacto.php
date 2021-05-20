<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/vendor/W3School/w3.css">
    <title>Document</title>
</head>
<body>
   <?php
        foreach ($dato as $key => $value)
        foreach ($value as $va ):           
           echo "<div class='w3-card-4 w3-display-middle' style='background-color: white; width: 80%;'>";
 
           echo "    <header class='w3-container w3-pink'>";
           echo"      <h3>INFORMACION DE CONTACTO</h3>";
           echo "    </header>";

           echo"    <div class='w3-container'>";
           echo"      <strong>Domicilio</strong><p>".$va['domicilio']."</p>";
           echo"      <hr>";
           echo"      <strong>Area</strong><p>".$va['telefono']."</p>";
           echo"      <strong>Nota</strong><p>".$va['email']."</p>";
           echo"    </div>";

           

           echo"</div>";
           //Esta impresion solo se usa para  ver si los datos pasan a la vista correctamente
           
           
        endforeach
   ?> 
</body>
</html>