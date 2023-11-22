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
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="container">
                <a class="navbar-brand" href="index.html">
                  <!--<nav class="navbar bg-body-tertiary">-->
                      <!--<div class="container-fluid">-->
                        <!--<a class="navbar-brand" href="#">-->
                          <img src="./images/logo-cg.jpg" alt="Logo" width="30" height="24" class="logo"> Cine Games
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
                      <a class="nav-link" href="Trailers.php">Lançamentos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="Filmes.php">Filmes</a>
                  </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Acesso
                        </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php">Admin</a></li>
                      </ul>
                    </li>
                  </ul>
                  
                </div>
              </div>
            </nav>

            <img src="./images/wonka_4x3.png" class="mx-auto c-img2 d-block m-5" alt="nova imagem">

            <div class="container">
              <h3 class="text-center mt-5">Prelúdio de 'A Fantástica Fábrica de Chocolate', ganha novo trailer; Veja</h3>
              <hr>
              <p class="text-start fs-5">A Warner Bros. divulgou na última quinta-feira (12) o segundo trailer de 'Wonka', filme prelúdio de 'A Fantástica Fábrica de Chocolate', 
                baseado no livro infantil de Roald Dahl.
                Nas imagens, o jovem Willy Wonka (Timothée Chalamet) é um inventor determinado a revolucionar a humanidade "um bombom por vez", 
                mas que precisa desafiar o Cartel do Chocolate para vender seus chocolates inusitados.
              </p>
            </div>

            <div class="container">
              <div class="card mb-3 mx-auto" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="./images/wonka-poster.jpg" class="img-fluid card-img d-block " alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title mb-5 mx-auto">Confira o Trailer:</h5>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <a href="https://www.youtube.com/watch?v=wYmtRhKvmVE&pp=ygUSd29ua2EgdHJhaWxlciAyMDIz" target="_blank" class="btn btn-primary pb-1">Assistir</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="container">
              <p class="text-start fs-5">
              Com muitas sequências musicais, o filme é dirigido por Paul King ('As Aventuras de Paddington') e, além de Chalamet no papel principal e Hugh Grant 
              como um Oompa-Loompa, o elenco conta com Olivia Colman, Rowan Atkinson, Keegan-Michael Key e Sally Hawkins. A estreia está marcada para 14 de dezembro no Brasil.
              </p>
            </div>
              <br>
              <br>
              <br>
    </div>          
              <footer class="bg-dark py-5 ">
                <div class="container text-light text-center">
                  <p class="display-5 mb-3"></p>
                  <small class="text-white-50">&copy; Copyright by Emanuel. All rights reserved. </small>
                </div>
              </footer>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>