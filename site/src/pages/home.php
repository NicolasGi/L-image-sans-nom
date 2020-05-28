<?php
include './header.php';
?>


<header class="home">
    <nav role="navigation" class="">
        <div class="toggle">
            <span class="burger-menu"></span>
        </div>

        <ul class="flex hidden">
            <li><a href="#" class="focus">accueil</a></li>
            <li><a href="./event.php">événement</a></li>
            <li><a href="./library.php">bibliothéque</a></li>
            <li><a href="./book.php">livre du mois</a></li>
            <li><a href="./about.php">à propos</a></li>
            <li><a href="./contact.php">contact</a></li>
        </ul>
    </nav>

    <div class="title .hidden">
        <span>L'</span> <span>Image</span> <span>Sans</span> <span>Nom</span>
    </div>
</header>
<main role="main" class="flex">
    <section class="facebook" role="feed">
        <div class="facebook__feed">
            <div class="facebook__title">
                <h2 aria-level="2">l'image sans nom,</h2>
                <p>Les dernières actualités</p>
            </div>
            <div class="facebook__card flex" id="actus">
                <div class="img">
                    <img class="facebook__img" src=""
                         srcset="../assets/img/320/affiche-jean-320.jpg 330w, ../assets/img/640/affiche-jean-640.jpg 640w"
                         sizes="(min-width:980px) 30vw, (min-width: 640px) 60vw,  100vw" width="320" height="auto"
                         alt="Photo prise par Alvarez Valle Cathy d'une cathédrale de.."
                         title="photo prise par Alvarez Valle Cathy">
                </div>
                <p class="facebook__txt txt ">
                    En attendant de pouvoir vous inviter à la magnifique exposition que Alvarez Valle Cathy a préparé
                    pour vous..
                </p>
                <a href="https://www.facebook.com/pg/limagesansnom/posts/?ref=page_internal" target="_blank" class="btn-a">Visitez notre page facebook</a>

            </div>
            <div class="facebook__card flex">
                <div class="img">
                    <img class="facebook__img" src=""
                         srcset="../assets/img/320/affiche-320.jpg 330w, ../assets/img/640/affiche-640.jpg 640w"
                         sizes="(min-width:980px) 30vw, (min-width: 640px) 60vw,  100vw" width="320" height="auto"
                         alt="Vernissage apéro, un live instagram le vendredi 18:00"
                         title="Affiche pour le vernissage de Henri C">

                </div>
                <p class="facebook__txt txt">
                    Ce vendredi 20 Mars, nous organisons un apéro LIVE instagram et conversation avec Camille Carb pour
                    le lancement du livre 'Quand l'océan se retire de Henri C' chez Macaonibook.
                </p>
            </div>
        </div>
    </section>

    <section class="event" id="event">
        <div class="event__title">
            <h2 aria-level="2">l'image sans nom,</h2>
            <p>Futurs événements</p>
        </div>
        <div class="event__info flex">
            <div class="event__subtitle">
                <h3 aria-level="3">Vernissage</h3>
                <p>La limite des territoires</p>
            </div>
            <div class="event__date">
                <p class="event__date__day">29</p>
                <p>Janvier -> <span>07</span> Février</p>
            </div>

            <div class="event__card flex">
                <h3 class="event_name_artist">Edouard Decam</h3>
                <div class="img">
                    <img src=""
                         srcset="../assets/img/320/affiche-jean-320.jpg 330w, ../assets/img/640/affiche-jean-640.jpg 640w"
                         sizes="(min-width:980px) 30vw, (min-width: 640px) 50vw,  95vw" alt="" width="320"
                         height="auto">
                </div>
                <p class="event__txt txt">
                    Ce vendredi 29 Janvier, nous organisons un apéro LIVE instagram et conversation avec Camille Carb
                    pour le lancement du livre 'Quand l'océan se retire de Henri C' chez Macaonibook.
                </p>
                <a href="./event.php" class="btn-a flex">Voir les prochains vernissages</a>
            </div>
        </div>
        <div class="event__info flex">
            <div class="event__subtitle">
                <h3 aria-level="3">Vernissage</h3>
                <p>La limite de nico et oui</p>
            </div>
            <div class="event__date">
                <p class="event__date__day">30</p>
                <p>Janvier -> <span>05</span> Février</p>
            </div>

            <div class="event__card flex">
                <h3 class="event_name_artist">Nicolas Gilson</h3>
                <div class="img">
                    <img src=""
                         srcset="../assets/img/320/affiche-jean-320.jpg 330w, ../assets/img/640/affiche-jean-640.jpg 640w"
                         sizes="(min-width:980px) 30vw, (min-width: 640px) 50vw,  95vw" alt="" width="320"
                         height="auto">
                </div>
                <p class="event__txt txt">
                    Ce vendredi 29 Janvier, nous organisons un apéro LIVE instagram et conversation avec Camille Carb
                    pour le lancement du livre 'Quand l'océan se retire de Henri C' chez Macaonibook.
                </p>
                <a href="./event.php" class="btn-a flex">Voir les prochains vernissages</a>
            </div>
        </div>
        <div class="event__info flex">
            <div class="event__subtitle">
                <h3 aria-level="3">Vernissage</h3>
                <p>La limite de nico et oui</p>
            </div>
            <div class="event__date">
                <p class="event__date__day">31</p>
                <p>Janvier -> <span>05</span> Février</p>
            </div>

            <div class="event__card flex">
                <h3 class="event_name_artist">Nicolas GIlson</h3>
                <div class="img">
                    <img src=""
                         srcset="../assets/img/320/affiche-jean-320.jpg 330w, ../assets/img/640/affiche-jean-640.jpg 640w"
                         sizes="(min-width:980px) 30vw, (min-width: 640px) 50vw,  95vw" alt="" width="320"
                         height="auto">
                </div>
                <p class="event__txt txt">
                    Ce vendredi 29 Janvier, nous organisons un apéro LIVE instagram et conversation avec Camille Carb
                    pour le lancement du livre 'Quand l'océan se retire de Henri C' chez Macaonibook.
                </p>
                <a href="./event.php" class="btn-a flex">Voir les prochains vernissages</a>
            </div>
        </div>
    </section>
    <section class="library" id="library">
        <div class="library__title">
            <h2 aria-level="2">l'image sans nom,</h2>
            <p>Un espace dédié aux livres</p>
        </div>
        <div class="library__card flex">
            <h3>bibliothéque</h3>
            <div class="img">
                <img src="" srcset="../assets/img/320/biblio-320.jpg 330w, ../assets/img/640/biblio-640.jpg 640w"
                     sizes="(min-width:980px) 75vw, (min-width: 640px) 50vw,  95vw" alt="" width="320" height="auto">

            </div>
            <p class="library__txt txt">
                Un lieu pour les livres et la photographie
                L’Image sans nom est lieu d’expositions. Il est aussi un centre de documentation : fort de quelques
                milliers de titres, principalement de Un lieu pour les livres et la photographie

            </p>
            <a href="./contact.php" class="btn-a">Visitez la bibliothèque</a>

            <!--<p class="txt library__txt">
                photographie, et d’autres arts également... disponibles en consultation. Il est enfin un atelier
                d'impression jet d’encre ouvert à toute demande.
                Le lieu se veut un point de rencontre pour tous les amateurs ou amoureux de livres et de photographie,
                et il propose depuis février 2018, sous la houlette d’Olivier Cornil, Emmanuel d’Autreppe, Christophe
                Collas et Matthieu Litt une série d’événements (pour) petits et grands, ateliers et rencontres, lectures
                et projections, expositions et interventions, séminaires et réveillons…
                Un lieu à taille humaine et à hauteur d’images, pour prendre le temps de grignoter avec les yeux,
                découvrir, échanger!t
            </p>-->
            <!--<div class="button">
                <button>Voir plus</button>
            </div>-->
        </div>
    </section>
    <section class="book" id="book">
        <div class="book__title">
            <h2 aria-level="2">l'image sans nom,</h2>
            <p>vous propose le livre du mois</p>
        </div>
        <div class="book__card flex">
            <h3 aria-level="3">Buenos aires XXMIII</h3>
            <div class="img">
                <img src="" srcset="../assets/img/320/book-320.jpg 330w, ../assets/img/640/book-640.jpg 640w"
                     sizes="(min-width:980px) 50vw, (min-width: 640px) 50vw,  95vw" alt="" width="320" height="auto">
            </div>
            <p class="book__txt txt">
                Photos prisent par Mauricio, cet ouvrage vous illustre sa vie dans les quartiers modestes et chauds de
                Buenos Aires. Cette pratique devient une passion ce photographe.
            </p>
            <a href="./book.php" class="btn-a">Voir les informations </a>
        </div>
    </section>

</main>
<?php
require './footer.php';
?>
