<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Cryptosearch</title>
        <!-- Inclusión de la librería Bootstrap CSS -->
        <link rel="shortcut icon" type="image/jpg" href="../../images/favicon.ico"/>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      </head>
    <body>
        <header class="bg-light py-3 border border-secondary">
          <div class="container">
            <a href="{{ route('home') }}"><img src="../../images/logo.png" alt="" style="height: 70px;"></a>
            <nav>
              <ul class="nav">
                <li class="nav-item"><a class="nav-link text-dark" href="{{ route('home') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="{{ route('aboutme') }}">Sobre nosotros</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="{{ route('contact') }}">Contacto</a></li>
              </ul>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item dropend">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Selecciona la vista detallada de una criptomoneda
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('bitcoin') }}">Bitcoin</a></li>
                        <li><a class="dropdown-item" href="{{ route('ethereum') }}">Ethereum</a></li>
                        <li><a class="dropdown-item" href="{{ route('litecoin') }}">Litecoin</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </header>
    @yield('content')
        <footer class="bg-secondary py-3">
            <div class="container">
            <p class="text-white">Todos los derechos reservados &copy; 2023 - Cryptosearch</p>
            </div>
        </footer>
    </body>
</html>