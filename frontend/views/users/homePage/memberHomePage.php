<?php session_start();

    if(!isset($_SESSION['pseudo']) || !isset($_SESSION['email'])) {
        header('Location: ../userLogin/login.php');
    }


?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Bienvenue <?= $_SESSION['pseudo'] ?></title>
        <link rel="stylesheet" type="text/css" href="../../../../public/css/memberHomePage_style.css">
    </head>

    <body>

        <header>
            <nav>
                <h1>
                    <a href="../../../../index.php">DEVS FORUM</a>
                </h1>

                <ul>
                    <li>
                        <a href="../settings/usersSettings.php"  class="nav-link__color">Paramètres</a>
                    </li>

                    <li>
                        <a href="../../../../backend/logout/logout.php" class="header-linkOut__red">Déconnexion</a>
                    </li>
                </ul>
            </nav>

            <div class="header-info--flex">
                <div class="header--info__text">
                    <h1><?= $_SESSION['pseudo']; ?>, Bienvenue Sur DEVS FORUM</h1>

                    <h2>
                        Sur DEVS FORUMS, créez où partagez votre avis autour des sujets relatifs aux technologies informatiques, où proposez votre aide concernant les différentes préoccupations
                    </h2>
                </div>

                <div class="header-info__img">
                    <img src="../../../../public/pics/memberHomepage/hero-img.png" alt="devs-forum-member">
                </div>
            </div>
        </header>


        <section class="services">

            <h1 class="services--hCenter">Ce que nous faisons</h1>

            <p class="services--pCenter">
                Cet article comporte les différents services prioritaires offerts par DEVS FORUM
            </p>

            <article>

                <div class="article__card">
                    <a href="../subjects/newSubject.php">
                        <div>
                            <p class="services__img">
                                <img src="../../../../public/pics/memberHomepage/topic.webp" alt="devs-forum-create-topic">
                            </p>
                        </div>

                        <div class="services__text">
                            <p>Créer</p>

                            <h2>Créer un sujet de discussion</h2>

                            <p>
                                Cet article comporte un formulaire qui vous permettra de créer votre sujet de discussion.
                            </p>
                        </div>
                    </a>
                </div>


                <div class="article__card">
                    <a href="../subjects/subjectsList.php">
                        <div>
                            <p class="services__img">
                                <img src="../../../../public/pics/memberHomepage/browse.webp" alt="devs-forum-browse-topic">
                            </p>
                        </div>

                        <div class="services__text">
                            <p>Parcourir</p>

                            <h2>Parcourez les discussions créées et donnez votre avis</h2>

                            <p>
                                Cet article contient une liste de sujets déjà crées. Parcourez-les et postez votre avis.
                            </p>
                        </div>
                    </a>
                </div>


                <div class="article__card">
                    <a href="../subjects/devConcerns.php">
                        <div>
                            <p class="services__img">
                                <img src="../../../../public/pics/memberHomepage/concern.webp" alt="devs-forum-create_concern">
                            </p>
                        </div>

                        <div class="services__text">
                            <p>Poser une préoccupation</p>

                            <h2>Poser une préoccupation en programmation</h2>

                            <p>
                                Cet article contient un formulaire dans lequel vous rentrerez le langage utilisé, contient également un éditeur de code en ligne dans lequel vous collerez votre code problématique.
                            </p>
                        </div>
                    </a>
                </div>


                <div class="article__card">
                    <a href="../subjects/devConcernsList.php">
                        <div>
                            <p class="services__img">
                                <img src="../../../../public/pics/memberHomepage/pc.webp" alt="devs-forum-help_about_concerns">
                            </p>
                        </div>

                        <div class="services__text">
                            <p>Voir les préoccupations</p>

                            <h2>Parcourir la liste des préoccupations posées en programmation</h2>

                            <p>
                                Cet article contient la liste des préoccupations posées en programmation. Parcourez la liste et apportez vos solutions.
                            </p>
                        </div>
                    </a>
                </div>

            </article>
        </section>


        <section class="notice">

            <div>
                <h1>Remarque !</h1>

                <p>
                    DEVS FORUMS est certes un endroit conçu pour les développeurs, designers, ..., pour les passionnés des technologies, mais vous pouvez aussi créer ou poser des préoccupations concernant les autres domaines d'activités : architectures, médecines, commerces, comptabilités, entrepreneuriat, ... afin d'apporter également des solutions dans ces domaines d'activités.
                </p>
            </div>

            <div>
                <img src="../../../../public/pics/memberHomepage/us.png" alt="dev-forums-notice">
            </div>
        </section>


        <footer>
            <p>
                © Copyright <strong>Devs Forum</strong>. Tout droit réservés
            </p>
        </footer>
    </body>
</html>
