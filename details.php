<?php
include __DIR__ . '/includes/database.php';
// recuperare l'id dal url
$stmt = $pdo->prepare('SELECT * FROM libri WHERE id = ?');
$stmt->execute([$_GET["id"]]);

// recuperare l'oggetto dall'id
$book = $stmt->fetch();

include __DIR__ . '/includes/header_part.php';
include __DIR__ . '/includes/searchbar.php'; ?>

<div class="container-md m-5 mx-auto p-5">
    <div class='d-flex'>
        <div style="width: 36rem;"><img src=<?= $book['img'] ?> class='card-img-top w-100 h-100 object-fit-cover' alt='...'></div>
        <div class='card-body ms-3'>
            <h5 class='card-title'>Titolo: <?= $book['title'] ?></h5>
            <p class='card-text'>Autore: <?= $book['author'] ?></p>
            <p class='card-text'>Anno: <?= $book['year'] ?></p>
            <p class='card-text'>Genere: <?= $book['genre'] ?></p>
            <p class='card-text'>Trama: <?= $book['description'] ?></p>
        </div>
    </div>
    <div class=" mt-3">
        <a href='/php_bookshop/form.php?id=<?= $book['id'] ?>' class='btn btn-outline-warning small me-2'>MODIFICA</a>
        <a href='/php_bookshop/delete.php?id=<?= $book['id'] ?>' class='btn btn-outline-danger small'>ELIMINA</a>
    </div>

</div>

<?php

include __DIR__ . '/includes/footer_part.php';
