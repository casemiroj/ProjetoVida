<?php
    //Conexão com banco de dados
    include('conecta.php');
    
    //Variaveis vindas do formulário
    $nome=$_POST["nomeSobrenome"];
    $cpf=$_POST["cpf"];
    $telefone=$_POST["telefone"];
    $tipodesangue=$_POST["tipoSangue"];
    $uf=$_POST["uf"];
    $cidade=$_POST["cidade"];
    $bairro=$_POST["bairro"];
    $endereco=$_POST["endereco"];

    //Envio para o banco de dados
    mysqli_query($conexao, "insert into doador (Nome, CPF, Telefone, TipoSanguineo, UF, Cidade, Bairro, Endereco) values ('$nome', '$cpf', '$telefone', '$tipodesangue', '$uf', '$cidade', '$bairro', '$endereco')");

    //Redirecionamento
    header('Location: sucesso.php');