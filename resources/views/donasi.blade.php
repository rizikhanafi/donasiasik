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
                        <h3 class="nk-block-title page-title">Donasi</h3>
                    </div><!-- .nk-block-head-content -->
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
            <div class="nk-block nk-block-lg">
                <div class="card">
                    <div class="card-inner">
                        <div class="card-head">
                            <h5 class="card-title">Isi Form Donasi</h5>
                        </div>
                        <form action="/donasi/tambah" method="POST">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <input type="text" name="id_donatur" hidden>
                                    <div class="form-group">
                                        <label class="form-label" for="full-name-1">Nama Lengkap</label>
                                        <div class="form-control-wrap">
                                            <input type="text" required name="nama_donatur"
                                                class="form-control @error('nama_donatur') is-invalid @enderror"
                                                id="full-name-1" value="{{ old('nama_donatur') }}">
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
                                                id="email-address-1" value="{{ old('email') }}">
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
                                                id="phone-no-1" value="{{ old('no_telepon') }}">
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
                                                id="pay-amount-1" value="{{ old('jumlah_donasi') }}">
                                            @error('jumlah_donasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="dibuat_tanggal" hidden>
                                <input type="text" name="status" hidden value="Pending">
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#modalAlert">Simpan</button>
                                        <div class="modal fade" tabindex="-1" id="modalAlert">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <a href="#" class="close" data-dismiss="modal"><em
                                                            class="icon ni ni-cross"></em></a>
                                                    <div class="modal-body modal-body-lg text-center">
                                                        <div class="nk-modal">
                                                            <em
                                                                class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"></em>
                                                            <h4 class="nk-modal-title">Proses Verfikasi</h4>
                                                            <div class="nk-modal-text">
                                                                <div class="caption-text">Kirim donasi ke Virtual
                                                                    Account BCA: 999923232 dengan atas nama Baitun
                                                                    Nazmi.</div>
                                                                <span class="sub-text-sm">Untuk verifikasi, kirimkan
                                                                    bukti pembayaran melalui no Whastapp. <a href="#">
                                                                        Klik disini</a></span>
                                                            </div>
                                                            <div class="nk-modal-action">
                                                                <button type="submit"
                                                                    class="btn btn-lg btn-mw btn-success">OK</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
</div>
@endsection
