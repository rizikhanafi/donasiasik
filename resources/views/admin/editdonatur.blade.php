@extends('layouts.template')
@section('title','Donasi')
@section('konten')
<div class="nk-content ">
<div class="container-fluid">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Edit Verifikasi</h3>
                    </div><!-- .nk-block-head-content -->
                </div><!-- .nk-block-between -->
            </div><!-- .nk-block-head -->
            <div class="nk-block nk-block-lg">
                <div class="card">
                    <div class="card-inner">
                        <div class="card-head">
                            <h5 class="card-title">Isi Form Donasi</h5>
                        </div>
                        <form action="/donatur_verifikasi/update/{{$id_donatur -> id_donatur}}" method="POST">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <input type="text" value="{{ $id_donatur -> id_donatur }}" name="id_donatur" hidden>
                                    <div class="form-group">
                                        <label class="form-label" for="full-name-1">Nama Lengkap</label>
                                        <div class="form-control-wrap">
                                            <input type="text" required name="nama_donatur"
                                                class="form-control @error('nama_donatur') is-invalid @enderror"
                                                id="full-name-1" value="{{ $id_donatur -> nama_donatur }}">
                                            @error('nama_donatur')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email-address-1">Email</label>
                                        <div class="form-control-wrap">
                                            <input type="email" required name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                id="email-address-1" value="{{ $id_donatur -> email }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no-1">No Telepon</label>
                                        <div class="form-control-wrap">
                                            <input type="number" required name="no_telepon"
                                                class="form-control @error('no_telepon') is-invalid @enderror"
                                                id="phone-no-1" value="{{ $id_donatur -> no_telepon }}">
                                            @error('no_telepon')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="pay-amount-1">Jumlah Donasi</label>
                                        <div class="form-control-wrap">
                                            <input type="number" required name="jumlah_donasi"
                                                class="form-control @error('jumlah_donasi') is-invalid @enderror"
                                                id="pay-amount-1" value="{{ $id_donatur -> jumlah_donasi }}">
                                            @error('jumlah_donasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="dibuat_tanggal" hidden>
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Verifikasi Donasi</label>
                                    <div class="form-control-wrap ">
                                        <div class="form-control-select">
                                            <select name="status" class="form-control" id="status">
                                                @if ($id_donatur -> status == "Pending")
                                                <option>{{$id_donatur -> status}}</option>
                                                <option>Terverifikasi</option>  
                                                <option>Gagal</option> 
                                               @elseif ($id_donatur -> status == "Gagal")
                                                <option>{{$id_donatur -> status}}</option>
                                                <option>Terverifikasi</option>  
                                                <option>Pending</option> 
                                                @elseif (($id_donatur -> status == "Terverifikasi"))
                                                <option>{{$id_donatur -> status}}</option>
                                                <option>Pending</option>  
                                                <option>Gagal</option> 
                                                @else
                                                <option>Pending</option>
                                                <option>Terverifikasi</option>  
                                                <option>Gagal</option> 
                                                @endif  
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- .nk-block -->
        </div>
    </div>
</div>
@endsection
