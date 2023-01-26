@extends('main') 

@section('title', 'Ajuan Pendaftaran Tenant')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard IBT ITK</h1>
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

            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Hapus data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="category_delete_id" id="category_id">
                      <h5>Yakin ingin menghapus data?</h5>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Data Ajuan Pendaftaran Tenant</strong>
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
                                        <button type="button" class="btn btn-danger deleteCategoryBtn" value="{{ $item->id }}">
                                            {{-- <i class="fa fa-trash"></i> --}}
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                 </div>
            </div>


        </div>

    </div>

    <script>
        $(document).ready(function () {
            $('.deleteCategoryBtn').click(function (e) {
                e.preventDefault();

                var category_id = $(this).val();
                $('#category_id').val(category_id);

                $('#deleteModal').modal('show');
            });
        });
    </script>
    
@endsection
