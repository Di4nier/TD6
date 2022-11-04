<!-- <!DOCTYPE html>
    <html>
        <head>
        <meta charset="UTF-8">
        <title>Liste des utilisateurs</title>
    </head>
<body> -->
<?php

require_once './lib/File.php';


$nbr = 1;

    foreach($tab_u as $u){
        $nomutil = $u->getNom();
        $preutil = $u->getPrenom();
        $loginurl = $u->getLogin();

        echo '<ul> <li> ' .$nbr .' </li> </ul>';
        echo '<p> Utilisateur : ' .  '<a href=index.php?controller=utilisateur&action=read&login=', rawurlencode($loginurl) ,'>' . htmlspecialchars($nomutil) .' '.htmlspecialchars($preutil) .'</a>' . '.</p>';
        $nbr = $nbr + 1;
        echo '<br>';
    }
?>
<!-- </body>

</html> -->