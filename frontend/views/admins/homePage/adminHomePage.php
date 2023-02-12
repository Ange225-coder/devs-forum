<?php session_start();
    if(!isset($_SESSION['username'])) {
        header('Location: ../adminLogin/login.php');
    }

    require_once('../../../../backend/controllers/adminsCtrl/tablesCounterCtrl.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Administrator | <?= $_SESSION['username']; ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="../../../../public/css/adminHomePage_style.css">
    </head>

    <body>

        <div class="block-page">

            <div class="navbar-block">
                <nav>
                    <h2>
                        <a href="../../../../index.php">DEVS FORUM</a>
                    </h2>

                    <p>
                        <a href="../../../../frontend/views/admins/homePage/adminHomePage.php" title="Tableau de bord">
                            <i class="bi-speedometer2"></i> <span>Tableau de bord</span>
                        </a>
                    </p>

                    <hr >

                    <p>
                        <a href="../tablesList/usersList.php" title="Utilisateurs enregistrés">
                            <i class="bi-person-check-fill"></i> <span>Utilisateurs enregistrés</span>
                        </a>
                    </p>

                    <hr >

                    <p>
                        <a href="../tablesList/subjectsList.php" title="Sujets crées">
                            <i class="bi-clipboard2-check-fill"></i> <span> Sujets crées</span>
                        </a>
                    </p>

                    <hr >

                    <p>
                        <a href="../tablesList/commentsList.php" title="Commentaires des sujets">
                            <i class="bi-chat-text-fill"></i> <span>Commentaires des sujets</span>
                        </a>
                    </p>

                    <hr >

                    <p>
                        <a href="../tablesList/devConcernsList.php" title="Préoccupations des devs">
                            <i class="bi-file-earmark-code-fill"></i><span>Préoccupations des devs</span>
                        </a>
                    </p>


                    <hr >

                    <p>
                        <a href="../tablesList/concernsResponsesList.php" title="Réponses aux préoccupations">
                            <i class="bi-laptop-fill"></i> <span>Réponses aux préoccupations</span>
                        </a>
                    </p>

                    <hr >

                    <p>
                        <a href="../tablesList/suggestionsList.php" title="Suggestions">
                            <i class="bi-chat-square-quote-fill"></i> <span>Suggestions</span>
                        </a>
                    </p>

                    <hr >
               </nav>
            </div>



            <div class="admin-block">

                <div class="administrator-block">
                    <div class="administrator-block__admin">
                        <p>
                            <a href="../../../../backend/logout/logout.php" title="Déconnexion">
                                <i class="bi-box-arrow-left"></i>
                            </a>
                        </p>

                        <div class="admin-block--verticalLine"></div>

                        <div class="admin-block--flex">
                            <p>
                                <?= $_SESSION['username']; ?>
                            </p>

                            <p>
                                <img src="../../../../public/pics/adminHomePage/undraw_profile.svg" alt="devs-forum-admin-space">
                            </p>
                        </div>

                    </div>
                </div>



                <div class="administrationManagement">
                    <h1>Tableau de bord</h1>

                    <div class="adminElement--flex">

                        <div class="user--flex">
                            <div class="administrationManagement--padL">
                                <p>Utilisateurs enregistrés</p>

                                <p><?= usersCounterCtrl(); ?></p>
                            </div>

                            <div class="administrationManagement--padR">
                                <i class="bi-person-check"></i>
                            </div>
                        </div>


                        <div class="subject--flex">
                            <div class="administrationManagement--padL">
                                <p>Sujet créé</p>

                                <p><?= subjectsCounterCtrl(); ?></p>
                            </div>

                            <div class="administrationManagement--padR">
                                <i class="bi-clipboard2-check-fill"></i>
                            </div>
                        </div>


                        <div class="subjectCom--flex">
                            <div class="administrationManagement--padL">
                                <p>Commentaires des sujets</p>

                                <p><?= commentsCounterCtrl(); ?></p>
                            </div>

                            <div class="administrationManagement--padR">
                                <i class="bi-chat-text-fill"></i>
                            </div>
                        </div>


                        <div class="devConcerns--flex">
                            <div class="administrationManagement--padL">
                                <p>Préoccupations de devs</p>

                                <p><?= devConcernsCounterCtrl(); ?></p>
                            </div>

                            <div class="administrationManagement--padR">
                                <i class="bi-file-earmark-code-fill"></i>
                            </div>
                        </div>


                        <div class="devConcernResponse--flex">
                            <div class="administrationManagement--padL">
                                <p>Réponse aux préoccupations</p>

                                <p><?= concernsResponsesCounterCtrl(); ?></p>
                            </div>

                            <div class="administrationManagement--padR">
                                <i class="bi-laptop-fill"></i>
                            </div>
                        </div>

                        <div class="suggestions--flex">
                            <div class="administrationManagement--padL">
                                <p>Suggestions</p>

                                <p><?= suggestionCounterCtrl(); ?></p>
                            </div>

                            <div class="administrationManagement--padR">
                                <i class="bi-chat-square-quote-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <footer>
                    <p>
                        © Copyright <strong>Devs Forum</strong>. Tout droit réservés
                    </p>
                </footer>
            </div>
        </div>

    </body>
</html>