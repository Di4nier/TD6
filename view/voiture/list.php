<!-- <!DOCTYPE html>
    <html>
        <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
<body> -->
    <?php

    require_once './lib/File.php';


    $nbr = 1;

        foreach($tab_v as $v){
            $vimmat = $v->getImmatriculation();
            $immaturl = $v->getImmatriculation();

            echo '<ul> <li> ' .$nbr .' </li> </ul>';
            echo '<p> Voiture d\'immatriculation ' .  '<a href=index.php?action=read&immat=', rawurlencode($immaturl) ,'>' . htmlspecialchars($vimmat) .'</a>' . '.</p>';
            $nbr = $nbr + 1;
            echo '<br>';
        }
    ?>
<!-- </body>

</html> -->