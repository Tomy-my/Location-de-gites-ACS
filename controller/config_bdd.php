<?php
class configBdd{
    protected $hostname = "localhost";
    protected $username = "root";
    protected $password ="";
    protected $basename = "gite";
    public $bddPDO;


    public function __construct($hostname, $username, $password, $basename){
        $this->hostname=$hostname;
        $this->username=$username;
        $this->password=$password;
        $this->basename=$basename;
        $this->bddPDO=$this->connectBase();
    }

protected function connectBase(){
    try{
        $bdd=new PDO("mysql:host=$this->hostname;dbname=$this->basename",$this->username, $this->password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
    }
    catch(PDOException $e){
        echo 'Echec de la connexion'.  $e->getMessage();
    }
    }

    public function getHostname() {
        return $this->hostname;
    }
    public function getUsername() {
        return $this->username;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getbasename() {
        return $this->getbasename;
    }
    public function setHostname() {
        $this->hostname=$hostname;
    }
    public function setUsername() {
        $this->username=$username;
    }
    public function setPassword() {
        $this->password=$password;
    }
    public function setbasename() {
        $this->basename=$basename;
    }
}