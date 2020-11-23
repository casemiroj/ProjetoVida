<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Vida - Doadores</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/listar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="scripts/script.js"></script>
</head>
<body>
    <header>
        <nav class="menu">
            
            <a href="index.php">
                <img class="logo" src="img/logo2.png" alt="">
            </a>
            </div>
        </nav>
    </header>
    <main>
       <section class="paginaDoadores">
            <h1>Doadores Cadastrados</h1>
            <table>
                <thead>
                    <tr>
                        <th>NOME</th>
                        <th>CPF</td>
                        <th>TIPO SANGUINEO</th>
                        <th>TELEFONE</th>
                        <th>ENDEREÇO</th>
                        <th>CIDADE</th>
                        <th>UF</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include("conecta.php");
                        $seleciona = mysqli_query($conexao, "SELECT * from doador order by Nome");
                        while($campo = mysqli_fetch_array($seleciona)) { ?>
                            <tr>
                                <td><?=$campo["Nome"]?></td>
                                <td><?=$campo["CPF"]?></td>
                                <td><?=$campo["TipoSanguineo"]?></td>
                                <td><?=$campo["Telefone"]?></td>
                                <td><?=$campo["Endereco"]?></td>
                                <td><?=$campo["Cidade"]?></td>
                                <td><?=$campo["UF"]?></td>
                                <td> <button type="button" class="close" aria-label="Close" onclick="verifica(<?=$campo['CodDoador']?>)">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
       </section> 
    </main>
</body>
</html>