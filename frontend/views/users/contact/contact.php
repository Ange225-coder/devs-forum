<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Forum | Nous contacter</title>
        <link rel="stylesheet" type="text/css" href="../../../../public/css/contact_style.css">
    </head>

    <body>

        <div class="block-page">
            <div class="block-page__img">
                <h1>
                    <strong>Parlons de tout !</strong>
                </h1>

                <p>
                    Faites nous des suggestions positives et amélioratifs pour ce site ou contactez-nous pour construire votre prochain projet avec nous.
                </p>

                <img src="../../../../public/pics/contact/undraw-contact.svg" alt="forum-project-contact">
            </div>

            <form method="post" action="../../../../backend/router/router.php?action=setSuggestionCtrl">

                <p class="error">
                    <?php if(isset($error_suggestions)): ?>
                        <?= $error_suggestions; ?>
                    <?php endif; ?>
                </p>

                <div>
                    <label for="full_name">
                        <input type="text" name="full_name" id="full_name" placeholder="Votre nom" class="form--pad" required>
                    </label>
                </div>

                <div>
                    <label for="email">
                        <input type="email" name="email" id="email" placeholder="E-mail" class="form--pad" required>
                    </label>
                </div>

                <div>
                    <label for="phone">
                        <input type="tel" name="phone" id="phone" placeholder="Numéro mobile" class="form--pad" required>
                    </label>
                </div>

                <div>
                    <label for="suggestion">
                        <textarea name="suggestion" id="suggestion" placeholder="Rédigez votre message" class="area--pad" required></textarea>
                    </label>
                </div>

                <div>
                    <button type="submit">Envoyer le message</button>
                </div>
            </form>
        </div>
    </body>
</html>