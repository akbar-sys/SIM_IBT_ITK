<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  {{-- <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/IBTLOGO.png"> --}}
  <link rel="icon" type="image/png" href="./assets/img/ibt_logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>@yield('title') - SIM Inkubator Bisnis ITK</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/now-ui-kit.css?v=1.3.0') }}">
  <link rel="stylesheet" href="{{ asset('assets/demo/demo.css') }}">
</head>

<body class="index-page sidebar-collapse">

<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/now-ui-kit.js?v=1.3.0') }}"></script>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="50">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand">
          <img src="{{ asset('/assets/img/logo_ibt4.png') }}" height="55px">
          {{-- Inkubator Bisnis dan Teknologi ITK --}}
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/" class="nav-link">
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <p>Profil</p>
            </a>
            <div class="dropdown-menu" >
              <a class="dropdown-item" href="/#visii">Visi</a>
              <a class="dropdown-item" href="/#misii">Misi</a>
              <a class="dropdown-item" href="/#tujuann">Tujuan Strategis</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="/organisasi" class="nav-link">
              <p>Organisasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/program" class="nav-link">
              <p>Program Inkubasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/registrasi" class="nav-link">
              <p>Pendaftaran Tenant</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/berita" class="nav-link">
              <p>Berita</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/kontak" class="nav-link">
              <p>Contact Us</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <a href="/login">
      <button type="button" class="btn btn-success">
        Login
      </button>
    </a>
  </nav>
  <!-- End Navbar -->

    @yield('content')
    {{-- end content --}}

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

{{-- footer --}}
  {{-- <div class="wrapper"> --}}
    <footer class="footer" data-background-color="black">
      <div class=" container ">
        <div class="text-center">
          <img src="{{ asset('assets/img/logo_itk.png') }}">
        </div>
        <div class="text-center mb-4">
          <img class="mt-2" src="{{ asset('assets/img/logo_smart.png') }}" height="70px">
          <img class="mt-2 ml-4" src="{{ asset('assets/img/logo_bene.png') }}" height="70px">
        </div>
        <hr>
        <nav>
          <a class="mr-2" href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=ibt@itk.ac.id">
            <i class="fab now-ui-icons ui-1_email-85"></i>
            ibt.itk.ac.id
          </a>
          <a class="mr-2" href="https://www.instagram.com/ibt_itk/?igshid=YmMyMTA2M2Y%3D">
            <i class="fab fa-instagram"></i>
            ibt_itk
          </a>
          <a href="https://www.youtube.com/channel/UC5qqrcpTurNSH8tzkKg6w2Q">
            <i class="fab fa-youtube"></i>
            IBT ITK
          </a>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Inkubator Bisnis Teknologi - Institut Teknologi Kalimantan
        </div>
      </div>
    </footer>
  </div>
</body>

</html>