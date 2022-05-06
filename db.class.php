<?php

class db {

    //host
    private $host = 'localhost';
    //usuario
    private $usuario = 'root';
    //senha
    private $senha = '';
    //banco de dados
    private $db = '';

    public function conecta_mySQL(){

        // crir conexao 
        //mysqli_connect(localizacao do bd,
        //usuario de acesso,
        //senha,
        //banco de dados);

        $con = mysqli_connect($this-> host,
        $this->usuario,
        $this->senha,
        $this->db);

        mysqli_set_charset($con,'utf8');

        //verificar se houve erro de conexao
        if(mysqli_connect_errno()){
            echo 'Erro ao tentar se conectar com o db MySQL: ' .mysqli_connect_error();
        }
        return $con;
    }



}










?>