<?php

    require_once File::build_path(['config','conf.php']);

    class Model
    {

        static public $pdo;

        static public function init()
        {
            $hostname=Conf::getHostname();
            $database_name=Conf::getDatabase();
            $login=Conf::getLogin();
            $password=Conf::getPassword();

            try{
                self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name",$login,$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            }catch(PDOException $e){
                if(Conf::getDebug()){
                    echo $e->getMessage();
                }else{
                    echo 'Une erreur est survenue 🤖 Retour a l accueil';
                }
                die();
            }
            
        }

        public static function selectAll(){

            $table_name = static::$object;
            $class_name = "Model" . ucfirst($table_name);

            $_REQUEST ="SELECT * from $table_name";
            $rep = Model::$pdo->query($_REQUEST);
            $rep->setFetchMode(PDO::FETCH_CLASS, $class_name);
            $tab_obj = $rep->fetchAll();
            return $tab_obj;
          }

        public static function select($primary_value) {

            $table_name = static::$object;
            $class_name = "Model" . ucfirst($table_name);
            $primary_key = static::$primary;

            $sql = "SELECT * from $table_name WHERE $primary_key=:nom_tag";
            // Préparation de la requête
            $req_prep = Model::$pdo->prepare($sql);
            $values = array(
            "nom_tag" => $primary_value,
            //nomdutag => valeur, ...
            );
            // On donne les valeurs et on exécute la requête
            $req_prep->execute($values);
            // On récupère les résultats comme précédemment
            $req_prep->setFetchMode(PDO::FETCH_CLASS, $class_name);
            $tab_voit = $req_prep->fetchAll();
            // Attention, si il n'y a pas de résultats, on renvoie false
            if (empty($tab_voit)){
              require File::build_path(['view','voiture','error.php']);
              return false;
            }
            else{
              return $tab_voit;
            }
        }

        static public function delete($primary){

            $table_name = static::$object;
            $primary_key = static::$primary;

        $sql = "DELETE FROM $table_name WHERE $primary_key=:tag1";
        $prep = Model::$pdo->prepare($sql);
        $values = array(
            "tag1" => $primary,
        );
        $prep->execute($values);

        }

        
    }

    Model::Init();

?>
