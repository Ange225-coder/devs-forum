<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Forum | Devenir membre</title>
        <link rel="stylesheet" type="text/css" href="../../../../public/css/uRegistration_style.css">
    </head>

    <body>

        <div class="block-page">
            <div class="block-page--imgMarge">
                <img src="../../../../public/pics/registration/undraw_remotely_2j6y.svg" alt="forum-project-registration">
            </div>

            <form method="post" action="../../../../backend/router/router.php?action=setNewUsersCtrl">
                <h1>Devenir membre</h1>

                <p class="form--pGrey">Enregistrez vous et devenez membre de Dev Forum</p>

                <p class="error">
                    <?php if(isset($error_registration_msg)): ?>

                        <?= $error_registration_msg; ?>
                    <?php endif; ?>
                </p>

                <div>
                    <label for="pseudo">
                        <input type="text" name="pseudo" id="pseudo" placeholder="Nom d'utilisateur"  class="form--radiusTop form--border form--pad" required>
                    </label>
                </div>

                <div>
                    <label for="email">
                        <input type="email" name="email" id="pseudo" placeholder="Email" class="form--border form--pad" required>
                    </label>
                </div>

                <div>
                    <label for="password">
                        <input type="password" name="password" id="password" placeholder="Password" class="form--border form--pad" required>
                    </label>
                </div>

                <div>
                    <label for="pass_confirm">
                        <input type="password" name="pass_confirm" id="pass_confirm" placeholder="Confirmer le mot de passe" class="form--radiusBottom form--pad" required>
                    </label>
                </div>

                <div>
                    <button type="submit">S'enregistrer</button>
                </div>
            </form>
        </div>
    </body>
</html>