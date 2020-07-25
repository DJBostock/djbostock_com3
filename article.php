<?php

include './includes/db_connection.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

$sql = "SELECT *
            FROM article
            WHERE id = $id;";

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
    exit;
} else {
    $article = mysqli_fetch_assoc($results);
    // var_dump($articles);
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>My Blog</h1>
    </header>
    <main>
        <?php if ($article === null): ?>
            <p>No article found.</p>
        <?php else: ?>
            <h2><?= $article['title']; ?></h2>
            <p><?= $article['content']; ?></p>
        <?php endif; ?>
    </main>

</body>

</html>