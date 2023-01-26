@extends('main') 

@section('title', 'Ajuan Pendaftaran Tenant')

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
                        <li><a href="#">Ajuan Pendaftaran tenant</a></li>
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

            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong class="title-cap">Data Ajuan Pendaftaran Tenant</strong>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th class="col-1">No.</th>
                            <th class="col-2">Nama</th>
                            <th class="col-2">Nama Usaha</th>
                            <th class="col-2">Tanggal Pengajuan</th>
                            <th class="col-1"></th>
                        </thead>
                        <tbody>
                            @foreach ($regis as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->nama_pemilik_usaha}}</td>
                                    <td>{{$item->nama_usaha}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td class="text-center">
                                        <a href="{{ url('regisTenant/'.$item->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <button onclick="hapus('{{ url('regisTenant/'.$item->id) }}')" class="btn btn-danger btn-sm btn-delete" id="btn-delete" data-link="{{ url('regisTenant/'.$item->id) }}" data-toggle="modal" data-target="#verifikasi">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $regis->links() }}
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