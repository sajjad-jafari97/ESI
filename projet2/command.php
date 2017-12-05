<?php
   class Command
   {
     private $arriver =NULL;
     private $depart=NULL;
     private $hauteur=NULL;
     private $largeur=NULL;
     private $prix =NULL;
     private $nombre=NULL;
     private $profondeur=NULL;
     private $horaires=NULL;
     private $id_client=NULL;
     private $genre=NULL;
     private $date=NULL;
     private $poids=NULL;




     public function __construct($arriver,$depart,$hauteur,$largeur,$prix,$nombre,$profondeur,$horaires,$id_client,$genre,$date, $poids)
     {
       $this->setarriver($arriver);
       $this->setdepart($depart);
       $this->sethauteur($hauteur);
       $this->setlargeur($largeur);
       $this->setprix($prix);
       $this->setnombre($nombre);
       $this->setprofondeur($profondeur);
       $this->sethoraires($horaires);
       $this->setid_client($id_client);
       $this->setgenre($genre);
       $this->setdate($date);
       $this->setpoids($poids);


     }


     public function getarriver(){
       return $this->arriver;
     }
     public function getdepart(){
       return $this->depart;
     }
     public function gethauteur(){
       return $this->hauteur;
     }
     public function getprix(){
       return $this->prix;
     }
     public function getnombre(){
       return $this->nombre;
     }
     public function getprofondeur(){
       return $this->niveau;
     }
     public function gethoraires(){
       return $this->horaires;
     }
     public function getid_client(){
       return $this->id_client;
     }
     public function getdate(){
       return $this->date;
     }
     public function getgenre(){
       return $this->genre;
     }
     public function getpoid(){
       return $this->poid;
     }



     public function setarriver($arriver){
        $this->arriver=$arriver;
     }
     public function setdepart($depart){
        $this->depart=$depart;
     }
     public function sethauteur($hauteur){
        $this->hauteur=$hauteur;
     }
     public function setlargeur($largeur){
        $this->largeur=$largeur;
     }
     public function setprix($prix){
        $this->prix=$prix;
     }

     public function setnombre($nombre){
             $this->nombre=$nombre;

     }
     public function setprofondeur($profondeur){
        $this->profondeur=$profondeur;
     }

     public function sethoraires($horaires){
             $this->horaires=$horaires;

     }
     public function setid_client($id_client){
        $this->id_client=$id_client;
     }
     public function setdate($date){
        $this->date=$date;
     }
     public function setgenre($genre){
        $this->genre=$genre;
     }
     public function setpoids($poids){
        $this->poids=$poids;
     }


   }
    $ans=new Command("frans","jhj",12,34,56,6,34,12,1,12,34,12);
  //  $ques=new Question(1,"moi","sport",1);
  //  $ques->setanswer($ans);
    var_dump($ans);

 ?>
