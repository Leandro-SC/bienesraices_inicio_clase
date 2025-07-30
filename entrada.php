<?php 
require 'includes/funciones.php';

incluirTemplate('header');

?>

    <main class="contenedor seccion contenido-centrado contenido-entrada">
        <h1>Casa Frente al Bosque</h1>

        <picture>
            <source srcset="./build/img/destacada2.webp" type="image/webp">
            <source srcset="./build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="./build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
                  <div class="texto-entrada">
    
                        <p>
                            <strong>Escrito el:</strong> <span>20/10/2024</span> <br>
                            <strong>Autor</strong>: <span>Leo</span>
                        </p>
                        <p>
                            <strong>Consejos para construir una terraza con los mejores materiales</strong>
                        </p>
   
                </div>

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

   <?php incluirTemplate('footer'); ?>