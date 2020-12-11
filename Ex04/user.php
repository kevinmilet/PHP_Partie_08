<!--
Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.
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
    <title>PHP Partie 8 - Exercice 4</title>
</head>
<body>
 
    <p><strong>Login: </strong><?=$cookie_login_value;?></p>
    <p><strong>Mot de passe: </strong><?=$cookie_pwd_value;?></p>

</body>
</html>