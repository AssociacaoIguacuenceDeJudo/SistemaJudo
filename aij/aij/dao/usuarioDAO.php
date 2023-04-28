<?php
require_once ("../control/Conexao.php");
class usuarioDAO
{
    private $conn;
    public function __construct()
    {
        $this->conn = Conexao::conectar();
    }
    public function verificaAcesso(Usuario $usr){
        $sql="select * from usuario where usuario='".$usr->getUsr()."' and senha = '".$usr->getSenha()."'";
        $query= $this->conn->query($sql);
        $result=$query->fetch();
        return $result;


    }

}