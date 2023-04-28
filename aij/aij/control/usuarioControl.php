<?php
require_once ("../model/Usuario.php");
require_once ("../dao/usuarioDAO.php");
class usuarioControl{
private $usr;
private $dao;
private $acao;

public function __construct(){
      $this->usr= new Usuario();
      $this->dao= new usuarioDAO();
      $this->acao=$_REQUEST["acao"];
      $this->usr->setUsr($_POST["usr"]);
      $this->usr->setSenha($_POST["pass"]);
      $this->verificaAcao();
}
public function verificaAcao(){
    switch ($this->acao){
        case 0:
           $this->verificaAcesso();
            break;
        case 1:
            //o que fazer
            break;

    }
}
public function verificaAcesso(){
    if($this->dao->verificaAcesso($this->usr)) {
        header("Location:../index.php");
    }
     else
         header("Location:../view/login.php?erro=1");
}
}
new usuarioControl();