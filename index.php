<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forum des Développeurs</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="public/css/indexStyle.css">
        <script>
            let success_msg = "<?php echo $_SESSION['success_msg'] ?? ''; ?>";
            if (success_msg.length > 0) {
                // Afficher le message
                alert(success_msg);
                // Supprimer le message après quelques secondes
                setTimeout(function(){
                    <?php unset($_SESSION['success_msg']); ?>
                }, 5000);
            }
        </script>
    </head>

    <body>

        <header style="background-image: url('public/pics/homepage/bg-masthead.jpg'); @media all and max-width: 1024px {width: 100%;}">

                <!--  ../../ are used here for escape backend/router/router.php if the link into the url has been changed  -->
            <nav>
                <h1>
                    <a href="index.php">Devs Forum</a>
                </h1>

                <ul>
                    <li>
                        <a href="frontend/views/users/userLogin/login.php">Connexion</a>
                    </li>

                    <li>
                        <a href="frontend/views/users/userRegistration/registration.php">Inscription</a>
                    </li>

                    <li>
                        <a href="frontend/views/users/contact/contact.php">Contact</a>
                    </li>
                </ul>
            </nav>

            <div>
                <h1>Votre Endroit Favori pour discuter de Technologies, de Codes Informatiques</h1>

                <hr >

                <p class="header-textInfo--size">
                    Sur Devs Forum, vous pouvez créer des sujets de discussions, posez un problème en programmation, aidez certains développeurs à résoudre leur problème lié aux codes
                </p>

                <p>
                    <a href="frontend/views/users/userRegistration/registration.php">En savoir plus</a>
                </p>
            </div>
        </header>



        <section class="information">
            <div>
                <h1>Pour les développeurs, nous avons ce qu'il faut!</h1>

                <hr>

                <p class="information--textSize">
                    Devs Forum vous propose l'aide dont vous avez besoin pour vous épanouir dans le monde du développement informatique! En fonction de vos besoins, cliquez sur l'un des liens, pour créer ou participer à une discussion, pour poser une préoccupation ou pour répondre à un problème posé!
                </p>

                <p>
                    <a href="frontend/views/users/userLogin/login.php">Commencer!</a>
                </p>
            </div>
        </section>


        <section class="services">

            <h1 class="services--marge">A votre service</h1>

            <hr>

            <div class="services--flex">
                <div>
                    <h1 class="bi-gem"></h1>

                    <h2>Sujets explicites</h2>

                    <p>
                        Créer des sujets de discussions explicites autour de l'informatique!
                    </p>
                </div>

                <div>
                    <h1 class="bi-globe"></h1>

                    <h2>Apport d'aides</h2>

                    <p>
                        Parcourez les sujets de discussions déjà créer et partagez votre avis
                    </p>
                </div>

                <div>
                    <h1 class="bi-laptop"></h1>

                    <h2>Codes</h2>

                    <p>
                        Publiez, ou apportez des modifications sur les codes erronés postés
                    </p>
                </div>

                <div>
                    <h1 class="bi-heart"></h1>

                    <h2>Faite le avec amour</h2>

                    <p>
                        Les informaticiens ne constituent-ils pas une superbe et grande famille ?
                    </p>
                </div>
            </div>
        </section>


        <section class="links">

            <div class="links--flex">
                <div>
                    <a href="frontend/views/users/subjects/newSubject.php">
                        <img src="public/pics/homepage/1.jpg" alt="devs-forum-project-1" title="Créer des sujets de discussions">
                    </a>
                </div>

                <div class="links--marge">
                    <a href="frontend/views/users/subjects/subjectsList.php">
                        <img src="public/pics/homepage/2.jpg" alt="devs-forum-project-2" title="Voir les sujets déjà créer">
                    </a>
                </div>

                <div>
                    <a href="frontend/views/users/subjects/devConcerns.php">
                        <img src="public/pics/homepage/3.jpg" alt="devs-forum-project-3" title="Poser un problème de dev">
                    </a>
                </div>

                <div class="links--lastLinkMarge">
                    <a href="frontend/views/users/subjects/devConcernsList.php">
                        <img src="public/pics/homepage/5.jpg" alt="devs-forum-5" title="Problèmes de devs">
                    </a>
                </div>
            </div>

            <div class="link-members">
                <div class="link-members--pad">
                    <h1>
                        Parler Informatique en devenant membre de Dev Forum!
                    </h1>

                    <p>
                        <a href="frontend/views/users/userRegistration/registration.php">Devenir membre!</a>
                    </p>
                </div>

            </div>

        </section>


        <footer>
            <p>
                Copyright © 2022 - Dev Forum - <a href="frontend/views/admins/adminIndex.php">Gestion</a>
            </p>
        </footer>
    </body>
</html>