<?php

class conexao
{
    /*FDconnection do Delpli ou Zeosconnection Lazarus*/ 
    private static $dbname = "olojinha";
    private static $host = "127.0.0.1";/*localhost*/
    private static $user = "root";
    private static $pass = "";
    private static $con = null;

    public function __construct(){
 
     throw new \expetion('not implemented');
}
public static function conectar (){
    if(null===self::$con){
try{
  self::$con = new PDO ("mysql:host=". 
  self::$host. ";dbname=". self::$dbname,
  self::$user,self::$pass,array
  (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}  catch(exception $erro){
    die($erro->GETMESSAGE()); 


}

}
return self::$con;

}

public static function desconectar()
{
    self::$CON = NULL;
}

}

?>