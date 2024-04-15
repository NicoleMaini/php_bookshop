<?php
include __DIR__ . '/includes/database.php';
// inserire il database
$stmt = $pdo->query('SELECT * FROM libri');

include __DIR__ . '/includes/header_part.php';
include __DIR__ . '/includes/searchbar.php'; ?>

<div class="container-md m-5 mx-auto">
    <div class="row">
        <?php foreach ($stmt as $book) {
            echo  "<div class='col-sm-6 col-md-4 col-lg-3 col-xl-2 mt-3'>
              <div class='card h-100'>
                <div style='height: 20rem'> <img src=$book[img] class='card-img-top w-100 h-100 object-fit-cover' alt='...'></div>
                <div class='card-body d-flex flex-column'>
                   <div>
                        <h5 class='card-title'>$book[title]</h5>
                        <p class='card-text'>$book[author]</p>
                   </div>
                   <div class='mt-auto'>
                        <p class='card-text mt-auto'>$book[year] | $book[genre]</p>
                        <a href='/php_bookshop/details.php?id=$book[id]' class='btn btn-outline-primary'>Dettagli</a>
                   </div>
                </div>
            </div>
        </div>";
        } ?>
    </div>
</div>

<?php

include __DIR__ . '/includes/footer_part.php';
