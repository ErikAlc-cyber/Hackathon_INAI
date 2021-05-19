<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
        <?php
          foreach ($dato as $key => $value)
	         foreach ($value as $va ):
               echo "<h1>".$va['Sujeto_Obligado']."</h1>";
               //Esta impresion solo se usa para  ver si los datos pasan a la vista correctamente
               //print_r($va);
               //IMPORTANTE: Cuidado al modificar este enlace ya que envia el nombre del metodo y la id para mostrar el contacto a nuestro views.php  y asigne la vista correcta
               echo "<h3><a href='views.php?m=mostrar_contacto&id=".$va['id_contacto']."'>Contacto</a></h3>";
            endforeach
        ?>
</body>
</html>
