<?php 
  namespace MODEL; 
  class Character {
       private ?int $id; 
       private ?string $name;
       private ?string $class; 
       private ?int $level;
       private ?float $xp;
       private ?int $idAttribute;
       private ?int $idAccount;

       public function __construct() { }

       public function getId(){
           return $this->id; 
       }

       public function setId(int $id){
          $this->id = $id;     
       }

       public function getName(){
          return $this->name;       
       }

       public function setName(string $name){
          $this->name = $name; 
       }

       public function getClass(){
         return $this->class;       
      }

      public function setClass(string $class){
        $this->class = $class; 
      }

      public function getLevel(){
        return $this->level;       
     }

     public function setLevel(int $level){
       $this->level = $level; 
     }

     public function getXp(){
      return $this->xp;       
   }

   public function setXp(float $xp){
     $this->xp = $xp; 
   }

      public function getIdAttribute(){
        return $this->idAttribute;       
      }

      public function setIdAttribute(string $idAttribute){
        $this->idAttribute = $idAttribute; 
      }

      
      public function getIdAccount(){
        return $this->idAccount;       
      }

      public function setIdAccount(string $idAccount){
        $this->idAccount = $idAccount; 
      }
     
  }

?>