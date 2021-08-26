<?php 
#iniciando seção
 session_start();

 # variavel que define se o usuario foi autenticado

 $user_verfied = false;
 $user_id = null;
 $perfil = array(1=>'adm', 2=>'usuario');

$usuarios_app = array(
    array('id'=>1,'email'=>'teste@gmail.com','password'=>'1234','id_perfil'=>2),
    array('id'=>2,'email'=>'usuario@gmail.com','password'=>'1234','id_perfil'=>2),
    array('id'=>3,'email'=>'pedro@gmail.com','password'=>'1234','id_perfil'=>2),
    array('id'=>4,'email'=>'joao@gmail.com','password'=>'1234','id_perfil'=>1)

);  

 foreach($usuarios_app as $user){
     echo $user_id;
    if( $user['email'] === $_POST['email'] &&  $user['password']==  $_POST['password']){
        $user_verfied = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['id_perfil'];
    }
 }

 if ($user_verfied == true){
     echo 'Usuario Autenticado';
     $_SESSION['autenticado']='sim';
     $_SESSION['id']= $usuario_id;
     $_SESSION['perfil_id']= $usuario_perfil_id;
     header('Location:home.php');
 } else {
     $_SESSION['autenticado']='nao';
     header('Location: index.php?login=erro');
 }  

?>