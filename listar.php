<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Vida - Doadores</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/listar.css">
</head>
<body>
    <header>
        <nav class="menu">
            
            <a href="index.php">
                <img class="logo" src="img/logo2.png" alt="">
            </a>
            <div class="btns">
                <a href="cadastro.php">
                    <div class="btn-cadastro btn"> <p>Cadastre-se</p> </div>
                </a>
                
                <a href="requisitos.php">
                    <div class="btn-requisitos btn"> <p>Requisitos</p> </div>
                </a>
            </div>
        </nav>
    </header>
    <main>
       <section class="paginaDoadores">
            <h1>Doadores Cadastrados</h1>
       </section> 
    </main>
</body>
</html>