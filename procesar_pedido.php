<?php
/*comprueba que el usuario haya abierto sesión o redirige*/
require 'correo.php';
require 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/forms.css">
</head>

<body>
    <?php
    require 'cabecera.php'; ?>
    <div class="container2">
        <?php
        $resul = insertar_pedido($_SESSION['carrito'], $_SESSION['usuario']['codRes']);
        if ($resul === FALSE) {
            echo "No se ha podido realizar el pedido<br>";
        } else {
            $correo = $_SESSION['usuario']['correo'];
            echo "Pedido realizado con éxito. Se enviará un correo de confirmación a: $correo ";
            $conf = enviar_correos($_SESSION['carrito'], $resul, $correo);
            if ($conf !== TRUE) {
                echo "Error al enviar: $conf <br>";
            };
            //vaciar carrito	
            $_SESSION['carrito'] = [];
        }
        ?>
    </div>
</body>

</html>