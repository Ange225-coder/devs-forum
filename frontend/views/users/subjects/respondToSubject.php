<?php session_start();

    if(!isset($_SESSION['pseudo']) || !isset($_SESSION['email'])) {
        header('Location: ../userLogin/login.php');
    }

    require_once('../../../../backend/controllers/subjectsCtrl/getPostCtrl.php');

    $getting_post = getPostCtrl();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?= $getting_post['f_theme']; ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="../../../../public/css/respondToSubject_style.css">
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



        <section>
            <div class="author-block">
                <h1><?= $getting_post['f_theme']; ?></h1>

                <div class="author">
                    <div>
                        <i class="bi-person"></i>
                    </div>

                    <div class="author__info">
                        <span class="author__user"><?= $getting_post['user_pseudo']; ?></span> <span class="author__date"> - <?= $getting_post['subject_registration_dateFr']; ?></span>
                    </div>
                </div>

                <p class="description">
                    <?= $getting_post['f_description']; ?>
                </p>
            </div>


            <div class="response">

                <p class="response--pBg">VOTRE RÉPONSE</p>

                <i class="bi-caret-down-fill response__arrow"></i>

                <form method="post" action="../../../../backend/router/router.php?action=setNewCommentCtrl&amp;idPost=<?= $getting_post['id']; ?>">

                    <p>
                        <?php if(isset($error_set_comment)): ?>
                            <?= $error_set_comment; ?>
                        <?php endif; ?>
                    </p>

                    <div>
                        <label for="comment">
                            <textarea name="comment" id="comment" cols="50" rows="8" required></textarea>
                        </label>
                    </div>

                    <div class="form__btn">
                        <button type="submit"><i class="bi-chat-text"></i>Répondre</button>
                    </div>
                </form>
            </div>
        </section>


        <footer>
            <p>
                © Copyright <strong>Devs Forum</strong>. Tout droit réservés
            </p>
        </footer>

    </body>
</html>