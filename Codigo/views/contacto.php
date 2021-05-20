<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contacto</h1>
   <?php
        foreach ($dato as $key => $value)
        foreach ($value as $va ):
           echo "<h1>".$va['id_contacto']."</h1>";
           echo "<h1>".$va['domicilio']."</h1>";
           echo "<h1>".$va['telefono']."</h1>";
           echo "<h1>".$va['email']."</h1>";
           //Esta impresion solo se usa para  ver si los datos pasan a la vista correctamente
           
           
        endforeach
   ?> 
</body>
</html>