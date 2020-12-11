<!--
Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.
Ces variables auront été définies directement dans le code. 
Il faudra afficher le contenu de ces variables sur la deuxième page.
-->

<!-- Démarage de la session-->
<?php
    session_start();    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP Partie 8 - Exercice 2</title>
</head>
<body>
    
<?php
    // Déclaration des variables et ajout dans la session
    $_SESSION['lastname'] = 'Tremendous';
    $_SESSION['firstname'] = 'Bill';
    $_SESSION['age'] = 45;

?>

    <a href="user.php">Clique on te dit !</a>

</body>
</html>