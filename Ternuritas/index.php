<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/css.css">
    <title>Ternuritas en la Web</title>
</head>
<body>
    <?php include "./componentes/navegacion.php"; ?>
    <main>
        <div class="contenedor-medio">
            <div class="container">
                <button id="left-btn"><i class="arrow"></i></button>
                <img id="carousel" src="" alt="Imagenes de carousel">
                <button id="right-btn"><i class="arrow"></i></button>
            </div>
        </div>
    </main>
    <section class="productos-grid contenedor">
        <article class="producto producto-article-1">
            <h2>Peluches</h2>
            <p>Más información</p>
        </article>
        <article class="producto producto-article-2">
            <h2>Llaveros</h2>
            <p>Más información</p>
        </article>
        <article class="producto producto-article-3">
            <h2>Ramos</h2>
            <p>Más información</p>
        </article>
    </section>
    <section>
        <article class="sobre-nosotros">
            <div class="sobre-nosotros__img">
                <img src="./img/logo.jpg" alt="Seccion sobre nosotros">
            </div>
            <div class="sobre-nosotros__texto">
                <h2>Sobre nosotros...</h2>
                <p>La historia detrás de "Ternuritas en la Web" es la fusión de la tradición artesanal con la innovación digital. Cada muñeco cuenta una historia única de artesanía y dedicación. La plataforma no solo vende muñecos, sino que también comparte las historias de...</p>
                <a href="nosotros.html" class="button-32">Seguir leyendo</a>
            </div>
        </article>
    </section>

    <?php include "./componentes/footer.php"; ?>

    <script src="./app.js"></script>
</body>
</html>
