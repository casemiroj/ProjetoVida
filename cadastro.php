<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Vida - Cadastro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <nav class="menu">
            
            <a href="index.php">
                <img class="logo" src="img/logo2.png" alt="">
            </a>
            <div class="btns">
                <a href="cadastro.php">
                    <div class="btn-cadastro"> <p>Cadastre-se</p> </div>
                </a>
                
                <a href="requisitos.php">
                    <div class="btn-requisitos"> <p>Requisitos</p> </div>
                </a>
            </div>
        </nav>
    </header>
    <main>
        <section class="cadastro">
            <h2>Faça seu cadastro</h2>
            <p>Ajude a salvar uma vida</p>

            <form action="action.php" method="post">
                <fieldset class="dadosPessoais">
                    <label for="nomeSobrenome">Nome completo</label>
                    <input name="nomeSobrenome" type="text" id="nomeSobrenome" class="inputPadrao" placeholder="Nome completo" required>
                    <label for="cpf">CPF</label>
                    <input name="cpf" type="number" id="cpf" class="inputPadrao" placeholder="xxx.xxx.xxx-xx" required>
                    <label for="telefone">Telefone</label>
                    <input name="telefone" type="tel" id="telefone" class="inputPadrao" placeholder="(xx)xxxx-xxxx" required>
                    <label for="tipoSangue">Tipo sanguineo</label>
                    <input name="tipoSangue" type="text" id="tipoSangue" class="inputPadrao" placeholder="Tipo sanguineo" required>
                </fieldset>

                <fieldset class="endereco">
                    <label for="uf">UF</label>
                    <input name="uf" type="text" id="uf" class="inputPadrao" placeholder="SP" required>
                    <label for="cidade">Cidade</label>
                    <input name="cidade" type="text" id="cidade" class="inputPadrao" placeholder="São Paulo" required>
                    <label for="bairro">Bairro</label>
                    <input name="bairro" type="text" id="bairro" class="inputPadrao" placeholder="Bairro" required>
                    <label for="endereco">Endereço</label>
                    <input name="endereco" type="text" id="endereco" class="inputPadrao" placeholder="Rua dos Alfeneiros, 4" required>
                </fieldset>

                <input type="submit" value="Enviar" class="enviar">
            </form>
        </section>
    </main>
</body>
</html>