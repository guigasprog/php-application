<?php 
    include_once '../../../BLL/Character.BLL.php'; 
    use BLL\Character;
    

    $id = $_GET['id'];
 
    $result =  \BLL\Character::Delete($id);  
  
    header("location: ../firstPage/firstPage.php");

?>