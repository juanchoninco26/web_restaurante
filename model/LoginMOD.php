<?php
//videos de ayuda
/*
https://www.youtube.com/watch?v=7igKOgSfG9E
https://www.youtube.com/watch?v=5-A-jFFhS44
https://www.youtube.com/watch?v=nLrL9Ip3tWI
youtube.com/watch?v=4Nuyyoc2bPI
*/

require_once('../controller/ConfigDB.php');
class LoginMOD extends Conexion_bd
{
    private $conexion;
    private $nameUser;
    private $passUser;

    public function __construct()
    {
        $this->conexion = new Conexion_bd();
    }
    public function getLogin(string $user, string $pass)
    {
        $this->nameUser=$user;
        $this->passUser=$pass;
        try {
            // llamar al procedimiento almacenado
            $sentencia = $this->conexion->getConexion()->query("CALL login('$this->nameUser','$this->passUser')");
            //$sentencia->bindParam(1, $this->nameUser, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 50);
            //$sentencia->bindParam(2, $this->passUser, PDO::PARAM_STR | PDO::PARAM_INPUT_OUTPUT, 300);
            //$sentencia->execute();
            $row=$sentencia->fetchColumn();
            
            if($row == false){
                $row=false;
            }else{
                $row=true;
            }
            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $row;
    }
}