<?php 
    include_once '../../../BLL/Account.BLL.php'; 
    use BLL\Account;
    


    $id = $_GET['id'];
    $username = $_GET['username'];

    \BLL\Account::UpdateUsername($id, $username);

    header("location: ../firstPage/firstPage.php");
    

?>