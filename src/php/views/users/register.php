<form method="POST" action="/register">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username" required>

    <label for="email">Adresse email :</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>

    <label for="password_confirm">Confirmer le mot de passe :</label>
    <input type="password" id="password_confirm" name="password_confirm" required>

    <button type="submit">S'inscrire</button>
</form>

<?php if(isset($error)): ?>
    <div><?php echo $error; ?></div>
<?php endif; ?>
