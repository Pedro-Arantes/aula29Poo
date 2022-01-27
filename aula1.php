<?php
// include -> faz a inclusao do arquivo td vez q a pagina e carregada.Gera warning mas continua rodando
// require-> faz a inclusao so q apenas uma vez ao dar erro ocorre um fatal error matando o programa 
//include "Usuario.class.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1 de Poo</title>
</head>
<body>
    <?php
        include "./class/Usuario.class.php";

        //declarando um novo objeto
        $usuario1 = new Usuario();
        $usuario2 = new Usuario();

        echo $usuario1->getUsuario("Juan","juan@gmail.com","9999-9999");
    ?>
</body>
</html>