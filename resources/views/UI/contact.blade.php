@extends('main2') 

@section('title', 'Hubungi Kami')

@section('content')
<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
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
          <h5 class="description">{!! $data->content !!}</h5>
          <div class="text-center">
            <a target="_blank" href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=ibt@itk.ac.id" class="btn btn-neutral btn-icon btn-color btn-lg btn-round" rel="tooltip" title="Contact us">
              <i class="fab now-ui-icons ui-1_email-85"></i>
            </a>
            <a target="_blank" href="https://www.instagram.com/ibt_itk/?igshid=YmMyMTA2M2Y%3D" class="btn btn-neutral btn-icon btn-color btn-lg btn-round" rel="tooltip" title="Follow us">
              <i class="fab fa-instagram"></i>
            </a>
            <a target="_blank" href="https://www.youtube.com/channel/UC5qqrcpTurNSH8tzkKg6w2Q" class="btn btn-neutral btn-icon btn-color btn-lg btn-round" rel="tooltip" title="Subscribe us">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection