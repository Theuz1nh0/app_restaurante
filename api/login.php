<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/js/login_singin_page.js"></script>
    <title>Document</title>
</head>

<body class="h-100vh">
    <header class="container text-center p-2">
        <a class="link-underline link-underline-opacity-0 text-black fs-5" href="../index.html">
            <span class="ga-maamli-regular bg-light-danger p-2 rounded-4">FullStack</span> Restaurante
        </a>
    </header>

    <main class="container d-flex justify-content-center align-items-center mt-5 px-4" id="formLogin">
        <div class="border border-light-danger mt-5 p-4 rounded-3 mw-500 custon-box-shadow mb-5">
            <div class="text-center">
                <span class="fs-4 text"><strong>Fazer login</strong></span>
            </div>
            <form class="mt-3" method="post" action="./restaurante_controller.php">
                <div class="mb-3">
                    <label for="userName" class="form-label">Usuário:</label>
                    <input type="text" class="form-control" id="userName" name="user_name">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>