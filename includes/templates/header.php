<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices Leo</title>
    <link rel="stylesheet" href="./build/css/app.css">
</head>

<body>

    <header class="header <?php echo $inicio ? 'inicio' : ''; ?> ">
        <div class="contenedor contenido-header">
            <div class="barra">
                <div class="logos">
                    <!-----------Logo------------>
                    <a href="/" class="imagen-logo">
                        <img src="./build/img/logo.svg" alt="Logo Bienes Raices">
                    </a>

                    <!-----------Icono Hamburguesa------------>
                    <div class="mobile-menu mh-menu-toggle" onclick="toggleMenu()">
                        <img src="build/img/barras.svg" alt="menu responsivo">
                    </div>
                </div>

                <!-----------Menu de Navegación Desktop------------>
                <nav class="navegacion">
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                </nav>

                <!-----------Menu de Navegación Mobile------------>
                <nav class="mh-nav-mobile" id="mainMenu">
                    <div class="mh-close" onclick="toggleMenu()">×</div>
                    <ul>
                        <li class="mh-current"><a href="/">Home</a></li>
                        <li> <a href="nosotros.php">Nosotros</a> </li>
                        <li> <a href="anuncios.php">Anuncios</a> </li>
                        <li><a href="blog.php">Blog</a></li>
                        <li> <a href="contacto.php">Contacto</a></li>
                    </ul>
                    <div class="mh-nav-logo">
                            <a href="/" class="imagen-logo mh-logo">
                                <img src="./build/img/logo.svg" alt="Logo Bienes Raices">
                            </a>
                    </div>
                </nav>

            </div> <!-----------Close Barra------------>

            <?php 
            
            echo $inicio ? " <h1>Venta de Casas y Departamentos</h1>" : ""
            
            ?>
           

        </div>

    </header>
