<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $pagetitle; ?></title>
</head>

<body>
    
    <header style="height: 80px; text-align: center; ">
        <nav>
            <a style="padding-right: 15px; font-size: 20px;" href="index.php?action=readall">Liste Voitures</a>
            <a style="padding-right: 15px; font-size: 20px;" href="index.php?controller=utilisateur&action=readall">Compte</a>
            <a style="padding-right: 15px; font-size: 20px;" href="index.php?controller=trajet&action=readall">Liste Trajets</a>
        </nav>
    </header>

    <?php
        // Si $controleur='voiture' et $view='list',
        // alors $filepath="/chemin_du_site/view/voiture/list.php"
        $filepath = File::build_path(array("view", $controller, "$view.php"));
        require $filepath;
    ?>

    <footer style="text-align: center; padding: 10px;">
        <p style="font-size: 30px;">CoCoVoitVoit Le site de référence pour les Covoiturages !</p>
    </footer>

</body>
</html>
