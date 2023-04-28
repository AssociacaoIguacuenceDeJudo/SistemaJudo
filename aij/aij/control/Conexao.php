<?php

class Conexao{
    private $conn;
    public static function conectar(){
        try {
        $this_conn = new PDO('mysql:host=localhost;dbname=aij', "root", "");
        $this_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
            catch
        (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        return $this_conn;
    }

}
