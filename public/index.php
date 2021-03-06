<?php
require_once "../admin/connection.php";
require_once "../admin/functions.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >
    <link rel="stylesheet" href="styles/styles.css">
    <title>Une année de voyages</title>
</head>
<body>

    <section class="Find" style="background-image: url('img/wow.jpg')">

        <div class="Menu--isActive">
            <div class="Oneplug__closeIconContainer">
                <img class="Menu__closeIcon" src="../img/close.svg" alt="Close icon">
            </div>
            <ul class="Menu__navigationActived">
                <li class="Menu__navigationActivedElement"><a href="../index.php">Accueil</a></li>
                <li class="Menu__navigationActivedElement"><a href="../bons-plans-aériens/">Bons plans</a></li>
                <li class="Menu__navigationActivedElement"><a href="../contact.php">Contact</a></li>
                <li class="Menu__navigationActivedElement"><a href="../classement-resto/">Top 100 Restos</a></li>
                <li class="Menu__navigationActivedElement"><a href="../classement-hotel/">Top 100 Hôtels</a></li>
                <li class="Menu__navigationActivedElement"><a href="../classement-spas/">Top 100 Spas</a></li>
            </ul>
        </div>
        <header class="Header">
            <div class="Logo">
                <a href="index.php"><img class="Logo__img" src="../img/logo.png" alt="Logo"></a>
                <span class="Logo__name"></span>
            </div>
            <div class="Menu">
                <img class="Menu__burger" src="img/burger_menu.svg" alt="burger icon">
            </div>
        </header>

        <h1 class="Find__mainTitle">TROUVEZ LE VOYAGE QUI VOUS RESSEMBLE.</h1>
        <div class="Find__searchContainer">
            <div class="Find__searchBox">
                <h2 class="Find__searchTitle">Choisissez une destination</h2>
                <form class="Find_form" action="résultat-recherche/" method="post">
                    <p class="Find__text">Où?</p>
                    <input class="Find__location" type="text" placeholder="France...">
                    <p class="Find__text">Catégorie?</p>
                    <select class="Find__category" type="text">
                        <option value="Gastronomie">Gastronomie</option>
                        <option value="Hôtellerie">Hôtellerie</option>
                        <option value="Bien-être">Bien-être</option>
                    </select>
                    <br>
                    <div class="Find__submitContainer">
                        <input class="Find__submit" type="submit" value="Rechercher">
                    </div>
                </form>
            </div>
        </div>

    </section>

    <section class="Desc">

        <div class="Desc__content">
            <div class="Desc__titleContainer">
                <h3 class="Desc__title">Voyageons ensemble</h3>
                <div class="Desc__titleLine"></div>
            </div>
            <div class="Desc__travelContent">
                <div class="Desc__travelBox">
                    <img class="Desc__travelImg" src="img/magazine.svg" alt="Magazine icon">
                    <p class="Desc__travelText">300 pages de reportages sous forme de "carnets de voyages". Des destinations testées et approuvées par nos journalistes (pas de mauvaise surprise à l'arrivée !).</p>
                </div>
                <div class="Desc__travelBox">
                    <img class="Desc__travelImg" src="img/smartphone.svg" alt="Smartphone icon">
                    <p class="Desc__travelText">Une sorte de "bible" intemporelle des destinations avec des reportages bénéficiant d'une durée de vie illimitée... Le rêve !</p>
                </div>
                <div class="Desc__travelBox">
                    <img class="Desc__travelImg" src="img/clipboard.svg" alt="Clipboard icon">
                    <p class="Desc__travelText">Elles vous disent tout du voyage décrit nos articles : Hôtels, restaurants, boutiques, musée et shopping.</p>
                </div>
            </div>
            <div class="Desc__titleContainer">
                <h3 class="Desc__title">Magazine</h3>
                <div class="Desc__titleLine"></div>
            </div>
            <h4 class="Desc__subtitle">Un mook collector. Des fiches pratiques. Une application. Un site.</h4>
            <p class="Desc__paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
            <div class="Desc__mockupContainer">
                <img class="Desc__mockup" src="img/mockup.png" alt="Mockup">
            </div>
            <div class="Desc__premium">
                <p class="Desc__premiumText">Voir l'offre premium</p>
            </div>
        </div>

    </section>

    <section class="Stats">

        <div class="Stats__description">
            <div class="Stats__descriptionLine">
                <p class="Stats__descriptionNumber">11</p>
                <p class="Stats__descriptionText">Reporters-photographes</p>
            </div>
            <div class="Stats__descriptionLine">
                <p class="Stats__descriptionNumber">130</p>
                <p class="Stats__descriptionText">Destinations</p>
            </div>
            <div class="Stats__descriptionLine">
                <p class="Stats__descriptionNumber">12 000 000</p>
                <p class="Stats__descriptionText">Pages imprimées</p>
            </div>
            <div class="Stats__descriptionLine">
                <p class="Stats__descriptionNumber">4211</p>
                <p class="Stats__descriptionText">Photos sélectionnées</p>
            </div>
        </div>

    </section>

    <section class="Plans">

        <div class="Plans__maintitleContainer">
            <h3 class="Plans__maintitle">Bons plans</h3>
            <div class="Plans__titleLine"></div>
        </div>

        <?php
            getGoodDeals($pdo);
        ?>

        <div class="Plans__good">
            <p class="Plans__goodText">Voir tous les bons plans</p>
        </div>

    </section>

    <section class="Ads">

        <div class="Ads__maintitleContainer">
            <h3 class="Ads__maintitle">Annonceurs, affichez-vous!</h3>
            <div class="Ads__titleLine"></div>
        </div>
        <div class="Ads__description">
            <div class="Ads__box">
                <img class="Ads__img" src="img/travel.svg" alt="Travel icon">
                <div class="Ads__textContainer">
                    <p class="Ads__title">Voyagiste</p>
                    <p class="Ads__text">Vous êtes un professionnel du tourisme. Voyagiste spécialisé, affichez vos spécificités dans Une année de voyages!</p>
                </div>
            </div>
            <div class="Ads__box">
                <img class="Ads__img" src="img/network.svg" alt="Travel icon">
                <div class="Ads__textContainer">
                    <p class="Ads__title">Office du tourisme</p>
                    <p class="Ads__text">Vous êtes en charge de la promotion d’un pays, d’une région ou d’une ville, affichez vos trésors dans Une année de voyages!</p>
                </div>
            </div>
            <div class="Ads__box">
                <img class="Ads__img" src="img/plane.svg" alt="Travel icon">
                <div class="Ads__textContainer">
                    <p class="Ads__title">Compagnies aériennes</p>
                    <p class="Ads__text">Nous offrons une place de choix aux compagnies aériennes dans nos articles. Affichez vos vertues, différences dans Une année de voyages!</p>
                </div>
            </div>
            <div class="Ads__box">
                <img class="Ads__img" src="img/bus.svg" alt="Travel icon">
                <div class="Ads__textContainer">
                    <p class="Ads__title">Transports</p>
                    <p class="Ads__text">Les transports sont l’essence même du voyage. Prendre un bus, le bateau ou le train est le B.A BA du voyage. Affichez vos univers dans Une année de voyages!</p>
                </div>
            </div>
            <div class="Ads__box">
                <img class="Ads__img" src="img/diamond.svg" alt="Travel icon">
                <div class="Ads__textContainer">
                    <p class="Ads__title">Luxe, style et voyages</p>
                    <p class="Ads__text">L’art de vivre de la voyage, c’est voyager avec élégance et bien équipé. Affichez vos marques et créations Lifestyle dans Une année de voyages!</p>
                </div>
            </div>
            <div class="Ads__box">
                <img class="Ads__img" src="img/hotel.svg" alt="Travel icon">
                <div class="Ads__textContainer">
                    <p class="Ads__title">Hôtellerie/Restauration/Hébergement</p>
                    <p class="Ads__text">« On a dormi dans un hôtel merveilleux  ! » , « Nous avons mangé un plat merveilleux ! » Affichez la personnalité de vos hôtels, hébergements et gastronomie dans Une année de Voyages!</p>
                </div>
            </div>
            <div class="Ads__box">
                <img class="Ads__img" src="img/ship.svg" alt="Travel icon">
                <div class="Ads__textContainer">
                    <p class="Ads__title">Croisière, SPA, Thalasso</p>
                    <p class="Ads__text">L’art de vivre de la voyage, c’est voyager avec élégance et bien équipé. Affichez vos marques et créations Lifestyle dans Une année de voyages!</p>
                </div>
            </div>
        </div>

    </section>

    <section class="Partners">

        <div class="Partners__maintitleContainer">
            <h3 class="Partners__maintitle">Partenaires</h3>
            <div class="Partners__titleLine"></div>
        </div>
        <div class="Partners__logos">
            <div class="Partners__logosContainer">
                <?php
                getPatnersData($pdo);
                ?>
            </div>
        </div>

    </section>
<script type="text/javascript" src="./js/main.js"></script>
</body>
</html>
