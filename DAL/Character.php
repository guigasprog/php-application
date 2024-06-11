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
        $character->setId($row['id']);
        $character->setName($row['name']);
        $character->setClass($row['class']);
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
         $character->setIdAttribute($row['idAttribute']);
         $character->setIdAccount($row['idAccount']);

         $characters[] = $character;
         }
         if(!empty($characters)) return $characters;
    }

   public function Insert(\MODEL\Character $character){
      $sql = "INSERT INTO characters(name, class, idAttribute, idAccount) VALUES('{$character->getName()}','{$character->getClass()}','{$character->getIdAttribute()}','{$character->getIdAccount()}');";

      $con = Connection::connect();
      $con->query($sql);
      $con = Connection::disconnect();

      return $character;
   }

}

?>