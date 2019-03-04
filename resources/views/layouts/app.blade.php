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
              <a href="{{route('home')}}">Home</a>
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

    <footer>
  <div class="container">
    <div class="row">
      <div class="col-3">
        <img src="{{ asset('img/logo.png')}}" alt="">
      </div>
      <div class="col-3">
        <ul>
          <li>
            <a href="#">
              <div class="mail">
                <span>
                  ciao@boolean.careers
                </span>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="phone">
                <span>02-40031288</span>
              </div>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="cell">
                <span>
                  +39 327-9578239
                </span>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-3">
        <ul>
          <li>
            <a href="">Privacy Policy</a>
          </li>
          <li>
            <a href="">Lavora con noi</a>
          </li>
        </ul>
      </div>
      <div class="col-3">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-linkedin"></i>
        <i class="fab fa-whatsapp"></i>
      </div>
    </div>
  </div>
</footer>
<div class="footer-bottom">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <span>Boolean** (my_new_job > my_old_job) // returns true</span>
      </div>
      <div class="col-6">
        <span>Boolean SRLS - Piazzale Giovanni dalle Bande Nere, 9 - 20146, Milano - P.IVA: 10214930967</span>

      </div>
    </div>
  </div>

</div>
  </body>
</html>
