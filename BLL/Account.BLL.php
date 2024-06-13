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

    public static function SelectById(int $id)
    {
        $dalAccount = new \DAL\Account();
    
        return $dalAccount->SelectById($id);
    }

    public static function SelectByEmail(string $email)
    {
        $dalAccount = new \DAL\Account();
    
        return $dalAccount->SelectByEmail($email);
    }

    public static function Delete(int $idAccount)
    {
        $dalAccount = new \DAL\Account();
    
        return $dalAccount->Delete($idAccount);
    }

    public static function UpdateUsername(int $id, string $username)
    {
        $dalAccount = new \DAL\Account();
    
        return $dalAccount->UpdateUsername($id, $username);
    }

    public static function register(string $username, string $email, string $senha){
        $dalAccount = new \DAL\Account();
        $account = $dalAccount->SelectByEmail($email);
        if(empty($account)) {
            $account = $dalAccount->Insert($username, $email, md5($senha));
            return $account;
        }
        
    }

    public static function login(string $email, string $senha){
        $dalAccount = new \DAL\Account();
        $account = $dalAccount->SelectByEmail($email);
        
        if(empty($account)){
            echo "Usuario não encontrado";
        }
        
        if($account->getPassword() == md5($senha)){
            setcookie("account", $account->getEmail(), time()+(86400 * 30), "/", "", 0);
            return true;
        }

        return false;
    }
}

?>