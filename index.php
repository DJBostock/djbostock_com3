<?php

$title = "DJ Bostock";

?>

<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1><?= $title; ?></h1>
            <img src="/images/happy-stick.jpg" class="hero" alt="smiling stick figure head and shoulders">
        </header>
        <nav>
            <ul>
                <li><a href="index.php#home">Home</a></li>
            </ul>
        </nav>
        <main>
            <section id="home">
                <h2>Welcome!</h2>
                <p>Welcome to my page. It exists primarily as a sandbox for me to try stuff out.</p>
            </section>
            <aside></aside>
        </main>
        <footer></footer>
    </div>
</body>

</html>