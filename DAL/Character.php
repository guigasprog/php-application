<?php
namespace DAL; //Data Access Layer
include_once 'C:\xampp\htdocs\php-application\DAL\Connection.php';
include_once 'C:\xampp\htdocs\php-application\MODEL\Character.Model.php';
// include_once '../MODEL/character.Model.php';
// include_once './Connection.php';

class Character
{
      public function Select()
   {
      $sql = "Select * from characters;";
      $con = Connection::connect();
      $data = $con->query($sql);
      $con = Connection::disconnect();

      foreach ($data as $row) {
         $character = new \MODEL\Character();

         $character->setId($row['id']);
         $character->setName($row['name']);
         $character->setClass($row['class']);
         $character->setLevel($row['level']);
         $character->setXp($row['xp']);
         $character->setXpNecessario($row['xp_necessario']);
         $character->setVida($row['vida']);
         $character->setVidaAtual($row['vida_atual']);
         $character->setIdAttribute($row['idAttribute']);
         $character->setIdAccount($row['idAccount']);

         $characters[] = $character;
      }

      return $characters;
   }

   public function SelectById(int $id)
   {
        $sql = 'Select * from characters Where id=?;';
        $con = Connection::connect();
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $row = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Connection::disconnect();

        $character = new \MODEL\Character();
        $character->setId($id);
        $character->setName($row['name']);
        $character->setClass($row['class']);
        $character->setLevel($row['level']);
        $character->setXp($row['xp']);
        $character->setXpNecessario($row['xp_necessario']);
        $character->setVida($row['vida']);
        $character->setVidaAtual($row['vida_atual']);
        $character->setIdAttribute($row['idAttribute']);
        $character->setIdAccount($row['idAccount']);

        return $character;
    }

    public function SelectByIdAccount(int $idAccount)
   {
        $sql = "Select * from characters Where idAccount='{$idAccount}';";
        $con = Connection::connect();
        $data = $con->query($sql);
        $con = Connection::disconnect();
        foreach ($data as $row) {
         $character = new \MODEL\Character();

         $character->setId($row['id']);
         $character->setName($row['name']);
         $character->setClass($row['class']);
         $character->setLevel($row['level']);
         $character->setXp($row['xp']);
         $character->setXpNecessario($row['xp_necessario']);
         $character->setVida($row['vida']);
         $character->setVidaAtual($row['vida_atual']);
         $character->setIdAttribute($row['idAttribute']);
         $character->setIdAccount($row['idAccount']);

         $characters[] = $character;
         }
         if(!empty($characters)) return $characters;
    }

   public function Insert(\MODEL\Character $character){
      $sql = "INSERT INTO characters(name, class, level, xp, xp_necessario, vida, vida_atual, idAttribute, idAccount) VALUES('{$character->getName()}','{$character->getClass()}','{$character->getLevel()}','{$character->getXp()}','{$character->getXpNecessario()}','{$character->getVida()}','{$character->getVidaAtual()}','{$character->getIdAttribute()}','{$character->getIdAccount()}');";

      $con = Connection::connect();
      $con->query($sql);
      $con = Connection::disconnect();

      return $character;
   }

   public function Update($id, $level, $xp, $xpNecessario, $vida, $vidaAtual)
   {
      $sql = "UPDATE characters SET level = '{$level}', xp = '{$xp}', xp_necessario = '{$xpNecessario}', vida = '{$vida}', vida_atual = '{$vidaAtual}' WHERE id = '{$id}';";
      

      $con = Connection::connect();
      $character = $con->query($sql);
      $con = Connection::disconnect();

      return true;
   }

   public function Delete($id){
      
      $character = Character::SelectById($id);

      $sql = "delete from attribute WHERE id = '{$character->getIdAttribute()}';";
      $con = Connection::connect();
      $query = $con->query($sql);
      $con = Connection::disconnect();

      $sql = "delete from characters WHERE id = '{$character->getId()}';";
      $con = Connection::connect();
      $query = $con->query($sql);
      $con = Connection::disconnect();

      return $query;
   }

}

?>