<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>

    <h2>Formulaire de Connexion</h2>
    <form action="connexion.php" method="POST">
        <label for="username">Identifiant :</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Se connecter">
    </form>

</body>
</html>