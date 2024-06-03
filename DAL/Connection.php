<?php 
    namespace DAL; 
    
    use \PDO;
   class Connection {
      private static $dbNome = 'chaos-trials'; 
      private static $dbHost = 'localhost';
      private static $dbUsuario = 'root'; 
      private static $dbSenha = '';
      
      private static $cont = null; 

      
    public static function connect(){
        if (self::$cont == null){
            try{ 
               self::$cont = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbNome,  self::$dbUsuario , self::$dbSenha); 
            }
            catch (\PDOException $exception) {
                die ($exception->getMessage());
            }
        }
        return self::$cont; 
    }

    public static function disconnect (){
        self::$cont = null;
        return self::$cont;  
    }

   }
?>