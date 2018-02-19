<html>

    <head>
        <title>WDS Administration</title>
        <meta name="description" content="Administration du CMS">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/grille.css">
        <link rel="stylesheet" type="text/css" href="../css/template_back.css">
    </head>

    <body>

        <header>
            <section>
                <article id="burgerMenu">
                    <img class="svg" src="../images/icons/android-menu.svg" alt="burgerMenu">
                </article>

                <article id="nameSiteWeb">
                    <img class="svg" src="../images/icons/ios-home-outline.svg" alt="Home">
                    <a href="#">Nom du site</a>
                </article>

                <article id="profile">
                    <div id="profileNamePicture">
                        <span>Monsieur NOM</span>
                        <img class="pictureProfile" src="../images/tpl/profil.jpg" alt="pictureProfile">
                        <img class="chevronProfile openProfile" src="../images/tpl/open-profile.png" alt="openProfile"><img class="chevronProfile closeProfile" src="../images/tpl/close-profile.png" alt="closeProfile">
                    </div>
                    <div id="profileSettings">
                        <div id="myProfile">
                            <img src="../images/tpl/picture-profile.png" alt="logoProfile">
                            <span>Mon profil</span>
                        </div>
                        <div id="logout">
                            <img class="svg" src="../images/icons/log-out.svg" alt="logoDeconnexion">
                            <span>Se déconnecter</span>
                        </div>
                    </div>
                </article>
            </section>
        </header>

        <nav id="mainNavigation">
            <div class="logo">
                <img src="../images/tpl/logo-WDS.png" alt="logo" width="175" height="175">
            </div>
            <ul>
                <li>
                    <img class="svg" src="../images/icons/ios-speedometer-outline.svg" alt="tableauDeBord">
                    <a href="#">Tableau de bord</a>
                </li>
                <li>
                    <img class="svg" src="../images/icons/ios-paper-outline.svg" alt="pages">
                    <a href="#">Pages</a>
                </li>
                <li>
                    <img class="svg" src="../images/icons/ios-people-outline.svg" alt="utilisateurs">
                    <a href="#">Utilisateurs</a>
                </li>
                <li>
                    <img class="svg" src="../images/icons/ios-compose-outline.svg" alt="roles">
                    <a href="#">Rôles</a>
                </li>
                <li>
                    <img class="svg" src="../images/icons/ios-calendar-outline.svg" alt="planning">
                    <a href="#">Planning</a>
                </li>
                <li>
                    <img class="svg" src="../images/icons/ios-time-outline.svg" alt="horaires">
                    <a href="#">Horaires</a>
                </li>
                <li>
                    <img class="svg" src="../images/icons/ios-bookmarks-outline.svg" alt="progressions">
                    <a href="#">Progressions</a>
                </li>
                <li>
                    <img class="svg" src="../images/icons/ios-chatboxes-outline.svg" alt="commentaires">
                    <a href="#">Commentaires</a>
                </li>
                <li>
                    <img class="svg" src="../images/icons/ios-monitor-outline.svg" alt="theme">
                    <a href="#">Thème</a>
                </li>
                <li>
                    <img class="svg" src="../images/icons/ios-gear-outline.svg" alt="reglages">
                    <a href="#">Réglages</a>
                </li>
                <li>
                    <img class="svg" src="../images/icons/ios-pie-outline.svg" alt="statistiques">
                    <a href="#">Statistiques</a>
                </li>
            </ul>
        </nav>

        <div class="clearHeader"></div>

        <div id="contentBack">

           <!-- INSERT MAIN'S VIEW HERE -->
            <?php include('../view/view_dashboard.php') ?>

        </div>

    </body>
    
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/tpl/template_back.js"></script>

</html>