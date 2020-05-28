<?php
include('header.php');
?>
    <header>
        <nav role="navigation">
            <div class="toggle">
                <span class="burger-menu"></span>
            </div>
            <ul class="flex hidden">
                <li><a href="./home.php">accueil</a></li>
                <li><a href="#" class="focus">événement</a></li>
                <li><a href="./library.php">bibliothéque</a></li>
                <li><a href="./book.php">livre du mois</a></li>
                <li><a href="./about.php">à propos</a></li>
                <li><a href="./contact.php">contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="flex">
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

    </main>
<?php
include('footer.php');
?>