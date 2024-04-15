<?php
include __DIR__ . '/database.php';
// reuperiavo hli iggetti dal database 
$stmt = $pdo->query('SELECT * FROM libri');
$search = $_GET['search'] ?? ""; // se non c'è è stringa vuota
$stmt = $pdo->prepare("SELECT * FROM libri WHERE title LIKE ?");
$stmt->execute([
    "%$search%"
]);
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PHP-Bookshoop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Generi
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Contemporaneo</a></li>
                        <li><a class="dropdown-item" href="#">Narrativa</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex me-2" role="search">
                <input class="form-control me-2" type="search" name="search" value="<?= $search ?>" placeholder="Cerca un libro..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Cerca</button>
            </form>
            <a href='/php_bookshop/form.php?add' class='btn btn-outline-primary'>+</a>
        </div>
    </div>
</nav>