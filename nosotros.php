<?php 
require 'includes/funciones.php';

incluirTemplate('header');

?>

     <!-----------Contenido Principal------------>
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="./build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de Experiencia
                </blockquote>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse sit soluta aperiam magni, qui vel ab
                    iste impedit et nobis suscipit. Tenetur, maiores. Eum ullam laboriosam commodi. Minima, quaerat
                    commodi.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum!
                    Quisquam, voluptatum! Quisquam, voluptatum! Quisquam, voluptatum!
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum!
                    Quisquam, voluptatum! Quisquam, voluptatum! Quisquam, voluptatum!
                </p>

            </div>
        </div>

    </main>

     <!----------Seccion iconos------------>
       <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>

        <!--------Sección Iconos---------->
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="./build/img/icono1.svg" alt="Icono de Seguridad">
                <h3>Seguridad</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima placeat ratione doloribus eum ullam,
                    quas ipsum, suscipit consectetur quibusdam rem beatae? Fugiat mollitia voluptas, vitae nostrum
                    eveniet delectus iste perferendis.</p>
            </div>

            <div class="icono">
                <img src="./build/img/icono2.svg" alt="Icono de Precio">
                <h3>Precio</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima placeat ratione doloribus eum ullam,
                    quas ipsum, suscipit consectetur quibusdam rem beatae? Fugiat mollitia voluptas, vitae nostrum
                    eveniet delectus iste perferendis.</p>
            </div>

            <div class="icono">
                <img src="./build/img/icono3.svg" alt="Icono de Tiempo">
                <h3>Tiempo</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima placeat ratione doloribus eum ullam,
                    quas ipsum, suscipit consectetur quibusdam rem beatae? Fugiat mollitia voluptas, vitae nostrum
                    eveniet delectus iste perferendis.</p>
            </div>
        </div>
    </section>
    

    <!-----------Pie de Página------------>
<?php incluirTemplate('footer'); ?>