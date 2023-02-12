<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Mot de passe oublié</title>
        <link rel="stylesheet" type="text/css" href="../../../../public/css/emailForm_style.css">
    </head>

    <body>

        <section>
            <div>
                <img src="../../../../public/pics/forgotPwd/bg-01.jpg" alt="devs-forum-forgotten-password">
            </div>

            <form method="post" action="../../../../backend/router/router.php?action=getEmailCtrl">
                <h3>Entrez l'email utilisé lors de l'inscription</h3>

                <p>
                    <?php if(isset($error_user_email)): ?>
                        <?= $error_user_email; ?>
                    <?php endif; ?>
                </p>

                <div class="form__email">
                    <label for="email">Email
                        <input type="email" name="email" id="email" placeholder="Entrez votre Email" required>
                    </label>
                </div>

                <div>
                    <button type="submit">Continuer</button>
                </div>
            </form>
        </section>
    </body>
</html>
