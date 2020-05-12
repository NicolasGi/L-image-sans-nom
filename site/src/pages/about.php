<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
    <title>About | L'Image Sans Nom</title>
</head>
<body class="flex">
<header>
    <nav role="navigation">
        <div class="toggle">
            <span class="burger-menu"></span>
        </div>
        <ul class="flex hidden">
            <li><a href="../../index.html">accueil</a></li>
            <li><a href="../../index.html">actualité</a></li>
            <li><a href="./event.html">événement</a></li>
            <li><a href="./library.html">bibliothéque</a></li>
            <li><a href="./book.html">livre du mois</a></li>
            <li><a href="#" class="focus">à propos</a></li>

            <li><a href="./contact.html">contact</a></li>
        </ul>
    </nav>
</header>
<main>
    <section class="header">
        <div class="header__title">
            <h2>L'Image sans nom</h2>
        </div>
        <div class="header__about flex">
            <h3 class="about__title">Qui sommes-nous</h3>
            <div class="img">
                <img src="" srcset="../assets/img/320/biblio-320.jpg 330w, ../assets/img/640/biblio-640.jpg 640w"
                     sizes="(min-width:980px) 50vw, (min-width: 640px) 50vw,  95vw" alt="" width="320" height="auto">
            </div>
            <p class="txt">L’Image sans nom est lieu d’expositions liées à la photographie et au livre, souvent aux deux.</p>

            <p class="txt"> Il est aussi un centre de documentation : fort de quelques milliers de titres, principalement de photographie, et d’autres arts également, disponibles en consultation. Il est enfin un atelier d'impression jet d’encre ouvert à toute demande.</p>
            <a href="./contact.html" class="btn-a">Nous contacter</a>
        </div>
    </section>
    <section class="exhib">
        <div class="exhib__title">
            <h3 class="about__title">Les expositions</h3>
        </div>
        <div class="exhib__about flex">
            <div class="img">
                <img src="" srcset="../assets/img/320/affiche-320.jpg 330w, ../assets/img/640/affiche-640.jpg 640w"
                     sizes="(min-width:980px) 50vw, (min-width: 640px) 50vw,  95vw" alt="" width="320" height="auto">
            </div>
            <p class="txt">
                L'Image Sans Nom organise des expositions/ des vernissages pour tous photographes voulant se faire connaître.
            </p>
            <p class="txt">
                Vous voulez exposer vos photos?
                <a href="./contact.html" class="btn">contactez-nous</a>
            </p>
            <a href="./event.html" class="btn-a">Voir nos prochaines expos</a>
        </div>
    </section>
    <section class="book">
        <div class="book__title">
            <h3 class="about__title">Les livres</h3>
        </div>
        <div class="book__about flex">
            <div class="img">
                <img src="" srcset="../assets/img/320/biblio-320.jpg 330w, ../assets/img/640/biblio-640.jpg 640w"
                     sizes="(min-width:980px) 50vw, (min-width: 640px) 50vw,  95vw" alt="" width="320" height="auto">
            </div>
            <p class="txt">Nous selectionnons chaque mois un ouvrage sur la photographie. Parmit nos 5000 livres, vous pourrez profiter de l'oeuvre selectionnée par nos soins sur le thème de la photographie. Et visitez notre espace dédier aux livres afin d'être dans un atmosphère de tranquillité tout en visonnant
                <a href="./book.html" class="btn">votre oeuvrage du mois </a></p>
            <a href="./book.html" class="btn-a">Voir notre selection du mois</a>
        </div>
    </section>
</main>
<script src="../main.js"> </script>
</body>
</html>