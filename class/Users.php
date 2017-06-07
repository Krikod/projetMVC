<?php
class Users
{
    private $id;
    private $email;
    private $pwd;
    private $nom;
    private $prenom;
    private $db; // à virer

    public function __construct()
    {
        $db = new PDO(BDD_DRIVER.':host='.BDD_SERVEUR.';dbname='.BDD,BDD_USER,BDD_MDP);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $this->db =$db;
    }

    public function getId() {
        return $this->id;
    }
    public function getEmail()  {
        return $this->email;
    }

    public function getPwd()  {
        return $this->pwd;
    }

    public function getNom()  {
        return $this-> nom;
    }

    public function getPrenom()  {
        return $this-> prenom;
    }

    public function setId($id){
        return $this->id=$id;
    }

    public function setEmail($email){
        return $this->email=$email;
    }

    public function setPwd($pwd){
        return $this->pwd=$pwd;
    }

    public function setNom($nom){
        return $this->nom=$nom;
    }

    public function setPrenom($prenom){
        return $this->prenom=$prenom;
    }
    
// Sélection utilisateur
// CRUD
// CREATE

function createUser(array $tabUser)
    {

        //var_dump($tabUser);
        try{
        // Ecriture de la requête
        $reqInsertUser = 'INSERT INTO MVC (nom,prenom,mdp,email) VALUES ';

        $reqInsertUser .= '(:nom, :prenom, :mdp, :email)';

        $user = $this->db->prepare($reqInsertUser);
        $user->execute($tabUser);

            return $this->db->lastInsertId();

        } catch(PDOException $est) {
           die($est->getMessage()."<br>");
        }


    }
}