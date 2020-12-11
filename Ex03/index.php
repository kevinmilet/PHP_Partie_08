<!--
Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.
A la validation du formulaire, stocker les informations dans un cookie.
-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP Partie 8 - Exercice 3</title>
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