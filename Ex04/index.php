<!--
Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.
-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP Partie 8 - Exercice 4</title>
</head>
<body>
    
    <form action="user.php" method="post">
        <label for="login">Login: </label>
        <input type="text" name="login"><br><br>
        <label for="pwd">Mot de passe: </label>
        <input type="password" name="pwd"><br><br>
        <button type="submit">Envoyer</button>
    </form>

</body>
</html>