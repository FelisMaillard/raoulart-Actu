<?php
class Contact {
    public $nom;
    public $prenom;
    public $mail;

    public function __construct(string $nom,string $prenom,string $mail) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
    }
    public static function ajoutContact($contact,$pdo){
        $sql = "INSERT INTO contact (prenom, nom, mail) VALUES ('" . $contact->prenom . "', '" . $contact->nom . "', '" . $contact->mail . "')";
        $result = $pdo->query($sql);
    }
}
?>