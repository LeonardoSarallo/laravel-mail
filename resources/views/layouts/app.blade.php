<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel mail</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <header>
  <div class="container">
    <div class="header-left">
      <img src="{{ asset('img/logo.png')}}" alt="">
    </div>
    <div class="header-right">
      <ul>
        <li>
          <a href="">Home</a>
          <div class="border">

          </div>
        </li>
        <li>
          <a href="#">Corso</a>
        </li>
        <li>
          <a href="#">Metodo</a>
        </li>

        <li>
          <a href="">Studenti</a>
        </li>
        <li>
          <a class="button" href="{{ route('admission.index')}}">Iscriviti</a>
        </li>
      </ul>
    </div>
  </div>

</header>











    {{-- <div class="container">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('admission.index')}}">Iscriviti</a>
            </li>

          </ul>

        </div>
      </nav>
    </div> --}}
    @yield('content')

  </body>
</html>
