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
         $attribute->setStrength($row['strength']);
         $attribute->setDexterity($row['dexterity']);
         $attribute->setVitality($row['vitality']);
         $attribute->setIntelligence($row['intelligence']);
         $attribute->setMind($row['mind']);

         $attributes[] = $attribute;
      }

      return $attributes;
   }


}

?>