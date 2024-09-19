<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/card.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        require_once '../config/config.php';
        require_once BASE_PATH . 'domain/entities/Libro.entity.php';
        $libros = [
            new Libro(1, 'SN123456', 'El Misterio de la Luna', 'Descubre los secretos ocultos en la luna.', new Autor(1, 'Juan Pérez'), new Idioma(1, 'Español'), new Editorial(1, 'Editorial Luna'), new Categoria(1, 'Ciencia Ficción'), new Subgenero(1, 'Espacial'), 2023, 12, 300, 'https://covers.openlibrary.org/b/id/8220752-L.jpg', 'Disponible'),
            new Libro(2, 'SN123457', 'La Magia de los Bosques', 'Bienvenido a un mundo mágico lleno de aventuras.', new Autor(2, 'Ana García'), new Idioma(2, 'Español'), new Editorial(2, 'Editorial Verde'), new Categoria(2, 'Fantasía'), new Subgenero(2, 'Aventura'), 2022, 8, 250, 'https://covers.openlibrary.org/b/id/8677113-L.jpg', 'Disponible'),
            new Libro(3, 'SN123458', 'El Viaje al Pasado', 'Viaja en el tiempo y descubre épocas olvidadas.', new Autor(3, 'Carlos López'), new Idioma(3, 'Español'), new Editorial(3, 'Editorial Tiempo'), new Categoria(3, 'Histórico'), new Subgenero(3, 'Viajes en el Tiempo'), 2021, 15, 320, 'https://covers.openlibrary.org/b/id/8235560-L.jpg', 'No Disponible'),
            new Libro(4, 'SN123459', 'La Ciudad Perdida', 'Explora la ciudad perdida y sus antiguos secretos.', new Autor(4, 'Laura Martínez'), new Idioma(4, 'Español'), new Editorial(4, 'Editorial Misterio'), new Categoria(4, 'Aventura'), new Subgenero(4, 'Exploración'), 2020, 10, 280, 'https://covers.openlibrary.org/b/id/8680643-L.jpg', 'Disponible'),
            new Libro(5, 'SN123460', 'Los Secretos del Océano', 'Sumérgete en los misterios del profundo océano.', new Autor(5, 'Ricardo Fernández'), new Idioma(5, 'Español'), new Editorial(5, 'Editorial Mar'), new Categoria(5, 'Naturaleza'), new Subgenero(5, 'Expl. Submarina'), 2019, 7, 340, 'https://covers.openlibrary.org/b/id/8687965-L.jpg', 'Disponible'),
            new Libro(6, 'SN123461', 'El Reino Encantado', 'Descubre un reino lleno de magia y leyendas.', new Autor(6, 'Sandra López'), new Idioma(6, 'Español'), new Editorial(6, 'Editorial Encanto'), new Categoria(6, 'Fantasía'), new Subgenero(6, 'Reinos Mágicos'), 2024, 11, 270, 'https://covers.openlibrary.org/b/id/8196326-L.jpg', 'Disponible'),
            new Libro(7, 'SN123462', 'El Guardián de las Estrellas', 'Acompaña al guardián en su misión estelar.', new Autor(7, 'Pedro Ruiz'), new Idioma(7, 'Español'), new Editorial(7, 'Editorial Galaxia'), new Categoria(7, 'C. Ficción'), new Subgenero(7, 'Aven. Espacial'), 2021, 9, 310, 'https://covers.openlibrary.org/b/id/8240645-L.jpg', 'No Disponible'),
            new Libro(8, 'SN123463', 'El Tesoro Escondido', 'En busca del tesoro escondido en tierras lejanas.', new Autor(8, 'Marta Jiménez'), new Idioma(8, 'Español'), new Editorial(8, 'Editorial Tesoro'), new Categoria(8, 'Aventura'), new Subgenero(8, 'Caza de Tesoros'), 2023, 14, 330, 'https://covers.openlibrary.org/b/id/8258735-L.jpg', 'Disponible'),
            new Libro(9, 'SN123464', 'La Última Profecía', 'Descubre la profecía que cambiará el mundo.', new Autor(9, 'Luis Morales'), new Idioma(9, 'Español'), new Editorial(9, 'Editorial Profecía'), new Categoria(9, 'Misterio'), new Subgenero(9, 'Profecías'), 2022, 13, 290, 'https://covers.openlibrary.org/b/id/8217894-L.jpg', 'Disponible'),
            new Libro(10, 'SN123465', 'El Código Perdido', 'Resuelve el enigma del código perdido de la antigüedad.', new Autor(10, 'Patricia Gómez'), new Idioma(10, 'Español'), new Editorial(10, 'Editorial Código'), new Categoria(10, 'Thriller'), new Subgenero(10, 'Enigmas'), 2024, 6, 310, 'https://covers.openlibrary.org/b/id/8234202-L.jpg', 'Disponible')
        ];
    ?>
    <section class="books">
        <?php
        foreach($libros as $libro) { ?>
            <div class="card">
                <div class="card-image">
                    <img class="blur-image" src=<?php echo $libro->getUrlImagen()?> alt="Cactus imagen">
                    <img class="card-image-img" src=<?php echo $libro->getUrlImagen()?> alt="Cactus imagen">
                </div>
                <div class="card-tag">
                    <span class="tag-title"><?php echo $libro->getCategoria()->getNombre()?></span>
                    <span class="tag-title"><?php echo $libro->getIdioma()->getNombre()?></span>
                    <span class="tag-title"><?php echo $libro->getSubgenero()->getNombre()?></span>
                </div>
                <div class="card-content">

                    <h2><?php echo $libro->getNombre()?></h2>
                    <p><?php echo $libro->getSinopsis()?></p>
                </div>
                <div class="card-footer">
                    <span class="author"><?php echo $libro->getAutor()->getNombre()?></span>
                </div>
            </div>
        <?php } ?>
    </section>

</body>

</html>