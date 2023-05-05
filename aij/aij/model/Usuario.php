<?php

class Usuario
{
  private $usr;
  private $id;
  private $senha;
  private $tipo;

    /**
     * @return mixed
     */
    public function getUsr()
    {
        return $this->usr;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsr($usr)
    {
        $this->usr = $usr;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
}