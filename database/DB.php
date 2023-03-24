<?php


//================= classe de connexion 
class DB{
    static public function connect(){
        $db = new PDO("mysql:host=localhost;dbname=sabir_store","root","");
        $db->exec("set names utf8"); // uft8 pour afficher avec plusieurs langues.....
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        
        return $db;
        
    }
    
}



?>