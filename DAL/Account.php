<?php
namespace DAL; //Data Access Layer
include_once 'C:\xampp\htdocs\php-application\DAL\Connection.php';
include_once 'C:\xampp\htdocs\php-application\MODEL\Account.Model.php';
//include_once '../MODEL/Account.Model.php';
//include_once './Connection.php';

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