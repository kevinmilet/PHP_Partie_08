<!--
Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.
-->

<!-- Ajout du cookie-->
<?php
    $cookie_login_name = 'Login';
    $cookie_login_value = $_POST['login'];
    $cookie_pwd_name = 'pwd';
    $cookie_pwd_value = $_POST['pwd'];
    setcookie($cookie_login_name, $cookie_login_value, time()+60, '/');
    setcookie($cookie_pwd_name, $cookie_pwd_value, time()+60, '/');
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP Partie 8 - Exercice 5</title>
</head>
<body>
 
    <p><strong>Login: </strong><?=$cookie_login_value;?></p>
    <p><strong>Mot de passe: </strong><?=$cookie_pwd_value;?></p>
    <br>
    <p>Modifiez votre login et votre mot de passe: </p>
    <br>
    <form action="user.php" method="post">
        <label for="login">Login: </label>
        <input type="text" name="login"><br><br>
        <label for="pwd">Mot de passe: </label>
        <input type="password" name="pwd"><br><br>
        <button type="submit">Envoyer</button>
    </form>


</body>
</html>