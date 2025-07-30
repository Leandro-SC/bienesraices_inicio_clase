<?php 
require 'includes/funciones.php';

incluirTemplate('header');

?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa Frente al Bosque</h1>

        <picture>
            <source srcset="./build/img/destacada.webp" type="image/webp">
            <source srcset="./build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="./build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">
                $3,000,000
            </p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img loading="lazy" src="./build/img/icono_wc.svg" alt="Icono de Baño">
                    <p>1</p>
                </li>
                <li>
                    <img loading="lazy" src="./build/img/icono_dormitorio.svg" alt="icono_dormitorio">
                    <p>2</p>
                </li>
                <li>
                    <img loading="lazy" src="./build/img/icono_estacionamiento.svg" alt="icono_estacionamiento">
                    <p>1</p>
                </li>

            </ul>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum autem ad eius harum ipsum, similique,
                tempore distinctio quaerat porro fuga in pariatur, ab amet laborum perferendis eum debitis dicta!
                Facilis? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum autem ad eius harum ipsum,
                similique,
                tempore distinctio quaerat porro fuga in pariatur, ab amet laborum perferendis eum debitis dicta!
                Facilis?</p>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum autem ad eius harum ipsum, similique,
                tempore distinctio quaerat porro fuga in pariatur, ab amet laborum perferendis eum debitis dicta!
                Facilis?
            </p>
        </div>


    </main>



    <!-----------Pie de Página------------>
<?php incluirTemplate('footer'); ?>