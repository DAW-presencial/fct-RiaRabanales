<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FCT Main</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Estilos -->
    <style>
      html, body {
        min-height: 100%;
        height: 100%;
      }
      .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
      }

      main {
        margin-top: 5%;
        margin-bottom: 3%;
      }
    </style>
  </head>

  <body class="d-flex flex-column h-100">
    <div class="container p-3">

      <!-- Cabecera -->
      @section('header')
      <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">FCT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/empresa">Datos de empresa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      @show

      <!-- Pie de página -->
      <main class="container">
          @yield('contenido')
      </main>

      <!-- Pie de página -->
      @section('footer')
      <footer class="footer m-0 py-1 pl-5 bg-light row">
        <div class="col-10 pl-3 pt-2">
          <p class="text-muted"> - - DWES</p>
        </div>
        <div class="col-2 pt-2">
          <p class="text-muted">M. Rabanales ©2021</p>
        </div>
      </footer>
      @endsection
      @yield('footer')
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>