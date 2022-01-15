@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-md-12 mt-3">
            <div class="container-fluid">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <h6 class="m-0 font-weight-bold text-primary">Data Guru Supervisor Dan Kurikulum</h6>
                    <div class="card-header py-3">
                        <a class="btn btn-success" href="{{ route('create')}}"> Tambah Data Guru</a>
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
                                        @foreach ($data as $dt)
                                            <tr class="text-center">
                                                <td>{{$dt->nip}}</td>
                                                <td>{{$dt->nama}}</td>
                                                <td>{{$dt->email}}</td>
                                                <td>
                                                    @if($dt->is_admin == '1')
                                                    Kurikulum
                                                    @elseif($dt->is_admin == '2')
                                                    Kepsek
                                                    @elseif($dt->is_admin == '3')
                                                    Guru
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($dt->supervisor == 0)
                                                    <a href="{{ route('tosupervisor', $dt->id) }}" class="btn btn-sm btn-primary">ACTIVE</a>
                                                    @else
                                                    <a href="{{ route('deletesupervisor', $dt->id) }}" class="btn btn-sm btn-danger">Deactive</a>
                                                    @endif

                                                </td>
                                                <td>


                                                    <a class="btn btn-primary" href="{{route('edit', $dt->id)}}">Edit</a>

                                                    <a class="btn btn-danger" href="{{route('destroy', $dt->id)}}">Hapus</a>


                                                </td>
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div></br>




            </div>
            <!-- /.container-fluid -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="container-fluid">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <h6 class="m-0 font-weight-bold text-primary">Jadwal Supervisor</h6>
                    <div class="card-header py-3">
                        <a class="btn btn-success" href="{{ route('tojadwal')}}"> Tambah Data Jadwal Supervisor</a>
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
                                        <th>NIP SUPERVISOR</th>
                                        <th>Dari Waktu</th>
                                        <th>Sampai Waktu</th>
                                        <th>TANGGAL</th>
                                        <th>NIP GURU</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($jd as $dt)
                                            <tr class="text-center">
                                                <td>{{$dt->nip_super}}</td>
                                                <td>{{$dt->time1}}</td>
                                                <td>{{$dt->time2}}</td>
                                                <td>{{$dt->tanggal}}</td>
                                                <td>{{$dt->nip_user}}</td>
                                            </tr>
                                        @endforeach
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
