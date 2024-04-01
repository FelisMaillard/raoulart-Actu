<?php
require_once ('classSQL.php');
class Contact extends SQL{
    public $nom;
    public $prenom;
    public $mail;

    public function __construct(array $data) {
        $this->nom = $data['nom'];
        $this->prenom = $data['prenom'];
        $this->mail = $data['mail'];
    }
    public static function ajoutContact($prenom,$nom,$mail){
        $sql = "INSERT INTO contact (prenom, nom, mail) VALUES (:prenom, :nom, :mail)";
        $data = [
            'nom' =>$nom,
            'prenom' =>$prenom,
            'mail' =>$mail
        ];
        SQL::modifBase($data,$sql);
    }
    public static function supprimerContact($mail){
        $sql = "DELETE FROM contact WHERE mail = :mail";
        $data = [
           'mail' =>$mail
        ];
        SQL::modifBase($data,$sql);
    }
    public static function getcontact():array{
        $sql = "SELECT * FROM contact ORDER BY id_client";
        return SQL::afficherBase($sql);
    }
    public function getNom():string
    {
        return $this->nom;
    }
    public function getPrenom():string
    {
        return $this->prenom;
    }
    public function getMail():string
    {
        return $this->mail;
    }
}
?>