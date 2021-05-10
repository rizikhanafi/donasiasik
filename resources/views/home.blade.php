@extends('layouts.template')
@section('title','Dashboard')
@section('konten')
 <!-- content @s -->
 <div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Dashboard</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card">
                                <div class="nk-ecwg nk-ecwg6">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Jumlah Donatur Terverfikasi</h6>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="data-group">
                                                <div class="amount">{{$jumlah_donatur}}</div>
                                                <div class="nk-ecwg6-ck">
                                                    <canvas class="ecommerce-line-chart-s3" id="todayOrders"></canvas>
                                                </div>
                                            </div>
                                         </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card">
                                <div class="nk-ecwg nk-ecwg6">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Total Donasi</h6>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="data-group">
                                                <div class="amount">Rp. {{$jumlah_donasi}}</div>
                                                <div class="nk-ecwg6-ck">
                                                    <canvas class="ecommerce-line-chart-s3" id="todayRevenue"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">Histori Transaksi</h4>
                            <p>Cek status donasi kamu disini.</p>
                        </div>
                    </div>
                    <div class="card card-preview">
                        <table class="table table-tranx is-compact">
                            <thead>
                                <tr class="tb-tnx-head">
                                    <th class="tb-tnx-id"><span class="">#</span></th>
                                    <th class="tb-tnx-info">
                                        <span class="tb-tnx-desc d-none d-sm-inline-block">
                                            <span>Nama</span>
                                        </span>
                                        <span class="tb-tnx-date d-md-inline-block d-none">
                                            <span class="d-none d-md-block">
                                                <span>Tanggal Donasi</span>
                                            </span>
                                    </th>
                                    <th class="tb-tnx-amount">
                                        <span class="tb-tnx-total">Jumlah Donasi</span>
                                        <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                    </th>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                @foreach ($tampil as $data )
                                <tr class="tb-tnx-item">
                                    <td class="tb-tnx-id">
                                        <span>{{$no++}}</span>
                                    </td>
                                    <td class="tb-tnx-info">
                                        <div class="tb-tnx-desc">
                                            <span class="title">{{$data -> nama_donatur}}</span>
                                        </div>
                                        <div class="tb-tnx-date">
                                            <span class="date">{{$data -> dibuat_tanggal}}</span>
                                        </div>
                                    </td>
                                    <td class="tb-tnx-amount">
                                        <div class="tb-tnx-total">
                                            <span class="amount">Rp. {{$data -> jumlah_donasi}}</span>
                                        </div>
                                        <div class="tb-tnx-status">
                                            @if ($data -> status == "Pending")
                                            <span class="badge badge-dot badge-warning">{{$data -> status}}</span>
                                            @elseif ($data -> status == "Gagal")
                                            <span class="badge badge-dot badge-danger">{{$data -> status}}</span>
                                            @elseif ($data -> status == "Terverifikasi")
                                            <span class="badge badge-dot badge-success">{{$data -> status}}</span>
                                            @endif
                                            </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- .card -->
                </div><!-- nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
@endsection
