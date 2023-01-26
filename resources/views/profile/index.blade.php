@extends('main') 

@section('title', 'Profil')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h4 style="margin-top: 10px">Dashboard IBT ITK</h4>
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

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong class="title-cap">Data Profil</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('profile/'.$data->id.'/edit') }}" class="btn-primary btn-sm">
                        <i class="fa fa-pencil"></i>Edit
                    </a>
                </div>
            </div>
            <div class="card card-body">
                <div class="form-row">
                    <div class="form-group col">
                        <strong class="title">Profile</strong>
                        <p>{!!$data->profil!!}</p>
                    </div>
                </div>
                <hr/>
        
                <div class="form-row">
                    <div class="form-group col">
                        <strong class="title">Visi</strong>
                        <p>{!!$data->visi!!}</p>
                    </div>
                </div>
                <hr/>

                <div class="form-row">
                    <div class="form-group col">
                        <strong class="title">Misi</strong>
                        <p>{!!$data->misi!!}</p>
                    </div>
                </div>
                <hr/>

                <div class="form-row">
                    <div class="form-group col">
                        <strong class="title">Tujuan Strategis</strong>
                        <p>{!!$data->tujuan!!}</p>
                    </div>
                </div>
                                
            </div>
        </div>

    </div>
@endsection