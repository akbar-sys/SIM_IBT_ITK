@extends('main2') 

@section('title', 'Organisasi')

@section('content')

<div class="wrapper">

  <div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true">
      <img class="float-bottom" src="{{ asset('assets/img/itk_gs03.jpeg') }}" width="100%">
    </div>
    <div class="content-center">
      <div class="container">
        <h1 class="title">{{ $data->title }}</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          {{-- <p>{{ $data->gambar }}</p> --}}
          <img class="image-main" src="{{ asset('gambar_organisasi/'.$data->gambar) }}" width="90%">
          <h5 class="description">{!! $data->deskripsi !!}</h5>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection