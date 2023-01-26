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
                        <li><a href="{{ url('profile') }}">Profil</a></li>
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">      
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Edit Profil</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('profile') }}" class="btn-secondary btn-sm">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="row">
                        {{-- <div class="col-md-8 offset-md-2"> --}}
                        <div class="col">

                            <form action="{{ url('profile/'.$datax->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label>Profil</label>
                                    <textarea name="profil" id="ckeditor1" class="form-control" rows="5" required>{{ old('name', $datax->profil) }}</textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label>Visi</label>
                                    <textarea name="visi" id="ckeditor2" class="form-control" rows="5" required>{{ old('name', $datax->visi) }}</textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label>Misi</label>
                                    <textarea name="misi" id="ckeditor3" class="form-control" rows="5" required>{{ old('name', $datax->misi) }}</textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label>Tujuan Strategis</label>
                                    <textarea name="tujuan" id="ckeditor4" class="form-control" rows="5" required>{{ old('name', $datax->tujuan) }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>

                        </div> 
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace('ckeditor1');
        CKEDITOR.replace('ckeditor2');
        CKEDITOR.replace('ckeditor3');
        CKEDITOR.replace('ckeditor4');
    </script>
@endsection