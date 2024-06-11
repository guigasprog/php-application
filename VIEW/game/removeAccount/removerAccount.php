<?php 
    include_once '../../../BLL/Account.BLL.php'; 
    use BLL\Account;
    

    $id = $_GET['id'];
 
    $result =  \BLL\Account::Delete($id);  
  
    header("location: ../mainPage.php");

?>