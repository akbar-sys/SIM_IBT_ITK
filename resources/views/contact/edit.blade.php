@extends('main') 

@section('title', 'Contact Us')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Contact Us</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{ url('contact') }}">Contact Us</a></li>
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
                        <strong>Edit Contact Us</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('contact') }}" class="btn-secondary btn-sm">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col">

                            <form action="{{ url('contact/'.$datax->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="form-group col">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" value="{{ old('name', $datax->title) }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="content" id="ckeditor" class="form-control" rows="5" required>{{ old('name', $datax->content) }}</textarea>
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