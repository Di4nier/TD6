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
  
  if(empty($_GET["immat"]) && empty($_GET["couleur"]) && empty($_GET["marque"])){
    $immat= "";
    $couleur="";
    $marque="";
    $mode = "require";
    $mode2 = "created";
  }else{
    $marque = $_GET['marque'];
    $couleur = $_GET['couleur'];
    $immat = $_GET['immat'];
    $mode="readonly";
    $mode2= "updated";
  };


  ?>

    <form method="get" action="index.php">
        <fieldset>
          <legend>Mon formulaire Update :</legend>
          <p>
            <label for="marque_id">Marque</label> :
            <input type="text" placeholder="Ex : Tesla" name="marque" id="marque_id" value="<?php echo htmlspecialchars($marque); ?>"  />
          </p>
          <p>
            <label for="couleur_id">Couleur</label> :
            <input type="text" placeholder="Ex : Noire" name="couleur" id="couleur_id" value="<?php echo htmlspecialchars($couleur); ?>" />
          </p>
          <p>
            <label for="immat_id">Immatriculation</label> :
            <input type="text" placeholder="Ex : 256AB34" name="immat" id="immat_id" value="<?php echo htmlspecialchars($immat); ?>" <?php echo $mode ?>/>
          </p>
          <p>
            <input type="submit" value="Mettre à Jour" formmethode="action" />
            <input type="hidden" name="action" value="<?php echo $mode2 ?>">
          </p>
        </fieldset> 
      </form>
      
    
<!-- </body>
</html> -->