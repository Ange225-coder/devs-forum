<?php
    $user_id = $_GET['user_id'];
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Forum - suppression du compte</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="../../../../public/css/delAccount_style.css">
    </head>

    <body>

        <header>
            <nav>
                <h1>
                    <a href="../../../../index.php" title="DEVS FORUM">DEVS FORUM</a>
                </h1>

                <ul>
                    <li>
                        <a href="../../../../backend/logout/logout.php" class="header-linkOut__red">Déconnexion</a>
                    </li>
                </ul>
            </nav>
        </header>


        <div class="arrow-bar">
            <p class="arrow arrow--margBott">
                <a href="#" onclick="window.history.back();" title="sortir">
                    <i class="bi-arrow-bar-left"></i>
                </a>
            </p>
        </div>

        <section>
            <form method="post" action="../../../../backend/router/router.php?action=deleteAccountCtrl&amp;user_id=<?= $user_id; ?>">
                <h2>Cette action est irreversible</h2>

                <p>Entrez votre mot de passe pour confirmer la suppression</p>

                <p class="error">
                    <?php if(isset($error_deletion)): ?>
                        <?= $error_deletion; ?>
                    <?php endif; ?>
                </p>

                <div>
                    <label for="delAccount">
                        <input type="password" name="currentPwd" id="delAccount" placeholder="Entrez votre mot de passe" required>
                    </label>
                </div>

                <div>
                    <button type="submit" title="Vous serez automatiquement redirigé vers la page d'accueil">Supprimer le compte</button>
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

