@extends('layouts.template')
@section('title','Donatur')
@section('konten')
<div class="nk-content ">
<div class="container-fluid">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Verifikasi Donasi</h3>
                        <p>Verifikasi user yang sudah donasi sesuai peraturan.</p>
                    </div>
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->
            @if(session('pesan'))
            <div class="alert alert-pro alert-primary alert-dismissible">
                <div class="alert-text">
                    <h6>Berhasil</h6>
                    <p>{{ session('pesan') }}</p>
                </div>
                <button class="close" data-dismiss="alert"></button>
            </div>
        @endif
            <!-- nk-block -->
            <div class="nk-block nk-block-lg">
                <div class="card card-preview">
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Jumlah Donasi</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Status</th>
                            <th scope="col">Konfigurasi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($tampil as $data )
                          <tr>
                            <th scope="row">{{$data -> id_donatur}}</th>
                            <td>{{$data -> nama_donatur}}</td>
                            <td>{{$data -> email}}</td>
                            <td>{{$data -> no_telepon}}</td>
                            <td>{{$data -> jumlah_donasi}}</td>
                            <td>{{$data -> dibuat_tanggal}}</td>
                            @if ($data -> status == "Pending")
                            <td class="badge badge-dot badge-warning">Pending</td>
                            @elseif ($data -> status == "Terverifikasi")
                            <td class="badge badge-dot badge-success">Terverifikasi</td>
                            @elseif ($data -> status == "Gagal")
                            <td class="badge badge-dot badge-danger">Gagal</td>
                            @endif
                            <td>
                                <div class="d-md-inline">
                                 <a href="/donatur_verifikasi/ubah/{{$data -> id_donatur}}" class="btn btn-warning">Edit</a>    
                                 <a href="/donatur_verifikasi/hapus/{{$data -> id_donatur}}" class="btn btn-danger">Hapus</a>
                                </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                    </div>
                </div><!-- .card -->
            </div><!-- nk-block -->
        </div>
    </div>
</div>
</div>
@endsection
