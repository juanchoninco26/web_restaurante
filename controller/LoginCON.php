<?php
include_once('../model/loginMOD.php');

#paguina uso del $post
#https://es.stackoverflow.com/questions/245950/recibir-datos-mediante-post-en-php-utilizando-fetch-javascript

$post = json_decode(file_get_contents('php://input'),true);
$post['usuario']="juan";
$post['clave']="1234";
if ($post['usuario'] and $post['clave']){

    //instanciamos para enviar los datos
    $dato=new LoginMOD();
    $res_dato=$dato->getLogin($post['usuario'],$post['clave']);

    if($res_dato==false){
        echo json_encode("404");//usuario no encontrado
    }else{
        echo json_encode("200");//usuario correcto
    } 

} else {
    echo json_encode('error en usuario o clave');
}