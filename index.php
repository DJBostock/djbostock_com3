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
                <li><a href="index.php#aboutMe">About Me</a></li>
                <li><a href="index.php#projects">Projects</a></li>
            </ul>
        </nav>
        <main>
            <section id="home">
                <h2>Welcome!</h2>
                <p>Welcome to my page. It exists primarily as a sandbox for me to try stuff out.</p>
            </section>
            <section id="aboutMe">
                <h2>About Me</h2>
                <p>All the things you ever wanted to know...</p>
            </section>
            <section id="projects">
                <h2>Projects</h2>
                <p>Some very impressive representations of work done...</p>
            </section>
            <aside></aside>
        </main>
        <footer></footer>
    </div>
</body>

</html>