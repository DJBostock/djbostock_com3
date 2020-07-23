<?php

include './includes/db_credentials.php';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
} else {
    $sql = "SELECT *
            FROM article
            WHERE id = 1;";

    $results = mysqli_query($conn, $sql);

    if ($results === false) {
        echo mysqli_error($conn);
        exit;
    } else {
        $article = mysqli_fetch_assoc($results);
        // var_dump($articles);
    }
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