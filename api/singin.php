<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/style.css">
    <script src="./assets/js/login_singin_page.js"></script>
    <title>Document</title>
</head>

<body class="h-100vh">
    <header class="container text-center p-2">
        <a class="link-underline link-underline-opacity-0 text-black fs-5" href="index.html">
            <span class="ga-maamli-regular bg-light-danger p-2 rounded-4">FullStack</span> Restaurante
        </a>
    </header>

    <main class="container d-flex justify-content-center align-items-center mt-5 px-4" id="formLogin">
        <div class="border border-light-danger mt-5 p-4 rounded-3 mw-500 custon-box-shadow mb-5">
            <div class="text-center">
                <span class="fs-4 text"><strong>Cadastro</strong></span>
            </div>
            <form class="mt-3" method="post" action="./request_singin.php">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome completo:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="userName" class="form-label">Nome de usuário:</label>
                    <input type="text" class="form-control" id="userName" name="user_name">
                </div>
                <div class="mb-3">
                    <label for="userName" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="userName" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Repita sua senha:</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirm_password">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </main>

    <script src="./node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>