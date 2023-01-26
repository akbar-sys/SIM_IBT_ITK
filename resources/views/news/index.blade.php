@extends('main') 

@section('title', 'Berita')

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
                        <li><a href="#">Berita</a></li>
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
            
            {{-- alert --}}
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong class="title-cap">Data Berita</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('news/create') }}" class="btn-success btn-sm">
                            <i class="fa fa-plus"></i>Add
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th class="col-1">No.</th>
                            <th class="col-2">Title</th>
                            <th class="col-4">Content</th>
                            <th class="col-2">Image</th>
                            <th class="col-1"></th>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td><p>{{$loop->iteration}}</p></td>
                                    <td><p>{{$item->title}}</p></td>
                                    <td><p class="news_content">{{strip_tags($item->content)}}</p></td>
                                    <td><p>{{$item->image}}</p></td>
                                    <td class="text-center">
                                        <a href="{{ url('news/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button onclick="hapus('{{ url('news/'.$item->id) }}')" class="btn btn-danger btn-sm btn-delete" id="btn-delete" data-link="{{ url('news/'.$item->id) }}" data-toggle="modal" data-target="#verifikasi">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="verifikasi">
        <div class="modal-dialog">
            <form id="form_delete" method="post" class="d-inline">
                @method('delete')
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalSayaLabel">Hapus data</h5>
                    </div>
                    <div class="modal-body">
                        Yakin ingin menghapus data?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function hapus(link) {
            document.getElementById("form_delete").setAttribute("action", link); 
        }
    </script>

@endsection