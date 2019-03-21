<?php 

  require_once("config.php");

   //carrega um usuário
    //$root = new Usuario();
    //$root->loadbYid(4);
    //echo $root;

    //carrega uma lista de usuarios

    //   $lista = Usuario::getList();
     //  echo json_encode($lista);


     //carrega uma lista de usuários busando pelo login
     //$search = Usuario::search("jo");
     //echo json_encode($search);


     //carrega um usuário usando o login e a senha

    //$usuario = new Usuario();
    //$usuario->login("root","$&#*@");
    //echo $usuario;

    //Criar um novo usuário
    //$aluno = new Usuario("aluno", "@lun0");
    //$aluno->insert();
    // echo $aluno;

   $usuario = new Usuario();
   $usuario->loadById(11);
   $usuario->update("professor", "!&@#*&@#");

   echo $usuario;

 ?>