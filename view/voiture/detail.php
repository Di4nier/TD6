<!-- <!DOCTYPE html>
    <html>
        <head>
        <meta charset="UTF-8">
        <title>Voiture By Immat</title>
    </head>
<body> -->
    <?php

    $nbr = 1;

    foreach($tab_voit as $v){
        $vimmat = $v->getImmatriculation();
        $vcolor = $v->getCouleur();
        $vmarque = $v->getMarque();

        $urlimmat = $v->getImmatriculation();
        $urlcolor = $v->getCouleur();
        $urlmarque = $v->getMarque();

        echo '<ul> <li> ' .$nbr .' </li> </ul>';
        echo '<p> Voiture d\'immatriculation ' . htmlspecialchars($vimmat)  . '.</p>';
        echo '<p> Voiture de couleur ' . htmlspecialchars($vcolor) . '.</p>';
        echo '<p> Voiture de Marque ' . htmlspecialchars($vmarque) . '.</p>';
        $nbr = $nbr + 1;
        echo '<br>';

        echo '<a href=index.php?action=deleted&immat=', rawurlencode($urlimmat) ,'>' . ' Supprimer : '.htmlspecialchars($vimmat) .'</a>';
        echo '<br>';
        echo '<br>';
        echo '<a href=index.php?action=update&immat=', rawurlencode($urlimmat) ,'&couleur=',rawurlencode($urlcolor),'&marque=',rawurlencode($urlmarque) ,'>' . ' Modifier : '.htmlspecialchars($vimmat) .'</a>';
    }
        
    ?>
<!-- </body>

</html> -->