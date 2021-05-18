@extends('layouts.template')
@section('title','Tentang')
@section('konten')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="content-page wide-sm m-auto">
                    <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                        <div class="nk-block-head-content text-center">
                            <div class="nk-block-head-sub"><span>FAQs</span></div>
                            <h2 class="nk-block-title fw-normal">Mengapa Donasik?</h2>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card">
                            <div id="faqs" class="accordion">
                                <div class="accordion-item">
                                    <a href="#" class="accordion-head" data-toggle="collapse" data-target="#faq-q1">
                                        <h6 class="title">Mengapa memilih Donasik sebagai platform?</h6>
                                        <span class="accordion-icon"></span>
                                    </a>
                                    <div class="accordion-body collapse show" id="faq-q1" data-parent="#faqs">
                                        <div class="accordion-inner">
                                        <p><strong>Donasik</strong> memudahkan pengguna untuk <strong>donasi</strong> dengan aman, legal, dan terpercaya.</p>
                                        <p>Dengan akses donasi, kirim bukti, lalu verifikasi.</p>    
                                        </div>
                                    </div>
                                </div><!-- .accordion-item -->
                                <div class="accordion-item">
                                    <a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#faq-q2">
                                        <h6 class="title">Apakah uang yang sudah di donasikan bisa diambil kembali?</h6>
                                        <span class="accordion-icon"></span>
                                    </a>
                                    <div class="accordion-body collapse" id="faq-q2" data-parent="#faqs">
                                        <div class="accordion-inner">
                                            <p>Uang yang sudah di donasikan bisa kembali ditarik dengan syarat menghubungi <a href="#"><strong>Customer Service</strong></a> kami.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#faq-q5">
                                        <h6 class="title">Apakah Donasik aman?</h6>
                                        <span class="accordion-icon"></span>
                                    </a>
                                    <div class="accordion-body collapse" id="faq-q5" data-parent="#faqs">
                                        <div class="accordion-inner">
                                        <p>Insya Allah <strong>Donasik</strong> kami jaga sebaik mungkin dan seamanah mungkin sesuai ketentuan yang berlaku.</p>    
                                        </div>
                                    </div>
                                </div><!-- .accordion-item -->
                            </div><!-- .accordion -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div><!-- .content-page -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
@endsection