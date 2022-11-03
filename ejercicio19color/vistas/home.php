<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/default.css">
  <title>Ejercicio 19 colores</title>  
  <style>
  body{
   /*Leerá la cookie si está creada y obtendrá el campo color para añadirlo como fondo de página */
      background-color: <?php echo isset($_COOKIE["color"]) ? $_COOKIE['color'] : "white";  echo ";" ?>
  } 

  </style>
</head>
<body>  
   <!--Introducción y link para ir a la página de selección de colores  -->
    <h3>Página de cambio de color de fondo de página</h3>
    <a href="?method=colores">Elija un color de fondo de página</a>  
    
  </body>
</html>