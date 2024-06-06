<?php 
namespace BLL;

include_once 'C:\xampp\htdocs\php-application\DAL\Character.php';
use DAL;

class Character
{
    public function Select()
    {
        $dalCharacter = new \DAL\Character();
    
        return $dalCharacter->Select();
    }

    public function SelectById(int $id)
    {
        $dalCharacter = new \DAL\Character();
    
        return $dalCharacter->SelectById($id);
    }

    public static function SelectByIdAccount(int $idAccount)
    {
        $dalCharacter = new \DAL\Character();
        $characters = $dalCharacter->SelectByIdAccount($idAccount);
        if(!empty($characters)) return $characters;
    }

    public static function Insert(\MODEL\Character $character)
    {
        $dalCharacter = new \DAL\Character;

        return $dalCharacter->Insert($character);;
    }
}

?>