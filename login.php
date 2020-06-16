<?php require 'pages/header.php'; ?>
<div class="container">
    <h1>Login</h1>
    <?php require 'classes/usuarios.class.php';
    $u = new Usuario();
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        if ($u->login($email, $senha)) {
    ?>
            <script type="text/javascript">
                window.location.href = "./"
            </script>
        <?php
        } else {
        ?>
            <div class="alert alert-danger">
                Usuário ou senha inválidos
            </div>
    <?php
        }
    }
    ?>

    <form action="" method="post" autocomplete="off">
        <div class="form-group">
            <label for="nome">Email:</label>
            <input type="email" name="email" id="email" class="form-control" autocomplete="off" placeholder="Digite o seu e-mail">
            <label for="nome">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control">
            <input type="submit" value="Login" class="btn btn-default">
        </div>
    </form>
    <?php require 'pages/footer.php'; ?>