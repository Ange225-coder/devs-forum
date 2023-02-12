<?php session_start();

    if(!isset($_SESSION['pseudo']) || !isset($_SESSION['email'])) {
        header('Location: ../userLogin/login.php');
    }

    require_once('../../../../backend/controllers/devConcernsCtrl/getAllDevConcernsCtrl.php');
    require_once('../../../../backend/controllers/paginationsCtrl/paginationsCtrl.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Liste des préoccupations posées en programmation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../../../public/css/devConcernsList_style.css">
    </head>

    <body>

        <header>
            <nav>
                <h1>
                    <a href="../../../../index.php" title="DEVS FORUM">DEVS FORUM</a>
                </h1>

                <ul>
                    <li>
                        <a href="../homePage/memberHomePage.php" class="nav-link__home">Home</a>
                    </li>

                    <li>
                        <a href="../settings/usersSettings.php"  class="nav-link__color">Paramètres</a>
                    </li>

                    <li>
                        <a href="../../../../backend/logout/logout.php" class="header-linkOut__red">Déconnexion</a>
                    </li>
                </ul>
            </nav>
        </header>


        <p class="arrow">
            <a href="#" onclick="window.history.back();" title="retour">
                <i class="bi-arrow-90deg-left"></i>
            </a>
        </p>


        <section class="card_section">
            <article>

                <?php foreach(getAllDevConcernsCtrl() as $get_concerns): ?>

                    <div class="card">
                        <div>
                            <p>
                                <img src="../../../../public/pics/memberHomepage/pc.webp" alt="devs-forum-dev_concern_list">
                            </p>
                        </div>

                        <div class="card__text">
                            <h1><?= $get_concerns['f_language']; ?></h1>

                            <p>
                                <strong>Description : </strong> <?= $get_concerns['f_description']; ?>
                            </p>

                            <div class="card__creation">
                                <p>
                                    <strong>par : </strong> <span class="card--size"><?= $get_concerns['f_user']; ?></span>
                                </p>

                                <p>
                                    <strong>le : </strong> <span><?= $get_concerns['date_concern_fr']; ?></span>
                                </p>
                            </div>

                            <div class="card__text--flex">
                                <a href="respondToConcerns.php?idConcern=<?= $get_concerns['id'] ?>">Répondre</a><br >
                                <a href="displayConcernResponses.php?idConcern=<?= $get_concerns['id']; ?>">Commentaires</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach;?>

            </article>
        </section>



        <section class="pagination">
            <div class="pagination__flex">
                <?php for($i=1; $i<=getLinksNumberForConcernsPagination(); $i++): ?>
                    <?php if(getCurrentPage() != $i): ?>
                        <div>
                            <p>
                                <a href="?current_page=<?= $i; ?>"><?= $i ?></a>
                            </p>
                        </div>
                    <?php else: ?>
                        <div>
                            <a><?= $i; ?></a>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </section>


        <footer>
            <p>
                © Copyright <strong>Devs Forum</strong>. Tout droit réservés
            </p>
        </footer>
    </body>
</html>