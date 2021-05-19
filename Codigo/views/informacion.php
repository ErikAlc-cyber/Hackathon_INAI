<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h4> mostramos la informacion de la vacante  </h4>
        <h4> Mostrar Contacto  </h4>

        <?php
            foreach ($dato as $key => $value)
	        foreach ($value as $va ):
               echo "<h1>".$va['id_vacante']."</h1>";
               print_r($va);
               echo "<h3><a href='views.php?m=mostrar_contacto&id=".$va['id_contacto']."'>Contacto - ".$va['id_contacto']."</a></h3>";
            endforeach
        ?>
</body>
</html>