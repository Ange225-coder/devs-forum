<?php session_start();

    if(!isset($_SESSION['pseudo']) || !isset($_SESSION['email'])) {
        header('Location: ../userLogin/login.php');
    }

    require_once('../../../../backend/controllers/devConcernsCtrl/getConcernCtrl.php');
    require_once('../../../../backend/controllers/concernsResponseCtrl/getConcernResponsesCtrl.php');

    $concern = getConcernCtrl();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title><?= $concern['f_language']; ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/codemirror.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/codemirror.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/mode/javascript/javascript.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="../../../../public/css/displayConcernResponses_style.css">
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
                <h1><?= $concern['f_language']; ?></h1>

                <div class="author">
                    <div>
                        <i class="bi-person"></i>
                    </div>

                    <div class="author__info">
                        <span class="author__user"><?= $concern['f_user']; ?></span> <span class="author__date"> - <?= $concern['dateConcernFr']; ?></span>
                    </div>
                </div>

                <p class="description">
                    <?= $concern['f_description']; ?>
                </p>
            </div>


            <div class="code-editor">

                <p class="code-editor--pBg">CODE</p>

                <i class="bi-caret-down-fill code-editor__arrow"></i>

                <div class="code-editor__code">
                    <label>
                        <textarea id="code"><?= $concern['f_code'] ?></textarea>
                    </label>
                </div>

                <script src="../../../../vendor/setCodeInEditor.js"></script>
            </div>


            <div class="response">

                <p class="response--pBg">COMMENTAIRES ASSOCIÉS</p>

                <i class="bi-caret-down-fill response__arrow"></i>

                <?php foreach(getConcernResponsesCtrl() as $response): ?>

                    <div class="response__card">
                        <div class="response__author">
                            <div>
                                <i class="bi-person"></i>
                            </div>

                            <div class="response__card--marge">
                                <p class="response__author--blue"><?= $response['f_author']; ?></p>
                                <p class="response__author--margeTop"><?= $response['date_response_fr'] ?></p>
                            </div>
                        </div>

                        <p class="comment">
                            <?= $response['f_response'] ?>
                        </p>
                    </div>

                <?php endforeach; ?>

            </div>


            <form method="post" action="../../../../backend/router/router.php?action=setConcernResponseCtrl&amp;idConcern=<?= $concern['id']; ?>">
                <div>
                    <label for="concern_response">
                        <textarea name="concern_response" id="concern_response" placeholder="Répondre à un commentaire" cols="70" rows="3"></textarea>
                    </label>
                </div>

                <div class="form__btn">
                    <button type="submit"><i class="bi-braces"></i>Publier votre réponse</button>
                </div>
            </form>
        </section>


        <footer>
            <p>
                © Copyright <strong>Devs Forum</strong>. Tout droit réservés
            </p>
        </footer>

    </body>
</html>
