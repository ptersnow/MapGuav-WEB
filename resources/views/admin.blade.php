<!DOCTYPE html>
  <html lang="pt-br">

    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>MapGuav</title>

      <!-- Bootstrap Core CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

      <!-- Custom Fonts -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
      <link rel="icon" href="img/icon.ico" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">

      <!-- Custom CSS -->
      <link href="{{ url('/css/stylish-portfolio.min.css') }}" rel="stylesheet">
      <link href="{{ url('/css/estilo.css') }}" rel="stylesheet">

    </head>
    <body id="home">

      <div class="barra-titulo">
        <!-- Navigation -->
        <a class="menu-toggle rounded" href="#">
          <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar-wrapper" class="menu">
          <ul class="sidebar-nav">
            <li class="sidebar-brand">
              <a class="js-scroll-trigger" href="/#home">MAP Guav</a>
            </li>
            <li class="sidebar-nav-item">
              <a class="js-scroll-trigger" href="/#home">Página inicial</a>
            </li>
            <li class="sidebar-nav-item">
              <a class="js-scroll-trigger" href="admin/cadastrar">Cadastrar</a>
            </li>
            <li class="sidebar-nav-item">
              <a class="js-scroll-trigger" href="admin/listar">Listar</a>
            </li>
            
          </ul>
        </nav>
      </div>

    <header class="masthead d-flex">
        <div class="container my-auto">
            <div class="w-50 m-auto">
                <div class="text-center">
                    <h1 class="mb-1 title">MAP Guav</h1>
                    <h3 class="mb-5 title">
                      <em>
                      Inovação tecnológica no mapeamento de Guavirais visando sua preservação.
                      </em>
                    </h3>
                </div>
                
                <div class="jumbotron login">
                    <h2 class="text-center title">Login</h2>
                    <form action="/api/login" method="POST">
                        <table class="table">
                            <tr>
                                <td>E-mail</td>
                                <td>
                                <input class="form-control" type="text" name="email">
                                </td>
                            </tr>
                            <tr>
                                <td>Senha</td>
                                <td>
                                <input class="form-control" type="password" name="password">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                <button type="submit" class="btn btn-primary">Login</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </header>

     <!-- Scroll to Top Button-->
     <a class="scroll-to-top rounded js-scroll-trigger" href="#home">
        <i class="fas fa-angle-up"></i>
      </a>

      <!-- Bootstrap core JavaScript -->
      <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      <!-- Plugin JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

      <!-- Custom scripts for this template -->
      <script src="{{ url('/js/stylish-portfolio.min.js') }}"></script>

    </body>
    