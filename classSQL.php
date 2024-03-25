<?php
class SQL{
    public static function connexionBDD(){
        $host = '127.0.0.1';
        $db = 'raoulactu';
        $user = 'root';
        $pass = '';
        $port = 3306;
        $charset = 'utf8mb4' ;

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
        $pdo = new PDO($dsn,$user,$pass);
        return $pdo;
    }
    public static function ajouter(){
        $pdo = SQL::connexionBDD();
        $result = $pdo->prepare($sql);
        $result = $result->execute();
        return $result;
    }
    public static function afficher($sql){
        $pdo = SQL::connexionBDD();
        $temp = $pdo->prepare($sql);
        $temp->execute();
        return $temp->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>