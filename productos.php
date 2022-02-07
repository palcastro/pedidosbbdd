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
    <title>Tabla de productos por categorías</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/forms.css">
</head>

<body>

    <?php
    require 'cabecera.php'; ?>
    <div class="container2">
        <?php
        $cat = cargar_categoria($_GET['categoria']);
        $productos = cargar_productos_categoria($_GET['categoria']);
        if ($cat === FALSE or $productos === FALSE) {
            echo "<p class='error'>Error al conectar con la base de datos</p>";
            exit;
        }

        echo "<h2>" . $cat['nombre'] . "</h2>";
        echo "<p><i><b>" . $cat['descripcion'] . "</b></i></p>";

        echo "<table>"; //abrir la tabla
        echo "<tr><th>Nombre</th><th>Descripción</th>
    <th>Peso</th><th>Stock</th><th>Comprar</th></tr>";
        foreach ($productos as $producto) {
            $cod = $producto['CodProd'];
            $nom = $producto['Nombre'];
            $des = $producto['Descripcion'];
            $peso = $producto['Peso'];
            $stock = $producto['Stock'];
            echo "<tr><td>$nom</td><td>$des</td><td>$peso</td><td>$stock</td>
        <td>
        <form action = 'anadir.php' method= 'POST'>
        <input name = 'unidades' type='number' min = '1' value = '1'>
        <input type = 'submit' value='Comprar'>
        <input name = 'cod' type= 'hidden' value = '$cod'>
        </form>
        </td>

        </tr>";
        }

        echo "</table>"
        ?>
    </div>
    <footer class="py-3 my-4">

        <p class="text-center text-muted border-top pb-4 mb-3">&copy; 2022 Pedidos, PCA</p>
    </footer>
</body>

</html>