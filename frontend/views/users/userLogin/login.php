<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Forum | Connexion</title>
        <link rel="stylesheet" type="text/css" href="../../../../public/css/uLoginStyle.css">
    </head>

    <body>

        <div class="block-page">
            <form method="post" action="../../../../backend/router/router.php?action=userLoginCtrl">
                <h1>Se connecter à <span>DEVS FORUM</span></h1>

                <p class="form--pGrey">Entrez vos paramètres de connexion pour vous connecter</p>

                <p class="form--error">
                    <?php if(isset($error_login)): ?>
                        <?= $error_login; ?>
                    <?php endif; ?>
                </p>

                <div>
                    <label for="email">
                        <input type="email" name="email" id="email" placeholder="Email" class="form--size" required>
                    </label>
                </div>

                <div>
                    <label for="password">
                        <input type="password" name="password" id="password" placeholder="Password" class="form--size form--marg" required>
                    </label>
                </div>

                <p class="form__link">
                    <a href="../../../../frontend/views/users/forgottenPwd/emailForm.php">Mot de passe oublié</a>
                </p>

                <div>
                    <button type="submit">Se connecter</button>
                </div>

                <p>
                    Vous n'êtes pas encore membre ? <a href="../../../../frontend/views/users/userRegistration/registration.php" class="form--linkBlue">Devenir membre</a>
                </p>
            </form>


            <div>
                <img src="../../../../public/pics/login/undraw_file_sync_ot38.svg" alt="forum-project-login">
            </div>
        </div>
    </body>
</html>