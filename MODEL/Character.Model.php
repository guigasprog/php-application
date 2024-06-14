<?php 
  namespace MODEL; 
  class Character {
       private ?int $id; 
       private ?string $name;
       private ?string $class; 
       private ?int $level;
       private ?float $xp;
       private ?float $xp_necessario;
       private ?int $vida;
       private ?int $vida_atual;
       private ?int $idAttribute;
       private ?int $idAccount;
       private ?string $historico;

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

   public function getXpNecessario(){
    return $this->xp_necessario;       
 }

 public function setXpNecessario(float $xp_necessario){
   $this->xp_necessario = $xp_necessario; 
 }

 public function getVidaAtual(){
  return $this->vida_atual;       
}

public function setVidaAtual(int $vida_atual){
 $this->vida_atual = $vida_atual; 
}

public function getHistorico(){
  return $this->historico;       
}

public function setHistorico(string $historico){
 $this->historico = $historico; 
}

 public function getVida(){
  return $this->vida;       
}

public function setVida(int $vida){
 $this->vida = $vida; 
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