<?php 
    include_once '../../../BLL/Account.BLL.php'; 
    use BLL\Account;
    
    setcookie("account", '', time() + (86400 * 30), "/", "", 0);


    header("location: ../mainPage.php");
    

?>