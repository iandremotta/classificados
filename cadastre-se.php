<?php require 'pages/header.php'; ?>
<div class="container">
    <h1>Cadastre-se</h1>
    <?php require 'classes/usuarios.class.php';
    $u = new Usuario();
    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $telefone = addslashes($_POST['telefone']);
        if (!empty($nome) && !empty($email) && !empty($senha)) {
            if ($u->cadastrar($nome, $email, $senha, $telefone)) {
    ?>
                <div class="alert alert-success">
                    Usuário cadastrado com sucesso
                </div>
                <a href="login.php" class="alert-link">Faça login agora!</a>
            <?php
            } else {
            ?>
                <div class="alert alert-warning">
                    Usuário já existente
                </div>
                <a href="login.php" class="alert-link">Faça login agora!</a>
            <?php
            }
        } else {
            ?>
            <div class="alert alert-warning">
                Preencha todos os campos
            </div>
    <?php

        }
    }
    ?>
</div>

<form action="" method="post" autocomplete="off">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome" autocomplete="off">
        <label for="nome">Email:</label>
        <input type="email" name="email" id="email" class="form-control" autocomplete="off" placeholder="Digite o seu e-mail">
        <label for="nome">Senha:</label>
        <input type="password" name="senha" id="senha" class="form-control">
        <label for="nome">Telefone:</label>
        <input type="text" name="telefone" placeholder="Digite seu telefone" id="telefone" class="form-control">
        <input type="submit" value="Cadastrar" class="btn btn-default">
    </div>
</form>
<?php require 'pages/footer.php'; ?>