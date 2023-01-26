@extends('main') 

@section('title', 'Berita')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Berita Inkubator Bisnis ITK</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Berita</a></li>
                        <li class="active">Add</li>
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
                        <strong>Tambah Berita</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('news') }}" class="btn-secondary btn-sm">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col">
                            <form action="{{ url('news') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>
                                    {{-- <div class="form-group col">
                                        <label>Gambar</label>
                                        <input type="text" name="image" class="form-control" required>
                                    </div> --}}
                                    <div class="form-group col">
                                        <label>Gambar</label>
                                        <div class="value">
                                            <div class="input-group js-input-file">
                                                <input class="form-control" type="file" name="image">
                                            </div>
                                            <div class="label--desc">Max file size 2 MB</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="content" id="ckeditor" class="form-control" rows="5" required></textarea>
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