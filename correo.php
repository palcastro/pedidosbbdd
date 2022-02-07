<?php
use PHPMailer\PHPMailer\PHPMailer;
// require dirname(__FILE__). "./vendor/autoload.php";
require_once './vendor/autoload.php';
function enviar_correos($carrito, $pedido, $correo){
    $cuerpo = crear_correo($carrito, $pedido, $correo);
    return enviar_correo_multiples("$correo", "madrid1@empresa.com", "$cuerpo", "Pedido $pedido confirmado");
}
// crear correo
function crear_correo($carrito, $pedido, $correo){
    $texto = "<h1>Pedido nº $pedido</h1><h2>Restaurante: $correo </h2>";
    $texto.= "Detalle del pedido:";
    $productos = cargar_productos(array_keys($carrito));

    $texto.= "<table>"; //abrir la tabla
    $texto.= "<tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Peso</th>
                <th>Unidades</th>
                <th>Eliminar</th>
            </tr>";
    foreach ($productos as $producto){
        $cod = $producto['CodProd'];
        $nom = $producto['Nombre'];
        $des = $producto['Descripcion'];
        $peso = $producto['Peso'];
        $unidades = $_SESSION['carrito'][$cod];
        $texto.= "<tr>
                    <td>$nom</td>
                    <td>$des</td>
                    <td>$peso</td>
                    <td>$unidades</td>
                </tr>";
    }
    $texto.= "</table>";
    return $texto;
}


function enviar_correo_multiples($lista_correos, $cuerpo, $asunto=""){
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMPTDebug = 0;
    
}


?>