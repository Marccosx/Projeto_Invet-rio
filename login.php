<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Faça Login</title>
    <link rel="stylesheet" href="teste.css">
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        body {
            background-color:darkblue;
            color:aliceblue;
        }
    </style>
</head>

<body class="d-flex align-items-center min-vh-100">


    <div class="container">
        <form class="form-signin text-center" method="POST" action="conexao.php">
            <img class="mb-4" src="pics/imtech-logo.png" alt="logo Imtech" >
            <h1 class="h3 mb-3 font-weight-normal" >Faça login</h1>
            <label for="inputUsername" class="visually-hidden">Nome do Usuário</label>
            <input type="text" id="username" name="username" class="form-control-sm mb-3" placeholder="Username" required autofocus>
            <label for="inputPassword" class="visually-hidden">Senha</label><br>
            <input type="password" name="senha" id="inputPassword" class="form-control-sm mb-1" placeholder="Senha" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Lembrar de mim
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" value="entrar" id="entrar" name="entrar">Login</button>
            <p class="mt-5 mb-3 text-muted" >© 2004-2024</p>
        </form>
    </div>
   

    <!-- Bibliotecas JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>

