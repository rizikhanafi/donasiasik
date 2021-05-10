@extends('layouts.template')
@section('title','Donasi')
@section('konten')
<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Pengguna / <strong class="text-primary small">{{auth()->user()->name}}</strong></h3>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="/home" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            <a href="/home" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card">
                        <div class="card-aside-wrap">
                            <div class="card-content">
                                <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/profil/detail_profil"><em class="icon ni ni-user-circle"></em><span>Personal</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="/profil/edit_profil"><em class="icon ni ni-repeat"></em><span>Edit Profil</span></a>
                                    </li>
                                </ul><!-- .nav-tabs -->
                                <div class="card-inner">
                                    <div class="nk-block">
                                        <div class="nk-block-head">
                                            <h5 class="title">Informasi Personal</h5>
                                            <p>Detail dan informasi donatur.</p> <br>
                                        </div><!-- .nk-block-head -->
                                    </div><!-- .nk-block -->
                                    <form action="/profil/edit_profil/update" method="POST">
                                        @csrf
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <input type="text" value="{{auth()->user()->id}}" name="ids" hidden>
                                                <div class="form-group">
                                                    <label class="form-label" for="full-name-1">Nama</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" required name="nama"
                                                            class="form-control @error('nama') is-invalid @enderror"
                                                            id="full-name-1" value="{{auth()->user()->name}}">
                                                        @error('nama')
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
                                                            id="email-address-1" value="{{auth()->user()->email}}">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
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
                                </div><!-- .card-inner -->
                            </div><!-- .card-aside -->
                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
@endsection