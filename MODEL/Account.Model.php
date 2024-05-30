<?php 
  namespace MODEL; 
  class Account {
       private ?int $id; 
       private ?string $username;
       private ?string $email; 
       private ?string $password; 

       public function __construct() { }

       public function getID(){
           return $this->id; 
       }

       public function setId(int $id){
          $this->id = $id;     
       }

       public function getUsername(){
          return $this->username;       
       }

       public function setUsername(string $username){
          $this->username = $username; 
       }

       public function getEmail(){
         return $this->email;       
      }

      public function setEmail(string $email){
        $this->email = $email; 
      }

      public function getPassword(){
        return $this->password;       
      }

      public function setPassword(string $password){
        $this->password = $password; 
      }
     
  }

?>