<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Administration | S'enregistrer</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="../../../../public/css/adminRegistration_style.css">
    </head>

    <body>

        <div class="block-page">

            <div class="block-page--flex">
                <div>
                    <img src="../../../../public/pics/registration/img-01.png" alt="devs-forum">
                </div>

                <div class="registration-form">
                    <form method="post" action="../../../../backend/router/router.php?action=setNewAdminCtrl">
                        <h2>Enregistrement administrateur</h2>

                        <p class="error">
                            <?php if(isset($error_admin_registration)): ?>
                                <?= $error_admin_registration; ?>
                            <?php endif; ?>
                        </p>

                        <div class="i-inside">
                            <label for="username">
                                <i class="bi-person-badge-fill"></i><input type="text" name="username" id="username" placeholder="username" required>
                            </label>
                        </div>

                        <div class="i-inside">
                            <label for="password">
                                <i class="bi-lock-fill"></i><input type="password" name="password" id="password" placeholder="password" required>
                            </label>
                        </div>

                        <div class="registration-form__btn">
                            <button type="submit">S'enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>