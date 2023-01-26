@extends('main') 

@section('title', 'Program Inkubasi')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Program Inkubasi</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{ url('programs') }}">Program Inkubasi</a></li>
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
                        <strong>Edit Program Inkubasi</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('programs') }}" class="btn-secondary btn-sm">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col">

                            <form action="{{ url('programs/'.$datax->id) }}" method="post" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="form-group col">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" value="{{ old('name', $datax->title) }}" required>
                                    </div>
                                    {{-- <div class="form-group col">
                                        <label>Gambar</label>
                                        <input type="text" name="gambar" class="form-control" value="{{ old('name', $datax->gambar) }}" required>
                                    </div> --}}
                                    <div class="form-group col">
                                        <label>Gambar</label>
                                        <div class="value">
                                            <div class="input-group js-input-file">
                                                <input class="form-control" type="file" name="gambar">
                                            </div>
                                            <div class="label--desc">Max file size 2 MB</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" id="ckeditor" class="form-control" rows="5" required>{{ old('name', $datax->deskripsi) }}</textarea>
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
        CKEDITOR.replace('ckeditor');
    </script>
@endsection