<?php
//On démarre une nouvelle session
session_start();

echo 'Bienvenue sur la premiere page';
//On définit des variables de session

$_SESSION['nom'] = 'admin';
$_SESSION['password'] = 'admin';
echo '<br /><a href="accueiladmin.php?"></a>';
?>
<?php
        include("Connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accueiladmin.css">
    <title>Document</title>
</head>
<body>
    <div class="deconnexion"><form action="index.php" method="post">
    <p><input type="submit" value="Déconnexion" /></p>
</form></a></div>
    <div class="image">
        <a href="accueiladmin.php?user=admin&pass=admin"><img src="src/logoinfointox.png" alt=""></a>
    </div>
    <div id="mySidenav" class="sidenav">
    <a id="closeBtn" href="#" class="close">&times;</a>
            <ul>
                <li><a href="admin.php?var=nouvel">Ajouter un article</a></li>
                <li><a href="admin.php?var=sup_a">Archiver article</a></li>
                <li><a href="admin.php?var=dsup_a">Désarchiver article</a></li>
                <li><a href="admin.php?var=sup_c">Supprimer un commentaire</a></li>
                <li><a href="admin.php?var=sup_u">Lister un utilisateur</a></li>
                <li><a href="admin.php?var=dsup_u">Délister un utilisateur </a></li>
            </ul>
    </div>
    <?php
/*Si la variable de session age est définie, on echo sa valeur
*puis on la détruit avec unset()*/
if(isset($_SESSION['nom'])){
echo 'Tu es ' .$_SESSION['nom']. ' <br>';
}
/*On détruit les données de session*/
session_destroy();

//On tente d'afficher les valeurs des variables age et prenom
echo 'Contenu de $_SESSION[\'nom\'] : ' .$_SESSION['nom']. 
'<br>';

echo 'Contenu de $_SESSION[\'password\'] : ' .$_SESSION['password'];
?>
    <div class="box">
        <a href="#" id="openBtn">
        <span class="burger-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
        </a> 
    </div>
   


    <script type="text/javascript" src="scripthead.js"></script>
</body>
</html>