<?php
    require('config/conexao.php');

    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['password'])&& isset($_POST['password-confirmation']))
    //Verifica se todos os campos forma preenchidos
        if(empty($_POST['nome']) or empty($_POST['email']) or empty($_POST['password'])or empty($_POST['nopassword-confirmationme'])){
            $erro_geral = "Todos os campos são obrigatórios";
        }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/login.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
    <title>Cadastrar</title>
</head>
<body>
    <form method="post">
        <h1>Cadastrar</h1>

        <?php if(isset($erro_geral)){ ?>
            <div class="erro-geral animate__animated animate__rubberBand">
            <?php echo $erro_geral; ?>
            </div>
        <?php } ?>
    
        <div class="input-group">
            <img class="input-icon" src="images/usario.png" alt="">
            <input class="erro-input"type="text" name="nome" id="nome" placeholder="Digite seu nome..." required>
            <div class="erro">Por favor, informe um nome válido</div>
        </div>
        <div class="input-group">
            <img class="input-icon" src="images/login.png" alt="">
            <input class="erro-input" type="email" name="email" id="email" placeholder="Digite seu email..."required>
            <div class="erro">Por favor, informe seu email</div>
        </div>
        <div class="input-group">
            <img class="input-icon" src="images/password.png" alt="">
            <input class="erro-input" type="password" name="password" id="password" placeholder="Digite uma senha..." required>
            <div class="erro">Por favor, informe uma senha</div>
        </div>
        <div class="input-group">
            <img class="input-icon" src="images/password.png" alt="">
            <input class="erro-input" type="password" name="password-confirmation" id="password-confirmation" placeholder="Repita a senha..." required>
            <div class="erro">Por favor, repita a senha</div>
        </div>

        <div class="input-group">
            <input type="checkbox" name="termos" id="termos" value="ok" required>
            <label for="termos"class="text-label">Ao se cadastrar você concorda com a nossa <a class="link" href="#">Politíca de privacidade</a> e os <a class="link" href="#">Termos de uso</a></label>
        </div>
        <button type="submit" class="btn">Fazer Cadastro</button>
        <a class="link-cadastro"  href="index.php">Já tenho uma conta</a>
    </form>
</body>
</html>