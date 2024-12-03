<header class="container">
    <!-- navigation -->
    <nav class="navbar">
        <div class="container-fluid flex-column flex-md-row justify-content-between">
            <!-- Restaurante logo -->
            <a class="navbar-brand" href="#">
                <span class="ga-maamli-regular bg-light-danger p-2 rounded-4">FullStack</span> Restaurante
            </a>

            <div class="flex-grow-1 flex-lg-grow-0">
                <div class="fixed-custom-md-bottom container">
                    <!-- navigaton options -->
                    <ul
                        class="navbar-nav flex-row justify-content-between justify-content-between gap-lg-5 mb-2 mb-md-0 ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Pedidos</a>
                        </li>
                        <li class="nav-item d-none d-md-list-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <div class="d-none d-md-flex gap-4 bg-danger px-3 rounded-3" id="loginContainer">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="./api/login.php">Logar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="./api/singin.php">Cadastrar-se</a>
                            </li>
                        </div>
                        <li class="nav-item d-md-none" id="profileContainer">
                            <a class="nav-link" href="#">Perfil</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End navbar offcanvas -->
        </div>
    </nav>
</header>


<main class="container">
    <!-- pc wellcome text -->
    <div class="d-none d-md-block bg-body-tertiary px-5 pt-5 pb-4 rounded-bottom-4 text-center">
        <h1 class="text-uppercase fw-bold"><span class="bg-light-danger rounded-4 p-3 d-inline-block">Seja</span>
            bem-vindo</h1>
        <p class="fs-4 mt-4">O que você gostaria de comer hoje?!</p>
    </div>

    <div class="mt-5" id="foods">
        <section id="humburgers">
            <h2 class="fs-4">Experimente nossos humburgers</h2>
            <div class="d-flex gap-3">

                <!-- template example -->
                <div class="d-flex gap-3">
                    <div class="card">
                        <img class="rounded-5 card-img" src="./assets/img/imagem_teste.jpeg" alt="humburger">
                        <div class="d-flex justify-content-between card-img-overlay text-white h-25">
                            <div class="card-text p-2 bg-black bg-opacity-50">4.7</div>
                            <buttom class="btn btn-dark card-text bg-black bg-opacity-50">ADD
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pizzas">
            <h2 class="fs-4">Que tal uma pizza ai?</h2>
        </section>

        <section id="pasteis">
            <h2 class="fs-4">Pastéis incríveis para você</h2>
        </section>

        <section id="bebidas">
            <h2 class="fs-4">E algo pra beber, aceita?</h2>
        </section>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>