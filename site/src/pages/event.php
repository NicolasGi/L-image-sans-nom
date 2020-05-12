<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
    <title>Evénement | L'Image Sans Nom</title>
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
            <li><a href="#" class="focus">événement</a></li>
            <li><a href="./library.html">bibliothéque</a></li>
            <li><a href="book.php">livre du mois</a></li>
            <li><a href="about.php">à propos</a></li>
            <li><a href="./contact.html">contact</a></li>
        </ul>
    </nav>
</header>

<main>
    <section class="event" role="feed">
        <div class="event__title">
            <h2 aria-level="2" >l'image sans nom,</h2>
            <p>Evenement à venir</p>
        </div>
        <div class="event__list flex">
            <div class="event__date">
                <p class="event__date__day">29</p>
                <p>Janvier -> 07 Février</p>
            </div>
            <div class="event__subtitle">
                <h3>Vernissage</h3>
                <p>La limite des territoires</p>
            </div>
            <div class="event__card flex">
                <h3 class="event_name_artist">Edouard Decam</h3>
                <div class="img">
                    <img src="" srcset="../assets/img/320/affiche-jean-320.jpg 330w, ../assets/img/640/affiche-jean-640.jpg 640w" sizes="(min-width:980px) 30vw, (min-width: 640px) 50vw,  95vw" alt="" width="320" height="auto">
                </div>
                <a href="#" class="btn-a">Voir plus d'information</a>
            </div>
            <div class="event__date">
                <p class="event__date__day">29</p>
                <p>Janvier -> 07 Février</p>
            </div>
            <div class="event__subtitle">
                <h3>Vernissage</h3>
                <p>La limite des territoires</p>
            </div>
            <div class="event__card flex">
                <h3 class="event_name_artist">Edouard Decam</h3>
                <div class="img">
                    <img src="" srcset="../assets/img/320/affiche-jean-320.jpg 330w, ../assets/img/640/affiche-jean-640.jpg 640w" sizes="(min-width:980px) 30vw, (min-width: 640px) 50vw,  95vw" alt="" width="320" height="auto">
                </div>
                <a href="#" class="btn-a">Voir plus d'information</a>
            </div>
        </div>

    </section>
</main>
<script src="../main.js"></script>

</body>
</html>