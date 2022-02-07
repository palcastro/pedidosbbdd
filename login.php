<?php
require_once 'bd.php';
// formulario de login habitual
// si va bien abre sesión, guarda el nombre de usuario y redirige a principal-php
// si va mal, mensaje de error
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usu = comprobar_usuario($_POST['usuario'], $_POST['clave']);
    if ($usu === FALSE) {
        $err = TRUE;
        $usuario = $_POST['usuario'];
    } else {
        session_start();
        //  $usu tiene campos correo y codRes, correo
        $_SESSION['usuario'] = $usu;
        $_SESSION['carrito'] = [];
        header("Location:categorias.php");
        return;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Formulario de login</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/forms.css">
</head>

<body>
    <?php if (isset($_GET["redirigido"])) {
        echo "<p>Haga login para continuar</p>";
    } ?>
    <?php if (isset($err) and $err == TRUE) {
        echo "<p>Revise usuario y contraseñas</p>";
    } ?>

    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <label for="usuario">USUARIO</label>
            <input value="<?php if (isset($usuario)) echo $usuario; ?>" id="usuario" name="usuario" type="text">
            <br>
            <label for="clave"> CLAVE</label>
            <input id="clave" name="clave" type="password">
            <br>
            <input class="btn" type="submit">
        </form>
    </div>
    <footer class="py-3 my-4">

        <p class="text-center text-muted border-top pb-4 mb-3">&copy; 2022 Pedidos, PCA</p>
    </footer>
</body>

</html>