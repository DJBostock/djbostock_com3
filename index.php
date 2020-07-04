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
                <li><a href="index.php#contactMe">Contact Me</a></li>
            </ul>
        </nav>
        <main>
            <section id="home">
                <h2>Welcome!</h2>
                <p>Welcome to my page. It exists primarily as a sandbox for me to try stuff out.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque velit magni voluptate officia placeat nam suscipit dolores quaerat, non omnis dignissimos voluptas alias quae dolorum optio cupiditate ut aut quia?</p>
            </section>
            <section id="aboutMe">
                <h2>About Me</h2>
                <p>All the things you ever wanted to know...</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim laudantium voluptatem tenetur expedita, blanditiis quas veritatis dicta fugit veniam id? Accusamus, quas deleniti! Quia itaque ullam quae maxime culpa quas.</p>
            </section>
            <section id="projects">
                <h2>Projects</h2>
                <p>Some very impressive representations of work done...</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, accusamus velit. Enim officia dolore consequatur beatae! Facilis, odio repellat est dolorum explicabo eaque nihil ducimus harum sed sint fugiat aperiam?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel eaque amet fugit corrupti aut, numquam fugiat quae, at magni, earum harum sit dignissimos deleniti necessitatibus. Magni modi ad praesentium non!</p>
            </section>
            <section id="contactMe">
                <h2>Contact Me</h2>
                <p>All the ways that a person can get ahold of me...</p>
                <p>For the time being, it is mostly my email: <a href="mailto:douglasjbostock@gmail.com">douglasjbostock@gmail.com</a>.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum placeat reiciendis hic? Eius, inventore tenetur numquam quaerat at, nemo consectetur aspernatur quasi temporibus dignissimos magni dolor quod maxime recusandae. Corrupti?</p>
            </section>
            <aside></aside>
        </main>
        <footer></footer>
    </div>
    <script src="js/script.js"></script>
</body>

</html>