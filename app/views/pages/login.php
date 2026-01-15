
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="/assets/css/auth.css">
</head>
<body>
    <div class="form-container">
        <div class="form-title">Connexion</div>
        <form method="POST" action="/index.php?url=login/login">
            <?php if (isset($errorMessage)): ?>
                <div class="alert alert-error">
                    <?= htmlspecialchars($errorMessage) ?>
                </div>
            <?php endif; ?>
            <?php if (isset($successMessage)): ?>
                <div class="alert alert-success">
                    <?= htmlspecialchars($successMessage) ?>
                </div>
            <?php endif; ?>
            <div class="form-group">
                <label for="email">Mail universitaire</label>
                <input type="text" id="email" name="email" required placeholder="prenom.nom@univ-amu.fr">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required placeholder="**********">
            </div>
            <button class="form-submit" type="submit">Connexion</button>
        </form>
        <a class="form-link" href="/index.php?url=register/index">Vous n'avez pas de compte ?</a>
        <a class="form-link" href="/index.php?url=forgottenpassword/index">Mot de passe oublié ?</a>
    </div>
</body>
</html>
