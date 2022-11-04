<!-- <html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Création</title>
</head>
<body> -->
<?php
  require_once './lib/File.php';
  
  if(empty($_GET["login"]) && empty($_GET["nom"]) && empty($_GET["prenom"])){
    $login= "";
    $nom="";
    $prenom="";
    $mode = "require";
    $mode2 = "created";
  }else{
    $prenom = $_GET['prenom'];
    $nom = $_GET['nom'];
    $login = $_GET['login'];
    $mode="readonly";
    $mode2= "updated";
  };


  ?>

    <form method="get" action="index.php">
        <fieldset>
          <legend>Mon formulaire Update :</legend>
          <p>
            <label for="marque_id">Nom</label> :
            <input type="text" placeholder="Ex : Petit-Laborde" name="marque" id="marque_id" value="<?php echo htmlspecialchars($nom); ?>" />
          </p>
          <p>
            <label for="couleur_id">Prenom</label> :
            <input type="text" placeholder="Ex : Jade" name="couleur" id="couleur_id" value="<?php echo htmlspecialchars($prenom); ?>" />
          </p>
          <p>
            <label for="immat_id">Login</label> :
            <input type="text" placeholder="Ex : Patalavanille" name="immat" id="immat_id" value="<?php echo htmlspecialchars($login); ?>" <?php echo $mode ?> />
          </p>
          <p>
            <input type="submit" value="Mettre à Jour" formmethode="action" />
            <input type="hidden" name="action" value="<?php echo $mode2 ?>">
          </p>
        </fieldset> 
      </form>
      
    
<!-- </body>
</html> -->