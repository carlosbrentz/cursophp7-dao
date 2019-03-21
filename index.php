<?php 

  require_once("config.php");

    $root = new Usuario();
    $root->loadbYid(4);

    echo $root;


 ?>