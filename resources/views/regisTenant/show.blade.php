@extends('main') 

@section('title', 'Ajuan Pendaftaran Tenant')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Ajuan Pendaftaran Tenant</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{ url('regisTenant') }}">Ajuan Pendaftaran tenant</a></li>
                        <li class="active">Detail</li>
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
                        <strong>Detail Pendaftaran Tenant</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('regisTenant') }}" class="btn btn-secondary btn-sm">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    
                    <div class="row">
                        <div class="col-md-8 offset-md-2">

                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th style="width:30%">Nama Pemilik Usaha</th>
                                        <td>{{$regisTenant->nama_pemilik_usaha}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$regisTenant->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>No.Telp</th>
                                        <td>{{$regisTenant->no_telp}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Tenant</th>
                                        <td>{{$regisTenant->jenis_tenant}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Bidang Usaha</th>
                                        <td>{{$regisTenant->jenis_bidang_usaha}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Usaha</th>
                                        <td>{{$regisTenant->nama_usaha}}</td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td>{{$regisTenant->deskripsi}}</td>
                                    </tr>
                                    <tr>
                                        <th>KTP</th>
                                        <td>
                                            {{$regisTenant->ktp}}
                                            <div>
                                                <a href="{{ asset('pendaftaran_tenant/'.$regisTenant->ktp) }}" target="_blank" class="btn-info btn-sm">
                                                    <i class="fa fa-download"></i>Unduh
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>CV</th>
                                        <td>
                                            {{$regisTenant->cv}}
                                            <div>
                                                <a href="{{ asset('pendaftaran_tenant/'.$regisTenant->cv) }}" target="_blank" class="btn-info btn-sm">
                                                    <i class="fa fa-download"></i>Unduh
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Proposal Bisnis</th>
                                        <td>
                                            {{$regisTenant->proposal_bisnis}}
                                            <div>
                                                <a href="{{ asset('pendaftaran_tenant/'.$regisTenant->proposal_bisnis) }}" target="_blank" class="btn-info btn-sm">
                                                    <i class="fa fa-download"></i>Unduh
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Waktu Submit</th>
                                        <td>{{$regisTenant->created_at}}</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>
@endsection