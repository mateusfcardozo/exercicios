<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco PHP</title>
    <script src="/exercicios/phpPOO/assets/js/script.js"></script>
    <link rel="stylesheet" href="/exercicios/phpPOO/assets/css/style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <header1>
        <h2 class="logo"> Banco Taurus</h2>
        <nav class="navegacao">
            <a href="">inicio</a>
            <a href="">Sobre</a>
            <a href="">Serviços</a>
            <a href="">Contato</a>
            <button class="botaoLogin-popup" onclick="mostrarLogin()">Login</button>
            <button class="botao-mode">Cor</button>
        </nav>
    </header1>
    <div class="Login-cadastro-popup" id="loginCadastroPopup">
        <span class="icon-fechar" onclick="fecharPopup()"><ion-icon name="close-outline"></ion-icon></span>
        <div class="form-box-Login">
            <h3>Login</h3>
            <br>
            <form id="form-login">
                <div class="input-box">
                    <input type="text" name="cpf" placeholder="CPF" required maxlength="11" oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                </div>
                <div class="input-box">
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>
                <div class="lembrar-senha">
                    <label> <input type="checkbox">Lembrar senha</label>
                    <a href="#">Esqueci a senha?</a>
                </div>
                <button type="button" class="botaoLogin">Login</button>
                <div class="cadastro-login">
                    <p>Não tem conta?
                        <a href="#" class="link-cadastro">Cadastrar-se</a>
                    </p>
                </div>
            </form>
        </div>
        <div class="form-box-cadastro">
            <h3>Cadastro</h3>
            <br>
            <form id="form-cadastro">
                <div class="input-box">
                    <input type="text" name="nome" placeholder="Nome" required>
                </div>
                <div class="input-box">
                    <input type="text" name="cpf" placeholder="CPF" required maxlength="11" oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                </div>
                <div class="input-box">
                    <input type="text" name="endereco" placeholder="Endereço" required>
                </div>
                <div class="input-box">
                    <input type="number" name="idade" placeholder="Idade" required maxlength="3" oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                </div>
                <div class="input-box">
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>

                <div class="lembrar-senha">
                    <label> <input type="checkbox" name="termos">Aceito os termos e condições</label>
                </div>
                <button type="button" class="botaocadastro">Cadastrar-se</button>
                <div class="cadastro-login">
                    <p>Já tem uma conta?
                        <a href="#" class="link-login" onclick="mostrarLogin()">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>