<?php session_start();

    if(!isset($_SESSION['pseudo']) || !isset($_SESSION['email'])) {
        header('Location: ../userLogin/login.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Poser une préoccupation relatif à la programmation</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/codemirror.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/codemirror.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.57.0/mode/javascript/javascript.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../../../public/css/devConcerns_style.css">
    </head>

    <body>

        <header>
            <nav>
                <h1>
                    <a href="../../../../index.php" title="DEVS FORUM">DEVS FORUM</a>
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
        </header>


        <p class="arrow">
            <a href="#" onclick="window.history.back();" title="retour">
                <i class="bi-arrow-90deg-left"></i>
            </a>
        </p>


        <form method="post" action="../../../../backend/router/router.php?action=setDevConcernsCtrl">

            <h2>Poser votre problème en programmation</h2>

            <div class="form-inputs">

                <div class="form-inputs__language">

                    <div class="form-inputs--center">
                        <div class="form-inputs__img">
                            <img src="../../../../public/pics/memberHomepage/concern.webp" alt="forum-project-dev_concerns">
                        </div>

                        <div class="form-inputs--text">
                            <div class="language-used">
                                <label for="language_used">
                                    <input type="text" name="language_used" id="language_used" placeholder="Langage utilisé. EX: PHP, C++, ..." required>
                                </label>
                            </div>

                            <div class="description">
                                <label for="description">
                                    <textarea name="description" id="description" placeholder="Décrivez de manière explicite et brève votre préoccupation en précisant les lignes concernées" cols="45" rows="4" required></textarea>
                                </label>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="form-inputs__code-editor">
                    <div>
                        <label for="code">Copier et coller uniquement les lignes problématiques ici <i class="bi bi-arrow-90deg-down"></i></label><br >
                        <textarea name="code" id="code" required>
                        </textarea>
                    </div>

                    <script src="../../../../vendor/setCodeInEditor.js"></script>
                </div>

            </div>

            <div class="form-btn">
                <button type="submit">Poser votre problème</button>
            </div>
        </form>


        <footer>
            <p>
                © Copyright <strong>Devs Forum</strong>. Tout droit réservés
            </p>
        </footer>
    </body>
</html>