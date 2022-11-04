<!-- <!DOCTYPE html>
    <html>
        <head>
        <meta charset="UTF-8">
        <title>Utilisateurs By llgojn</title>
    </head>
<body> -->
    <?php

    $nbr = 1;

    foreach($tab_voit as $u){
        $ulogin = $u->getLogin();
        $unom = $u->getNom();
        $uprenom = $u->getPrenom();

        $urllogin = $u->getLogin();
        $urlnom = $u->getNom();
        $urlprenom = $u->getPrenom();

        echo '<ul> <li> ' .$nbr .' </li> </ul>';
        echo '<p> Login Utilisateur : ' . htmlspecialchars($ulogin)  . '.</p>';
        echo '<p> Nom : ' . htmlspecialchars($unom) . '.</p>';
        echo '<p> Prenom :' . htmlspecialchars($uprenom) . '.</p>';
        $nbr = $nbr + 1;
        echo '<br>';

        echo '<a href=index.php?controller=utilisateur&action=deleted&login=', rawurlencode($urllogin) ,'>' . ' Supprimer : '.htmlspecialchars($ulogin) .'</a>';
        echo '<br>';
        echo '<br>';
        echo '<a href=index.php?controller=utilisateur&action=update&login=', rawurlencode($urllogin) ,'&prenom=',rawurlencode($urlprenom),'&nom=',rawurlencode($urlnom) ,'>' . ' Modifier : '.htmlspecialchars($ulogin) .'</a>';
    }
        
    ?>
<!-- </body>

</html> -->