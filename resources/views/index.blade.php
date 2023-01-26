@extends('main2') 

@section('title', 'Home')

@section('content')

<div class="wrapper">

  <div class="page-header page-header">
    <div class="page-header-image" data-parallax="true">
      <img src="{{ asset('assets/img/itk_cover.jpg') }}" width="100%">
    </div>
    <div class="container mt-4">
      <div class="content-center brand">
        {{-- <img src="{{ asset('assets/img/ibt_logo.png') }}" width="30%"> --}}
        <h1>Selamat Datang</h1>
        <h3>Website Inkubator Bisnis Teknologi ITK</h3>
        <h6 class="category">Designed by IBT ITK.</h6>
      </div>
    </div>
  </div>
  {{-- end cover --}}

  {{-- content --}}
  <div class="container">

    <div class="section section-nucleo-icons">

      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Profil</h2>
          <h5 class="description">{!! $data->profil !!}</h5>
        </div>
      </div>

      <div class="section section-index">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-12">
              <h2 class="title" id="visii">Visi</h2>
              <h5 class="description">
                {!! $data->visi !!}
              </h5>
            </div>
            <div class="col-lg-5 col-md-12">
              <div class="icons-container" style="display: block;margin-left: auto;margin-right: auto;">
                <img src="{{ asset('assets/img/visi.png') }}" width="100%">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section section-index">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-12">
              <div class="icons-container" style="display: block;margin-left: auto;margin-right: auto;">
                <img src="{{ asset('assets/img/misi.png') }}" width="100%">
              </div>
            </div>
            <div class="col-lg-7 col-md-12">
              <h2 class="title" id="misii">Misi</h2>
              <h5 class="description">
                {!! $data->misi !!}
              </h5>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-12 col-lg-8">
            <h2 class="title text-center" id="tujuann">Tujuan Strategis</h2>
            <h5 class="description">{!! $data->tujuan !!}</h5>
          </div>
        </div>
      </div>

    </div>
    
  </div>

</div>

@endsection