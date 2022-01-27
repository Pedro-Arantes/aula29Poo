<?php

class Usuario {
    //declaração dos atributos da classe
    //Encapsulamento - se o atributo e public(-),private(+) ou protected(#)
    public $nome;
    public $email;
    public $celular;

    //function no php são os metodos
    function exibirCliente(){
        echo "Nome do Cliente: {$nome} <br>";
        echo "E-mail: {$email} <br>";
        echo "<hr>";
    }

    function getUsuario($nome,$email,$celular){
        return "Nome do Cliente: {$nome} tem o email: {$email}- Numero de celular:{$celular}<br> <hr>";
    }
}