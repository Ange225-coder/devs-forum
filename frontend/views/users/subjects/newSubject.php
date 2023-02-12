<?php session_start();

    if(!isset($_SESSION['pseudo']) || !isset($_SESSION['email'])) {
        header('Location: ../userLogin/login.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Forum - Créer un sujet de discussion</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../../../public/css/newSubject_style.css">
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


        <h1 class="card__title">Créer votre sujet de discussion</h1>


        <div class="card">

            <div>
                <img src="../../../../public/pics/newSubject/topic.webp" alt="devs-forum-project_createNewSubject">
            </div>

            <form method="post" action="../../../../backend/router/router.php?action=setNewSubjectCtrl">

                <div>
                    <?php if(isset($error_field_empty)): ?>
                        <?= $error_field_empty; ?>
                    <?php endif; ?>
                </div>

                <div>
                    <label for="theme">
                        <input type="text" name="theme" id="theme" placeholder="Thème du sujet Ex: PHP, JAVASCRIPT, ..." required>
                    </label>
                </div>

                <div>
                    <label for="description">
                        <textarea name="description" id="description" placeholder="Donner la raison pour laquelle vous créez ce thème" cols="40" rows="6" required></textarea>
                    </label>
                </div>

                <div>
                    <button type="submit">Créer le sujet</button>
                </div>
            </form>
        </div>


        <footer>
            <p>
                © Copyright <strong>Devs Forum</strong>. Tout droit réservés
            </p>
        </footer>
    </body>
</html>
