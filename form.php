<?php
include __DIR__ . '/includes/database.php';
// inserire il database


if ($_SERVER["REQUEST_URI"] !== '/php_bookshop/form.php?add') {

    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM libri WHERE id = ?");
    $stmt->execute([$id]);
    $details = $stmt->fetch(PDO::FETCH_ASSOC);

    $title = $_POST['title'] ?? $details['title'];
    $img = $_POST['img'] ?? $details['img'];
    $author = $_POST['author'] ?? $details['author'];
    $year = $_POST['year'] ?? $details['year'];
    $genre = $_POST['genre'] ?? $details['genre'];
    $description = $_POST['description'] ?? $details['description'];

    $error = [];

    if (strlen($title) === 0 || strlen($title) > 50) {
        $error['title'] = 'La lunghezza max 50 car.';
    };

    if (substr($img, 0, 8) <> 'https://') {
        $error['img'] = 'Deve essere un indirizzo valido: https://www.exemple.it/images/';
    }
    if (strlen($title) === 0 || strlen($title) > 25) {
        $error['author'] = 'La lunghezza max 25 car.';
    };

    if ($error === []) {
        $stmt = $pdo->prepare("UPDATE libri SET title = :title, img = :img, author = :author, year = :year, genre = :genre, description = :description WHERE id = :id");
        $stmt->execute([
            'id' => $id,
            'title' => $title,
            'img' => $img,
            'author' => $author,
            'year' => $year,
            'genre' => $genre,
            'description' => $description,
        ]);
        // header("Location: /php_bookshop/index.php");
    }
} else {
    $details = null;

    $title = $_POST['title'] ?? "";
    $img = $_POST['img'] ?? "";
    $author = $_POST['author'] ?? "";
    $year = $_POST['year'] ?? "2024";
    $genre = $_POST['genre'] ?? "";
    $description = $_POST['description'] ?? "";

    $error = [];

    if (strlen($title) === 0 || strlen($title) > 50) {
        $error['title'] = 'La lunghezza max 50 car.';
    };
    if (substr($img, 0, 8) <> 'https://') {
        $error['img'] = 'Deve essere un indirizzo valido: https://www.exemple.it/images/';
    }
    if (strlen($title) === 0 || strlen($title) > 25) {
        $error['author'] = 'La lunghezza max 25 car.';
    };

    if ($error == []) {
        $stmt = $pdo->prepare("INSERT INTO libri (title, img, author, year, genre, description) VALUES (:title, :img, :author, :year, :genre, :description)");
        $stmt->execute([
            'title' => $title,
            'img' => $img,
            'author' => $author,
            'year' => $year,
            'genre' => $genre,
            'description' => $description,
        ]);
        header("Location: /php_bookshop/index.php");
    }
}


// $error = [];

// if (strlen($number) < 10) {
//     $error['number'] = 'Please provide a valid telephon number.';
// };

// if (strlen($password) < 8) {
//     $error['password'] = 'Please provide a valid password (min length 8).';
// };

// if ($error == [] && isset($_POST['checkbox'])) {
//     header('location: /u4-w13/d2-success.php');
// };

// print_r($error);




include __DIR__ . '/includes/header_part.php';
include __DIR__ . '/includes/searchbar.php'; ?>

<div style="width: 30rem;" class="my-5 mx-auto">
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="title" value="<?= $details <> null ? "$details[title]" : "$title" ?>">
            <label for="floatingInput">Inserisci il titolo</label>
            <?= isset($error['title']) ? "$error[title]" : '' ?>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="img" value="<?= $details <> null ? "$details[img]" : "$img" ?>">
            <label for="floatingInput">Inserisci il link all'immagine</label>
            <?= isset($error['img']) ? "$error[img]" : '' ?>

        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="author" value="<?= $details <> null ? "$details[author]" : "$author" ?>">
            <label for="floatingInput">Inserisci l'autore</label>
            <?= isset($error['author']) ? "$error[author]" : '' ?>

        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="year" value="<?= $details <> null ? "$details[year]" : "$year" ?>">
            <label for="floatingInput">Inserisci l'anno di pubblicazione</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="genre" value="<?= $details <> null ? "$details[genre]" : "$genre" ?>">
            <label for="floatingInput">Inserisci il genere</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="description" value="<?= $details <> null ? "$details[description]" : "$description" ?>"></textarea>
            <label for="floatingTextarea">Inserisci la trama</label>
        </div>
        <button type="submit" class="btn btn-outline-warning small">MODIFICA</button>
        <a href="./index.php" class="btn btn-outline-success small">TORNA IN HOME</a>
    </form>
</div>

<?php include __DIR__ . '/includes/footer_part.php'; ?>