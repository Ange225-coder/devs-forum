<?php session_start();

    if(!isset($_SESSION['pseudo']) || !isset($_SESSION['email'])) {
        header('Location: ../userLogin/login.php');
    }

    require_once('../../../../backend/controllers/subjectsCtrl/getAllSubjectCtrl.php');
    require_once('../../../../backend/controllers/paginationsCtrl/paginationsCtrl.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Forum - liste des discussions</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../../../public/css/subjectsList_style.css">
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

                <?php foreach (getAllSubjectCtrl() as $get_subject): ?>

                    <div class="card">
                        <div>
                            <p>
                                <img src="../../../../public/pics/memberHomepage/browse.webp" alt="devs-forum-browse-subject">
                            </p>
                        </div>

                        <div class="card__text">

                            <h1><?= $get_subject['f_theme']; ?></h1>

                            <p>
                                <strong>Description : </strong> <?= $get_subject['f_description']; ?>
                            </p>

                            <div class="card__creation">
                                <p>
                                    <strong>par : </strong> <span class="card--size"><?= $get_subject['user_pseudo']; ?></span>
                                </p>

                                <p>
                                    <strong>le : </strong> <span class="card--size"><?= $get_subject['dateFr'] ?></span>
                                </p>
                            </div>

                            <div class="card__text--flex">
                                <a href="respondToSubject.php?idPost=<?= $get_subject['id']; ?>">Répondre</a>
                                <a href="displayResponsesToComments.php?idPost=<?= $get_subject['id']; ?>">Commentaires</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </article>
        </section>


        <section class="pagination">
            <div class="pagination__flex">
                <?php for($i=1; $i<=getLinksNumberForSubjectsPagination(); $i++): ?>
                    <?php if(getCurrentPage() != $i): ?>
                        <div>
                            <p>
                                <a href="?current_page=<?= $i; ?>"><?= $i; ?></a>
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