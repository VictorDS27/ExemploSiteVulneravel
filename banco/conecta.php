<?php
    try{
        $conexao = mysqli_connect("localhost","root","","bd_vulneravel");


        // uma vulnerabilidade é que o banco de dados não tem senha, isso em uma hospedagem não é nada legal kkkkkkk
        
    }catch(Exception $e){
        echo "Erro: $e";
    }