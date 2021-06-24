<?php
class configBdd{  // C'est mon gateau
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

protected function connectBase(){ // Avec ce gateau, je veux faire ca 
    try{
        $db=new PDO("mysql:host=$this->hostname;dbname=$this->basename;charset=UTF8",$this->username, $this->password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
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








class crud extends configBdd {

        public $titre ;
        public $description ;
        public $couchage ;
        public $wifi ;
        public $tv ;
        public $cuisine ;
        public $linge ;
        public $animaux ;
        
        public $image_file;
        public $image_file2;
        public $image_file3;
    
    
        public function __construct($hostname, $username, $password, $basename, $titre, $description, $couchage, $wifi, $tv, $cuisine, $linge, $animaux, $image_file, $image_file2, $image_file3){   //, $img1, $img1Type, $img1Size, $img1Temp, $img2, $img2Type, $img2Size, $img2Temp, $img3, $img3Type, $img3Size, $img3Temp
            parent::__construct($hostname, $username, $password, $basename);

            $this->titre = $titre;
            $this->description = $description;
            $this->couchage = $couchage;
            $this->wifi = $wifi;
            $this->tv = $tv;
            $this->cuisine = $cuisine;
            $this->linge = $linge;
            $this->animaux = $animaux;
            
            $this->image_file = $image_file;
            $this->image_file2 = $image_file2;
            $this->image_file3 = $image_file3;

        }

        public static function addGite($titre, $description, $couchage, $wifi, $tv, $cuisine, $linge, $animaux, $image_file, $image_file2, $image_file3){

            $type		= $_FILES["image_file"]["type"];	
            $type2		= $_FILES["image_file2"]["type"];	
            $type3		= $_FILES["image_file3"]["type"];

            $size		= $_FILES["image_file"]["size"];
            $size2		= $_FILES["image_file2"]["size"];
            $size3		= $_FILES["image_file3"]["size"];

            $temp		= $_FILES["image_file"]["tmp_name"];
            $temp2		= $_FILES["image_file2"]["tmp_name"];
            $temp3		= $_FILES["image_file3"]["tmp_name"];
            
            $path="upload/".$image_file; 
            $path2="upload/".$image_file2; 
            $path3="upload/".$image_file3; 

            if(empty($titre)){
                $errorMsg="Veuillez indiquer le nom de la formule";
            }

            else if(empty($description)){
                $errorMsg="Veuillez indiquer une description à la formule";
            }

            else if(empty($couchage)){
                $errorMsg="Veuillez indiquer le nombre de couchage";
            }

            else if(empty($wifi)){
                $errorMsg="Veuillez indiquer si la wifi est disponible ou non";
            }

            else if(empty($tv)){
                $errorMsg="Veuillez indiquer le nombre de Télévision";
            }

            else if(empty($cuisine)){
                $errorMsg="Veuillez indiquer le nombre de cuisine";
            }

            else if(empty($linge)){
                $errorMsg="Veuillez indiquer le nombre de lave-linge";
            }

            else if(empty($animaux)){
                $errorMsg="Veuillez indiquer si les animaux sont acceptés ou non";
            }

            else if(empty($image_file)){
                $errorMsg="Veuillez choisir une image";
            }
            
            else if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') 
            {	
                if(!file_exists($path)) //Regarde si l'image existe dans /upload 
                {
                    if($size < 5000000) //Fichié maximum
                    {
                        move_uploaded_file($temp, "upload/" .$image_file); 
                    }
                    else
                    {
                        $errorMsg="Image trop grosse, maximum 5mb"; 
                    }
                }
                else
                {	
                    $errorMsg="Image déjà existante"; 
                }
            }
            
            else
            {
                $errorMsg="Mauvais format d'image ! choissiez seulement [JPG] - [JPEG] - [PNG] - [GIF]"; 
            }

            if(empty($image_file2)){
                $errorMsg="Veuillez choisir une image";
            }
            
            else if($type2=="image/jpg" || $type2=='image/jpeg' || $type2=='image/png' || $type2=='image/gif') 
            {	
                if(!file_exists($path2)) 
                {
                    if($size2 < 5000000) 
                    {
                        move_uploaded_file($temp2, "upload/" .$image_file2); 
                    }
                    else
                    {
                        $errorMsg="Image trop grosse, maximum 5mb"; 
                    }
                }
                else
                {	
                    $errorMsg="Image déjà existante"; 
                }
            }
            
            else
            {
                $errorMsg="Mauvais format d'image ! choissiez seulement [JPG] - [JPEG] - [PNG] - [GIF]"; 
            }

            if(empty($image_file3)){
                $errorMsg="Veuillez choisir une image";
            }
            else if($type3=="image/jpg" || $type3=='image/jpeg' || $type3=='image/png' || $type3=='image/gif') 
            {	
                if(!file_exists($path3)) 
                {
                    if($size3 < 5000000) 
                    {
                        move_uploaded_file($temp3, "upload/" .$image_file3); 
                    }
                    else
                    {
                        $errorMsg="Image trop grosse, maximum 5mb"; 
                    }
                }
                else
                {	
                    $errorMsg="Image déjà existante"; 
                }
            }
            
            else
            {
                $errorMsg="Mauvais format d'image ! choissiez seulement [JPG] - [JPEG] - [PNG] - [GIF]"; 
            }

            if(!isset($errorMsg))
            {
                $db = new configBdd ("localhost", "root", "", "gite");
                $query = $db->bddPDO->prepare("INSERT INTO rsv VALUES (DEFAULT, '".$titre."', '".$description."', '".$couchage."', '".$wifi."', '".$tv."', '".$cuisine."', '".$linge."', '".$animaux."', '".$image_file."', '".$image_file2."', '".$image_file3."')");
                $query->execute();
            
            }

        }

        public static function deleteGite($id){
            $db = new configBdd ("localhost", "root", "", "gite");
            $query = $db->bddPDO->prepare("DELETE FROM rsv WHERE id='".$id."'");
            $query->execute();
        }
}