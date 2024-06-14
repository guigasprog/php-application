<?php
namespace DAL; //Data Access Layer
include_once 'C:\xampp\htdocs\php-application\DAL\Connection.php';
include_once 'C:\xampp\htdocs\php-application\MODEL\Account.Model.php';
include_once 'C:\xampp\htdocs\php-application\MODEL\Character.Model.php';
// include_once '../MODEL/Account.Model.php';
// include_once './Connection.php';

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

         $accounts[] = $account;
      }

      return $accounts;
   }

   public function SelectById($id)
   {
      $sql = "Select * from account Where id=?;";
      $con = Connection::connect();
      $query = $con->prepare($sql);
      $query->execute(array($id));
      $row = $query->fetch(\PDO::FETCH_ASSOC);
      $con = Connection::disconnect();

      $account = new \MODEL\Account();

      $account->setId($row['id']);
      $account->setUsername($row['username']);
      $account->setEmail($row['email']);
      $account->setPassword($row['password']);

      return $account;
   }

   public function SelectByEmail($email)
   {
      $sql = "Select * from account Where email='{$email}';";
      $con = Connection::connect();
      $data = $con->query($sql);
      $con = Connection::disconnect();
      foreach ($data as $row) {
         $account = new \MODEL\Account();
         $account->setId($row['id']);
         $account->setUsername($row['username']);
         $account->setEmail($row['email']);
         $account->setPassword($row['password']);
      }
      if(!empty($account)) return $account;
      else header("Location: ../game/mainPage.php");
   }

   public function Insert($name, $email, $senha)
   {
      $sql = "INSERT INTO account(username, email, password) VALUES('{$name}','{$email}','{$senha}');";
      
      $account = new \MODEL\Account();

      $con = Connection::connect();
      $account = $con->query($sql);
      $con = Connection::disconnect();
      return $account;
   }

   public function UpdateUsername($id, $username)
   {
      $sql = "UPDATE account SET id = '{$id}', username = '{$username}';";
      

      $con = Connection::connect();
      $account = $con->query($sql);
      $con = Connection::disconnect();

      return true;
   }

   public function Delete($idAccount){

      $sql = "Select * from characters Where idAccount='{$idAccount}';";
      $con = Connection::connect();
      $data = $con->query($sql);
      $con = Connection::disconnect();
      foreach ($data as $row) {
         $sql = "delete from attribute WHERE id = '{$row['idAttribute']}';";
         $con = Connection::connect();
         $query = $con->query($sql);
         $con = Connection::disconnect();

         $sql = "delete from characters WHERE id = '{$row['id']}';";
         $con = Connection::connect();
         $query = $con->query($sql);
         $con = Connection::disconnect();
      }

   
      $sql = "delete from account WHERE id = '{$idAccount}';";
      $con = Connection::connect();
      $query = $con->query($sql);
      $con = Connection::disconnect();

      return true;
   }


}

?>