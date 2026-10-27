<?php
    if(!isset($_SESSION)){
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/bienesRaicesPHP_inicio/build/css/app.css">
</head>
<body>
    
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/bienesRaicesPHP_inicio/">
                    <img src="/bienesRaicesPHP_inicio/build/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="/bienesRaicesPHP_inicio/build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="/bienesRaicesPHP_inicio/build/img/dark-mode.svg" alt="boton dark mode">
                    <nav class="navegacion">
                        <a href="/bienesRaicesPHP_inicio/nosotros.php">Nosotros</a>
                        <a href="/bienesRaicesPHP_inicio/anuncios.php">Anuncios</a>
                        <a href="/bienesRaicesPHP_inicio/blog.php">Blog</a>
                        <a href="/bienesRaicesPHP_inicio/contacto.php">Contacto</a>
                        <?php if($auth): ?>
                            <a href="/bienesRaicesPHP_inicio/cerrar-sesion.php">Cerrar Sesión</a>
                        <?php else: ?>
                            <a href="/bienesRaicesPHP_inicio/login.php">Iniciar Sesión</a>
                        <?php endif; ?>
                    </nav>
                </div>
                
            </div> <!--.barra-->
            <?php
                if($inicio){
                    echo "<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>";
                }
            ?>
        </div>
    </header>