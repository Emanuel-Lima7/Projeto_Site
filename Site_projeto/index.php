<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="background">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="container">
                <a class="navbar-brand" href="#">
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
                      <a class="nav-link" href="?page=novo">Novo Usuário</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="?page=listar">Lista de Usuários</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

        <div class="container">
          <div class="row">
            <div class="col mt-5">
              <?php 
                include("config.php");
                switch(@$_REQUEST["page"]){
                  case "novo":
                    include("novo-usuario.php");
                  break;
                  case "listar":
                    include("lista-usuarios.php");
                  break;
                  case "salvar":
                    include("salvar-usuario.php");
                  break;
                  case "editar":
                    include("editar-usuario.php");
                  break;
                  default:
                    print "<h1>Área do admin...</h1>";
                }

              ?>
            </div>
          </div>
        </div>

              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
             
    </div>          
              
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>