<?php
namespace BLL;

include_once 'C:\xampp\htdocs\php-application\DAL\Attribute.php';
// include_once '../DAL/Attribute.php';
use DAL;

class Attribute
{
    public function Select()
    {
        $dalAttribute = new \DAL\Attribute();
    
        return $dalAttribute->Select();
    }
}

?>