<?php @session_start();

    //require_once("forum/backend/controllers/usersCtrl/get_a_userCtrl.php");

    $pseudo = $_SESSION['pseudo'];
    $email = $_SESSION['email'];
    $id = $_SESSION['id'];

    //$pseudo_2 = get_a_userCtrl()['f_pseudo'];
    //$email_2 = get_a_userCtrl()['f_email'];
    //$id_2 = get_a_userCtrl()['id'];

    //dans le cas ou la session email ou pseudo n'existe pas, faire une redirection vers login.php


?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Forum - Paramètres utilisateur</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="../../../../public/css/settings_style.css">
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


        <section class="user">
            <div>
                <i class="bi-person-gear"></i>
            </div>

            <div>
                <h1>
                    <?= $pseudo; ?>
                </h1>

                <p>
                    <i class="bi-person-fill"></i> <span>User</span>
                </p>
            </div>
        </section>


        <section class="forms">

            <div class="forms__email">

                <form method="post" action="../../../../backend/router/usersSettingsRouter.php?action=updatingEmailCtrl&amp;user_id=<?= $_SESSION['id']; ?>">
                    <h2>Mettre à jour l'email</h2>

                    <p class="forms__error">
                        <?php if(isset($error_updating_email)): ?>
                            <?= $error_updating_email; ?>
                        <?php endif; ?>
                    </p>

                    <div>
                        <label for="current_email">
                            <input type="text" name="current_email" id="current_email" value="<?= $email ?>">
                        </label>
                    </div>

                    <div>
                        <label for="new_email">
                            <input type="email" name="new_email" id="new_email" placeholder="Entrez le nouvel email" required>
                        </label>
                    </div>

                    <div>
                        <button type="submit">Mettre l'email à jour</button>
                    </div>
                </form>

            </div>


            <div class="forms__pwd">

                <form method="post" action="../../../../backend/router/usersSettingsRouter.php?action=updatingPwdCtrl&amp;user_id=<?= $id; ?>">
                    <h2>Mettre à jour le mot de passe</h2>

                    <p class="forms__error">
                        <?php if(isset($error_updating_pwd)): ?>
                            <?= $error_updating_pwd; ?>
                        <?php endif; ?>
                    </p>

                    <div>
                        <label for="current_pass">
                            <input type="password" name="current_pass" id="current_pass" placeholder="Mot de passe actuel">
                        </label>
                    </div>

                    <div>
                        <Label for="new_pass">
                            <input type="password" name="new_pass" id="new_pass" placeholder="Nouveau mot de passe">
                        </Label>
                    </div>

                    <div>
                        <label for="confirm_newPass">
                            <input type="password" name="confirm_newPass" id="confirm_newPass" placeholder="Répéter le nouveau mot de passe">
                        </label>
                    </div>

                    <div>
                        <button type="submit">Mettre le mot de passe à jour</button>
                    </div>
                </form>

            </div>

            <div class="forms__deletion">
                <div>
                    <h2>Supprimer le compte utilisateur <span><?= $pseudo; ?></span></h2>

                    <p>Vous ne pouvez pas annuler cette action</p>

                    <p>
                        <a href="/frontend/views/users/settings/delAccountForm.php?user_id=<?= $id; ?>">Supprimer le compte</a>
                    </p>
                </div>
            </div>

        </section>

    <footer>
        <p>
            © Copyright <strong>Devs Forum</strong>. Tout droit réservés
        </p>
    </footer>

    </body>
</html>

