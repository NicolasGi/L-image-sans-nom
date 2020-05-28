<?php
require './header.php';
?>
<header>
    <nav role="navigation">
        <div class="toggle">
            <span class="burger-menu"></span>
        </div>
        <ul class="flex hidden">
            <li><a href="./home.php" >accueil</a></li>
            <li><a href="./event.php">événement</a></li>
            <li><a href="./library.php">bibliothéque</a></li>
            <li><a href="./book.php">livre du mois</a></li>
            <li><a href="./about.php">à propos</a></li>
            <li><a href="./contact.php">contact</a></li>
        </ul>
    </nav>
</header>
<main class="flex">
    <section class="gallery">
        <div class="gallery__title">
            <h2>Titre de la gallery</h2>
        </div>
        <div class="grid gallery__img">
            <p>Plein d'image</p>
        </div>
    </section>
</main>
<?php
require './footer.php';
?>