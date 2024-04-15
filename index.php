<?php
include __DIR__ . '/includes/database.php';
// inserire il database
$stmt = $pdo->query('SELECT * FROM libri');

include __DIR__ . '/includes/header_part.php';
include __DIR__ . '/includes/searchbar.php'; ?>

<div class="container-md m-5 mx-auto">
    <div class="row">
        <?php foreach ($stmt as $book) {
            echo  "<div class='col-2'>
              <div class='card'>
                 <img src=$book[img] class='card-img-top w-100 h-100 object-fit-cover' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>$book[title]</h5>
                    <p class='card-text'>$book[author]</p>
                    <p class='card-text'>$book[year] | $book[genre]</p>
                    <a href='/php_bookshop/details.php?id=$book[id]' class='btn btn-outline-primary'>Dettagli</a>
                </div>
            </div>
        </div>";
        } ?>
    </div>
</div>

<?php

include __DIR__ . '/includes/footer_part.php';
