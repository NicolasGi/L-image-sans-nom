<?php
require './header.php';
?>
<body class="flex">
<header>
    <nav role="navigation">
        <div class="toggle">
            <span class="burger-menu"></span>
        </div>
        <ul class="flex hidden">
            <li><a href="./home.php">accueil</a></li>
            <li><a href="./event.php">événement</a></li>
            <li><a href="#" class="focus">bibliothéque</a></li>
            <li><a href="./book.php">livre du mois</a></li>
            <li><a href="./about.php">à propos</a></li>
            <li><a href="./contact.php">contact</a></li>
        </ul>
    </nav>
</header>
<main class="flex">
    <section class="library flex">
        <h2>Ici pose de la bibliothèque</h2>
    </section>
</main>
<?php
require './footer.php';
?>