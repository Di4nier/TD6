<!-- <html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD5 Controlleur</title>
</head>
<body> -->

<?php
    require_once './lib/File.php'; 
    require_once File::build_path(['model','ModelVoiture.php']);


     ; // chargement du modèle
    class ControllerVoiture{

        protected static $object = 'voiture';

        public static function readAll(){
            $tab_v = ModelVoiture::selectAll(); //appel au modèle pour gerer la BD
            $controller = static::$object;
            $view='list';
            $pagetitle='Liste des Voitures';
            require File::build_path(['view','voiture','view.php']); //redirige vers la vue
        }

        public static function read($immat){
            $tab_voit = ModelVoiture::select($immat);
            $controller = static::$object;
            $view='detail';
            $pagetitle='Info Voiture ' . $immat;
            require File::build_path(['view','voiture','view.php']);
        }

        public static function create(){
            $controller = static::$object;
            $view='update';
            $pagetitle='Création Voiture';
            require File::build_path(['view','voiture','view.php']);
        }

        public static function update(){
            $controller = static::$object;
            $view='update';
            $pagetitle='Modification Voiture';
            require File::build_path(['view','voiture','view.php']);
        }

        public static function created($i,$m,$c){
            ModelVoiture::Save($i, $m, $c);
            $tab_v = ModelVoiture::selectAll(); //appel au modèle pour gerer la BD
            $controller = static::$object;
            $view='created';
            $pagetitle='Voiture '. $i . ' Créer !';
            require File::build_path(['view','voiture','view.php']);
        }

        public static function updated($i,$m,$c){
            ModelVoiture::update($i, $m, $c);
            $tab_v = ModelVoiture::selectAll(); //appel au modèle pour gerer la BD
            $controller = static::$object;
            $view='updated';
            $pagetitle='Voiture '. $i . ' Mis à jour !';
            require File::build_path(['view','voiture','view.php']);
        }

        public static function deleted($immat){
            ModelVoiture::delete($immat);
            $tab_v = ModelVoiture::selectAll(); //appel au modèle pour gerer la BD
            $controller = static::$object;
            $view='deleted';
            $pagetitle='Voiture ' . $immat . ' Supprimer !';
            require File::build_path(['view','voiture','view.php']);
        }
        
        public static function error(){
            $controller = static::$object;
            $view='error';
            $pagetitle='Erreur !';
            require File::build_path(['view','voiture','view.php']);
        }
    }
    ?>

<!-- </body>
</html> -->