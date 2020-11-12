<?php
    session_start();

    include('conecta.php');

    if((isset($_POST["loginEmail"])) && (isset($_POST["loginSenha"]))) {
        $usuario = mysqli_real_escape_string($conexao, $_POST["loginEmail"]);
        $senha = mysqli_real_escape_string($conexao, $_POST["loginSenha"]);

        $sql = "SELECT * FROM admin WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
        $result = mysqli_query($conexao, $sql);
        $resultado = mysqli_fetch_assoc($result);

       if(empty($resultado)) {
        $_SESSION['loginErro'] = 'Usuario ou senha invalido';
        header("Location:login.php");
       } elseif(isset($resultado)) {
           header("Location:listar.php");
       } else {
            $_SESSION['loginErro'] = 'Usuario ou senha invalido';
            header("Location:login.php");
       }

    } else {
        $_SESSION['loginErro'] = 'Usuario ou senha invalido';
        header("Location:login.php");
    }
?>