<?php 
class Conexion_bd{
    private $host="localhost:2526";
    private $usuario="root";
    private $clave="";
    private $base_datos="asadero";
    private $charset="utf8";
    public $conection;
    
    //PDO
    public function __construct()
    {
        try {
            $dataConn="mysql:host=" .$this->host. "; dbname=".$this->base_datos."; charset=". $this->charset;
            $option=[
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => FALSE,
            ];
            $this->conection=new PDO($dataConn, $this->usuario, $this->clave,$option);
            //if($this->conection==true) echo "conectado";
        } catch (PDOException $e) {
            print "Error: "+$e->getMessage()+".";
            die();
        }
    }
    public function getConexion(){
        return $this->conection;
    }
}
?>