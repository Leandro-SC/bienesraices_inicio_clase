<?php 
require 'includes/funciones.php';

incluirTemplate('header');

?>

    <main class="contenedor seccion">
        <h1>Nuestro Blog</h1>

         <!-----------Primera Entrada Blog----------->
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="./build/img/blog1.webp" type="image/webp">
                        <source srcset="./build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="./build/img/blog1.jpg" alt="blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p>
                            Escrito el: <span>20/10/2024</span> por: <span>Leo</span>
                        </p>
                        <p>
                            Consejos para construir una terraza con los mejores materiales
                        </p>
                    </a>
                </div>
            </article>

            <!-----------Segunda Entrada Blog----------->
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="./build/img/blog2.webp" type="image/webp">
                        <source srcset="./build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="./build/img/blog2.jpg" alt="blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p>
                            Escrito el: <span>20/10/2024</span> por: <span>Leo</span>
                        </p>
                        <p>
                            Consejos para construir una terraza con los mejores materiales
                        </p>
                    </a>
                </div>
            </article>

            <!-----------Tercera Entrada Blog----------->
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="./build/img/blog3.webp" type="image/webp">
                        <source srcset="./build/img/blog3.jpg" type="image/jpeg">
                        <img loading="lazy" src="./build/img/blog3.jpg" alt="blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p>
                            Escrito el: <span>20/10/2024</span> por: <span>Leo</span>
                        </p>
                        <p>
                            Consejos para construir una terraza con los mejores materiales
                        </p>
                    </a>
                </div>
            </article>


    </main>

    <!-----------Pie de Página------------>
<?php incluirTemplate('footer'); ?>