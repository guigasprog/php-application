<?php
namespace DAL; //Data Access Layer
include_once 'C:\xampp\htdocs\php-application\DAL\Connection.php';
include_once 'C:\xampp\htdocs\php-application\MODEL\Attribute.Model.php';
// include_once '../MODEL/Attribute.Model.php';
// include_once './Connection.php';

class Attribute
{
      public function Select()
   {
      $sql = "Select * from attribute;";
      $con = Connection::connect();
      $data = $con->query($sql);
      $con = Connection::disconnect();

      foreach ($data as $row) {
         $attribute = new \MODEL\Attribute();

         $attribute->setId($row['id']);
         $attribute->setPontos($row['pontos']);
         $attribute->setStrength($row['strength']);
         $attribute->setDexterity($row['dexterity']);
         $attribute->setVitality($row['vitality']);
         $attribute->setIntelligence($row['intelligence']);
         $attribute->setMind($row['mind']);

         $attributes[] = $attribute;
      }

      return $attributes;
   }

   public function SelectById(int $id)
   {
        $sql = 'Select * from attribute Where id=?;';
        $con = Connection::connect();
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $row = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Connection::disconnect();

        $attribute = new \MODEL\Attribute();

        $attribute->setId($row['id']);
        $attribute->setPontos($row['pontos']);
        $attribute->setStrength($row['strength']);
        $attribute->setDexterity($row['dexterity']);
        $attribute->setVitality($row['vitality']);
        $attribute->setIntelligence($row['intelligence']);
        $attribute->setMind($row['mind']);

        return $attribute;
    }

   public function Insert(\MODEL\Attribute $attribute) 
   {
      $sql = "INSERT INTO attribute(pontos, strength, dexterity, vitality, intelligence, mind) VALUES('{$attribute->getPontos()}','{$attribute->getStrength()}','{$attribute->getDexterity()}','{$attribute->getVitality()}','{$attribute->getIntelligence()}','{$attribute->getMind()}');";

      $lastId = 0;

      $con = Connection::connect();
      $con->query($sql);
      $lastId = $con->lastInsertId();
      echo $lastId;
      $con = Connection::disconnect();

      return $lastId;
   }


}

?>