<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pendaftaran Tenant - SIM Inkubator Bisnis ITK</title>
    <link href="{{ asset('assets/form_tenant/css/main.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/now-ui-kit.css?v=1.3.0') }}">

</head>

<body>

<!-- Navbar -->
<script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/now-ui-kit.js?v=1.3.0') }}"></script>

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
          <a href="organisasi" class="nav-link">
            <p>Organisasi</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="program" class="nav-link">
            <p>Program Inkubasi</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="registrasi" class="nav-link">
            <p>Pendaftaran Tenant</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="berita" class="nav-link">
            <p>Berita</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="kontak" class="nav-link">
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

  <!-- Formulir -->
<div class="page-wrapper bg-dark p-t-100 p-b-50">
    <div class="wrapper wrapper--w900">

      {{-- alert --}}
      @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif

        <div class="card">
            <div class="card-body">
                <form action="{{ url('registrasi') }}" method="post" enctype="multipart/form-data">
                  @csrf

                    <div class="form-row">
                        <div class="name">Nama Pemilik Usaha</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="nama" placeholder="nama lengkap">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Email</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-6" type="text" name="email" placeholder="email@gmail.com">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Nomor Telepon</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-6" type="text" name="no_telp" placeholder="nomor telepon">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Jenis Tenant</div>
                        <div class="value">
                            <select name="jenis_tenant" class="input--style-6">
                                <option value="In Wall">In wall</option>
                                <option value="Out Wall">Out wall</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Jenis Bidang Usaha</div>
                        <div class="value">
                            <select name="jenis_bidang" class="input--style-6">
                                <option value="Pertanian atau perkebunan atau perikanan">Pertanian atau perkebunan atau perikanan</option>
                                <option value="Pangan dan Hasil olahan">Pangan dan Hasil olahan</option>
                                <option value="Manufaktur">Manufaktur</option>
                                <option value="Digital">Digital</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                  
                    <div class="form-row">
                        <div class="name">Nama Usaha</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-6" type="text" name="nama_usaha" placeholder="nama usaha">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Deskripsi</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="textarea--style-6" name="deskripsi" placeholder="deskripsi"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Upload KTP</div>
                        <div class="value">
                            <div class="input-group js-input-file">
                                <input class="form-control" type="file" name="file_ktp" id="file">
                                {{-- <label class="label--file" for="file">Choose file</label> --}}
                                {{-- <span class="input-file__info">No file chosen</span> --}}
                            </div>
                            <div class="label--desc">Max file size 2 MB</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Upload CV</div>
                        <div class="value">
                            <div class="input-group js-input-file">
                                <input class="form-control" type="file" name="file_cv" id="file">
                                {{-- <label class="label--file" for="file">Choose file</label> --}}
                                {{-- <span class="input-file__info">No file chosen</span> --}}
                            </div>
                            <div class="label--desc">Max file size 2 MB</div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Upload Proposal Bisnis</div>
                        <div class="value">
                            <div class="input-group js-input-file">
                                <input class="form-control" type="file" name="file_proposal" id="file">
                                {{-- <label class="label--file" for="file">Choose file</label> --}}
                                {{-- <span class="input-file__info">No file chosen</span> --}}
                            </div>
                            <div class="label--desc">Max file size 2 MB</div>
                        </div>
                    </div>

                    {{-- <div class="form-row">
                        <div class="name">Upload KTP</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="textarea--style-6" name="file_ktp" placeholder="testing"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Upload CV</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="textarea--style-6" name="file_cv" placeholder="testing"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Upload Proposal Bisnis</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="textarea--style-6" name="file_proposal" placeholder="testing"></textarea>
                            </div>
                        </div>
                    </div> --}}

                    <div class="card-footer ml-4">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Formulir -->

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
          </script>, Inkubator Bisnis dan Teknologi - Institut Teknologi Kalimantan
        </div>
      </div>
    </footer>

</body>
</html>