<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Modification du mot de passe</title>
        <link rel="stylesheet" type="text/css" href="../../../../public/css/newPwdForms_style.css">
    </head>

    <body>

        <section>
            <div>
                <img src="../../../../public/pics/forgotPwd/bg-01.jpg" alt="devs-forum-forgotten-password">
            </div>

            <form method="post" action="../../../../backend/router/router.php?action=setNewUserPwdCtrl">
                <h3>Entrez un nouveau mot de passe</h3>


                <p class="error">
                    <?php if(isset($error_modification_pwd)): ?>
                        <?= $error_modification_pwd; ?>
                    <?php endif; ?>
                </p>

                <div class="form__newPwd pwd-form">
                    <label for="new_pwd">
                        <input type="password" name="new_pwd" id="new_pwd" placeholder="Nouveau mot de passe. Ex: xyz2_0" required>
                    </label>
                </div>

                <div class="pwd-form">
                    <label for="confirm_new_pwd">
                        <input type="password" name="confirm_new_pwd" id="confirm_new_pwd" placeholder="Confirmer le mot de passe" required>
                    </label>
                </div>

                <div class="form-btn">
                    <button type="submit">Changer le mot de passe</button>
                </div>

                <p class="notice">
                    <em>Vous serez redirigé vers la page de connexion pour prendre en compte la mise à jour</em>
                </p>
            </form>

        </section>

    </body>
</html>