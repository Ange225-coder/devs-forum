<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Administration | S'authentifier</title>
        <link rel="stylesheet" type="text/css" href="../../../../public/css/adminLogin_style.css">
    </head>

    <body>

        <div class="block-page">

            <div class="block-page__form">

                <form method="post" action="../../../../backend/router/router.php?action=connectAnAdminCtrl">
                    <h2>Authentification administrateur</h2>

                    <p class="error">
                        <?php if(isset($error_admin_login)): ?>
                            <?= $error_admin_login; ?>
                        <?php endif; ?>
                    </p>

                    <div class="inputs--border">
                        <div class="input-block --margeBot" >

                            <span>Username</span>

                            <label for="username">
                                <input type="text" name="username"  id="username" placeholder="Enter your admin name" required>
                            </label>
                        </div>

                        <hr >

                        <div class="input-block --margeTop">
                            <span>Password</span>

                            <label for="password">
                                <input type="password" name="password" id="password" placeholder="Enter your admin password  " required>
                            </label>
                        </div>
                    </div>


                    <div class="form__btn">
                        <button type="submit">S'authentifier</button>
                    </div>
                </form>

            </div>



            <div class="block-page__img">
                <img src="../../../../public/pics/login/webmaster-freelance.jpg" alt="devs-forum">
            </div>
        </div>
    </body>
</html>