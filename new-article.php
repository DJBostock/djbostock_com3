<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
}

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Article</title>
</head>

<body>
    <header>
        <h1>New Article</h1>
    </header>
    <main>
        <form action="new-article.php" method="post">
            <div>
                <label for="article_title">Title:</label>
                <input type="text" name="article_title" id="article_title" autofocus>
            </div>
            <div>
                <label for="article_body">Message:</label>
                <textarea name="article_body" id="article_body"></textarea>
            </div>
            <button>Send</button>
        </form>
    </main>
</body>

</html>