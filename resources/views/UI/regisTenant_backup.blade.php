@extends('main2') 

@section('title', 'Pendaftaran Tenant')

@section('content')

<div class="wrapper">

  <div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true">
      <img src="{{ asset('assets/img/itk_gs2.jpg') }}">
    </div>
    <div class="content-center">
      <div class="container">
        <h1 class="title">Page Pendaftaran Tenant.</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">

          <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
              <div class="wrapper wrapper--w680">
                  <div class="card card-4">
                      <div class="card-body">
                          <h2 class="title">Form Pendaftaran Tenant</h2>
                          <form method="POST">
                              <div class="row row-space">
                                  <div class="col-2">
                                      <div class="input-group">
                                        <label class="label">Email</label>
                                        <input type="email" name="email">
                                      </div>
                                  </div>
                                  {{-- <div class="col-2">
                                      <div class="input-group">
                                          <label class="label">Phone Number</label>
                                          <input class="input--style-4" type="text" name="phone">
                                      </div>
                                  </div> --}}
                              </div>
                              <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                      <label class="label">Email</label>
                                      <input type="text" name=".." placeholder="masukkan email" required>
                                    </div>
                                </div>
                              </div>
                              <div class="input-group">
                                  <label class="label">Subject</label>
                                  <div class="rs-select2 js-select-simple select--no-search">
                                      <select name="subject">
                                          <option disabled="disabled" selected="selected">Choose option</option>
                                          <option>Subject 1</option>
                                          <option>Subject 2</option>
                                          <option>Subject 3</option>
                                      </select>
                                      <div class="select-dropdown"></div>
                                  </div>
                              </div>
                              <div class="p-t-15">
                                  <button class="btn btn--radius-2 btn-primary" type="submit">Submit</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>


        </div>
      </div>
    </div>
  </div>

</div>

@endsection