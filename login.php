<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="sortcut icon" href="./img/logo/eu001.png" type="image/x-icon"/>

    <!-- CSS -->
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/login.css">

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"/>
    <!-- MDB -->
    <!-- <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
      rel="stylesheet"/> -->

    <title>Teorias Nerd</title>

</head>
<body>

    <div class="container my-5">

        <!-- Section: Components -->
        <section class="">
          <section id="demo" class="">
          <header>

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="clarindiario.php">Clarín Diario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ordemcron.php">Ordem Cronológica</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Jogos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="teoria.php">Teorias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="navegacao.html">Navegação</a>
              </li>

              <li class="nav-item" style="margin-left: 500px;">
                <a class="nav-link" href="login.php">Login - Cadastre-se</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->

  <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('./img/logo/login.jpg');
      height: 400px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">TEORIAS NERD</h1>
          <h4 class="mb-3">Login</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>

 <!-- fim de Navbar -->
      
            <hr class="my-5" />

            <section class="h-100 gradient-form">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6"   style="background-color: rgba(0, 0, 255, 0.333);">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="img/logo/eu001.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Nós somos a equipe Teorias Nerd</h4>
                </div>

                <form>
                  <p>Por favor, faça login na sua conta</p>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder="Phone number or email address" />
                    <label class="form-label" for="form2Example11">Nome do Usuário</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" />
                    <label class="form-label" for="form2Example22">Senha</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Login</button>
                    <a class="text-muted" href="#!">Esqueceu a senha?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Não tem uma conta?</p>
                    <button type="button" class="btn btn-outline-danger" style="color: #3697d8; border-color:#3697d8;">Crie um Novo</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<br><br><br><br><br><hr class="my-5" />

 <!-- rodape -->

 <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
     © <?= date('Y'); ?>
    <a class="text-white" href="#">Deyvson Carlos</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- fim de rodape -->


          </section>
        </section>
    </div>
</body>
</html>