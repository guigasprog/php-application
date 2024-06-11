<?php
namespace BLL;

include_once 'C:\xampp\htdocs\php-application\DAL\Attribute.php';
use DAL;

include_once 'C:\xampp\htdocs\php-application\MODEL\Attribute.Model.php';
use MODEL;

class Attribute
{
    public function Select()
    {
        $dalAttribute = new \DAL\Attribute();
    
        return $dalAttribute->Select();
    }

    public static function Insert($forca, $destreza, $vitalidade, $inteligencia, $mente)
    {
        $dalAttribute = new \DAL\Attribute();

        $attribute = new \MODEL\Attribute();

        $attribute->setStrength($forca);
        $attribute->setDexterity($destreza);
        $attribute->setVitality($vitalidade);
        $attribute->setIntelligence($inteligencia);
        $attribute->setMind($mente);

        return $dalAttribute->Insert($attribute);
    }
}

?>