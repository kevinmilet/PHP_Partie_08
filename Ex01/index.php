<!-- Faire une page HTML permettant de donner à l'utilisateur :
son User Agent
son adresse ip
le nom du serveur -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP Partie 8 - Exercice 1</title>
</head>
<body>
    
    <!-- Nom de l'user agent -->
    <p><strong>Nom de l'user agent: </strong><?=$_SERVER['HTTP_USER_AGENT'];?></p>
    <!-- Adresse IP -->
    <p><strong>Adresse IP: </strong><?=$_SERVER['SERVER_ADDR'];?></p>
    <!-- Nom du serveur -->
    <p><strong>Nom du serveur: </strong><?=$_SERVER['SERVER_NAME'];?></p>

</body>
</html>