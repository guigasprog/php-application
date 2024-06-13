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

    public static function SelectById(int $id)
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

    public static function Insert($name, $class, $idAttribute, $idAccount)
    {
        $dalCharacter = new \DAL\Character();

        $character = new \MODEL\Character();
        $character->setName($name);
        $character->setClass($class);
        $character->setLevel(1);
        $character->setXp(0.0);
        $character->setXpNecessario(100.0);

        $attribute = \BLL\Attribute::SelectById($idAttribute);

        $character->setVida(($attribute->getVitality()*5)+100);
        $character->setVidaAtual($character->getVida());
        $character->setIdAttribute($idAttribute);
        $character->setIdAccount($idAccount);
        $character = $dalCharacter->Insert($character);
        return !empty($character);
    }

    public static function Update(\MODEL\Character $character) {
        $dalCharacter = new \DAL\Character();

        return $dalCharacter->Update($character->getId(), $character->getLevel(), $character->getXp(), $character->getXpNecessario(), $character->getVida(), $character->getVidaAtual());
    }

    public static function Delete(int $idAccount)
    {
        $dalCharacter = new \DAL\Character();
        
        return $dalCharacter->Delete($idAccount);
    }

}

?>