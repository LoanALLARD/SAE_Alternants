
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inscription</title>
	<link rel="stylesheet" href="/assets/css/auth.css">
</head>
<body>
	<div class="form-container">
		<div class="form-title">Inscription</div>
		<form method="POST" action="/index.php?url=register/register">
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
			<div class="form-group">
				<label for="confirm_password">Confirmer le mot de passe</label>
				<input type="password" id="confirm_password" name="confirm_password" required placeholder="**********">
			</div>
			<button class="form-submit" type="submit">S'inscrire</button>
		</form>
		<a class="form-link" href="/index.php?url=login/index">Déjà un compte ? Se connecter</a>
	</div>
</body>
</html>
