<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="background">
            <nav class="navbar navbar-expand-lg navbar-dark">
              <div class="container">
                <a class="navbar-brand" href="#">
                  <!--<nav class="navbar bg-body-tertiary">-->
                      <!--<div class="container-fluid">-->
                        <!--<a class="navbar-brand" href="#">-->
                          <img src="./images/logo_theEnemy.png" alt="Logo" width="30" height="24" class="logo"> The Enemy
                        <!--</a>-->
                      <!--</div>-->
                  <!--</nav>-->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Lançamentos</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Filmes.php">Filmes</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Login</a>
                    </li>
                  </ul>
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                  </form>
                </div>
              </div>
            </nav>

            <img src="./images/nova_imagem.jpg" class="mx-auto c-img2 d-block m-5" alt="nova imagem">

            <div class="container">
              <h3 class="text-center mt-5">Título do cardMaior1 notícia 1...</h3>
              <hr>
              <p class="text-start fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aperiam eum soluta laudantium?
                 Cumque explicabo odit reprehenderit quos mollitia iure ratione praesentium ab debitis earum, soluta voluptatum blanditiis amet incidunt?</p>
            </div>

            <img src="./images/nova_imagem.jpg" class="mx-auto c-img2 d-block m-5" alt="nova imagem">

            <div class="container">
              <p class="text-start fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aperiam eum soluta laudantium?
                  Cumque explicabo odit reprehenderit quos mollitia iure ratione praesentium ab debitis earum, soluta voluptatum blanditiis amet incidunt?</p>
            </div>
              <br>
              <br>
              <br>
    </div>          
              <footer class="bg-dark py-5 ">
                <div class="container text-light text-center">
                  <p class="display-5 mb-3">Rodapé</p>
                  <small class="text-white-50">&copy; Copyright by Emanuel. All rights reserved. </small>
                </div>
              </footer>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>