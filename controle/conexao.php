<?php

class conexao
{
    /*FDconnection do Delpli ou Zeosconnection Lazarus*/ 
    private static $dbnome = "olojinha";
    private static $user = "127.0.0.1";/*localhost*/
    private static $pass = "root";
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
  (PDO::MYSQL_ARRR_INIT_COMMAND => "SETNAMES utf8"));
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