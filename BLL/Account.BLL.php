<?php
namespace BLL;

include_once 'C:\xampp\htdocs\php-application\DAL\Account.php';
use DAL;

class Account
{
    public function Select()
    {
        $dalAccount = new \DAL\Account();
    
        return $dalAccount->Select();
    }

    public static function register(string $username, string $email, string $senha){
        $dalAccount = new \DAL\Account();
        $account = $dalAccount->Insert($username, $email, $senha);
        return $account;
    }

    public static function login(string $email, string $senha){
        $dalAccount = new \DAL\Account();
        $account = $dalAccount->SelectByEmail($email);
        
        if(empty($account)){
            echo "Usuario não encontrado";
        }
        
        if($account->getPassword() == $senha){
            setcookie("account", $account->getEmail(), time()+(86400 * 30), "/", "", 0);
            return true;
        }

        return false;
    }
}

?>