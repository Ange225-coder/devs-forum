<?php session_start();

    if(!isset($_SESSION['pseudo']) || !isset($_SESSION['email'])) {
        header('Location: ../userLogin/login.php');
    }

    require_once('../../../../backend/controllers/devConcernsCtrl/getConcernCtrl.php');

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
        <link rel="stylesheet" type="text/css" href="../../../../public/css/respondToConcerns_style.css">
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


            <p class="code-editor--pBg code-editor--pBgMargeTop">VOTRE RÉPONSE</p>

            <i class="bi-caret-down-fill code-editor__arrow"></i>


            <form method="post" action="../../../../backend/router/router.php?action=setConcernResponseCtrl&amp;idConcern=<?= $concern['id']; ?>">

                <p>
                    <?php if(isset($error_response)): ?>
                        <?= $error_response; ?>
                    <?php endif; ?>
                </p>

                <div>
                    <label for="concern_response">
                        <textarea name="concern_response" id="concern_response" cols="50" rows="3" placeholder="Préciser les lignes erronées..." required></textarea>
                    </label>
                </div>

                <div class="form__btn">
                    <button type="submit"><i class="bi-code-slash"></i>Répondre</button>
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


