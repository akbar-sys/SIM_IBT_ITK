@extends('main') 

@section('title', 'Profil')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Profil</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Profil</a></li>
                        <li class="active">Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">

        <div class="animated fadeIn">
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info rounded">
                    <div class="card-header bg-white">
                        <h4 class="car-title float-left">Profil</h4>
                        <div class="card-tools float-right">
                            <a href="{{ url('profile/'.$data->id.'/edit') }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="form-group col">
                            <p>{!!$data->profil!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info rounded">
                    <div class="card-header bg-white">
                        <h4 class="car-title float-left">Visi</h4>
                        <div class="card-tools float-right">
                            <a href="{{ url('profile/'.$data->id.'/edit') }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="form-group col">
                            <p>{!!$data->visi!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info rounded">
                    <div class="card-header bg-white">
                        <h4 class="car-title float-left">Misi</h4>
                        <div class="card-tools float-right">
                            <a href="{{ url('profile/'.$data->id.'/edit') }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="form-group col">
                            <p>{!!$data->misi!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info rounded">
                    <div class="card-header bg-white">
                        <h4 class="car-title float-left">Tujuan Strategis</h4>
                        <div class="card-tools float-right">
                            <a href="{{ url('profile/'.$data->id.'/edit') }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="form-group col">
                            <p>{!!$data->tujuan!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection