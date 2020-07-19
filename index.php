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
            <ul class="navbar">
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
                <div class="project">
                    <h3><a href="https://github.com/DJBostock/calculate-area-of-a-room" target="_blank">Calculate the Area of a Room in C++</a></h3>
                    <p>This is a Github repo with the code for a C++ program that can be used to calculate the area of a room.</p>
                </div>
                <div class="project">
                    <h3><a href="https://github.com/DJBostock/hello-world-java" target="_blank">Hello World in Java</a></h3>
                    <p>This is a Github repo with an example of a Hello, World program written in Java.</p>
                </div>
                <div class="project">
                    <h3><a href="https://github.com/DJBostock/helloWorldCPP" target="_blank">Hello World in C++</a></h3>
                    <p>This is a Github repo with an example of a Hello, World program written in C++</p>
                </div>
            </section>
            <section id="contactMe">
                <h2>Contact Me</h2>
                <p>All the ways that a person can get ahold of me...</p>
                <p>For the time being, it is mostly my email: <a href="mailto:douglasjbostock@gmail.com">douglasjbostock@gmail.com</a>.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum placeat reiciendis hic? Eius, inventore tenetur numquam quaerat at, nemo consectetur aspernatur quasi temporibus dignissimos magni dolor quod maxime recusandae. Corrupti?</p>
            </section>
            <aside></aside>
        </main>
        <footer>
            <p><span id="currentYear"></span>&copy;&nbsp;DJ Bostock</p>
        </footer>
    </div>
    <script src="js/script.js"></script>
</body>

</html>