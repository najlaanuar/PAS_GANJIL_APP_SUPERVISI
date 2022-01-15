@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-md-12 mt-3">
            <div class="container-fluid">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <h6 class="m-0 font-weight-bold text-primary">Data Guru Supervisor Dan Kurikulum</h6>
                    <div class="card-header py-3">
                        <a class="btn btn-success" href="{{route('gurucreate')}}"> Tambah Data Guru</a>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                        <div class="pull-right">
            </div></br>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr class="text-center">
                                        <th>NIP</th>
                                        <th>NAMA</th>
                                        <th>EMAIL</th>
                                        <th>JABATAN</th>
                                        <th>SUPERVISOR</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div></br>




            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
@endsection
