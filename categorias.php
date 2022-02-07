<?php 
// Comprueba que el usuario haya abierto sesión o redirige
require 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de categorías</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/forms.css"
    

</head>
<body>
  <?php require 'cabecera.php'?>
 
  <div class="container1">
  <h2>LISTA DE CATEGORIAS</h2>
  <hr>
  <br>
  <!--Lista de vínculos con la forma productos.php?categoría=1-->
  <?php
  $categorias = cargar_categorias();
  if($categorias===FALSE){
      echo "<p class='error'>Error al conectar con la base de datos</p>";
  }else{
      echo "<ul>"; //abrir la lista
      foreach($categorias as $cat){
        //   $cat ['nombre] $cat ['codCat']
        $url = "productos.php?categoria=".$cat['codCat'];
        echo "<li><a href='$url'>".$cat['nombre']."</a></li>";
      }
      echo "</ul>";
  }
?>
</div>
<footer class="py-3 my-4">

    <p class="text-center text-muted border-top pb-4 mb-3">&copy; 2022 Pedidos, PCA</p>
</footer>

</body>
</html>