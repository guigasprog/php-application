<?php
namespace BLL;

include_once 'C:\xampp\htdocs\php-application\DAL\Account.php';
// include_once '../DAL/Account.php';
use DAL;

class Account
{
    public function Select()
    {
        $dalAccount = new \DAL\Account();
    
        return $dalAccount->Select();
    }
}

?>