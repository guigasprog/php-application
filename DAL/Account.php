<?php
namespace DAL; //Data Access Layer
include_once 'C:\xampp\htdocs\app\DAL\Connection.php';
include_once 'C:\xampp\htdocs\app\MODEL\Account.Model.php';


class Account
{
      public function Select()
   {
      $sql = "Select * from account;";
      $con = Connection::connect();
      $data = $con->query($sql);
      $con = Connection::disconnect();

      foreach ($data as $row) {
         $account = new \MODEL\Account();

         $account->setId($row['id']);
         $account->setUsername($row['username']);
         $account->setEmail($row['email']);
         $account->setPassword($row['password']);
         $account->setIdCharacter($row['idCharacter']);

         $accounts[] = $account;
      }

      return $accounts;
   }


}

?>