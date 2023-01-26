@extends('main2') 

@section('title', 'Berita')

@section('content')

<div class="wrapper">

  <div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true">
      <img class="float-bottom" src="{{ asset('assets/img/itk_gs03.jpeg') }}" width="100%">
    </div>
    <div class="content-center">
      <div class="container">
        <h1 class="title">Berita</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-about-us">
    <div class="container">
      <div class="content">
        <div class="row">
          @foreach ($data as $item)
          <div class="col-xs-12 col-sm-4">
            <div class="card-style">
              <img class="news-image" src="{{ asset('gambar_berita/'.$item->image) }}" />
              <div class="card-content">
                <p class="card-title2">
                    {{$item->title}}
                </p>
                <p class="card-title">
                  {{strip_tags($item->content)}}
                </p>
              </div>
              <div class="card-read-more">
                <a href="{{ url('berita/'.$item->id) }}" class="btn btn-link btn-block m-0">
                  <b>Read More</b>
                </a>
                {{-- <a href="" class="btn btn-link btn-block m-0">
                  <b>Read More</b>
                </a> --}}
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="d-flex justify-content-center">
        {{ $data->links() }}
      </div>
    </div>
  </div>

@endsection