<!--
Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.
A la validation du formulaire, stocker les informations dans un cookie.
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
    <title>PHP Partie 8 - Exercice 3</title>
</head>
<body>
 


</body>
</html>