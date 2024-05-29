<?php 
  namespace MODEL; 
  class Account {
       private ?int $id; 
       private ?int $strength;
       private ?int $dexterity; 
       private ?int $vitality; 
       private ?int $intelligence;
       private ?int $mind;

       public function __construct() { }

       public function getID(){
           return $this->id; 
       }

       public function setId(int $id){
          $this->id = $id;     
       }

       public function getStrength(){
          return $this->strength;       
       }

       public function setStrength(string $strength){
          $this->strength = $strength; 
       }

       public function getDexterity(){
         return $this->dexterity;       
      }

      public function setDexterity(string $dexterity){
        $this->dexterity = $dexterity; 
      }

      public function getVitality(){
        return $this->vitality;       
      }

      public function setVitality(string $vitality){
        $this->vitality = $vitality; 
      }

      public function getIntelligence(){
        return $this->intelligence;       
      }

      public function setIntelligence(string $intelligence){
        $this->intelligence = $intelligence; 
      }

      public function getMind(){
        return $this->mind;       
      }

      public function setMind(string $mind){
        $this->mind = $mind; 
      }
     
  }

?>