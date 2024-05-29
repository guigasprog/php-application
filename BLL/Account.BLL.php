<?php
namespace BLL;

include_once 'C:\xampp\htdocs\app\DAL\Account.php';
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