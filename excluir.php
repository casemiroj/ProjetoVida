<?php
    include("conecta.php");

    $reccod = $_GET["idexc"];

    mysqli_query($conexao, "delete from doador where CodDoador=$reccod");

    header("Location: listar.php");
?>