@extends('tampilan.app')

@section('title', 'About')

@section('content')
    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container">
            <h1 class="display-5 fw-bold">Tentang Kami</h1>
            <p class="lead mt-3">Mengenal lebih dekat MyApp dan tim di baliknya</p>
        </div>
    </section>

    <!-- ABOUT CONTENT SECTION -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-4">Tentang MyApp</h2>
                    <p class="text-muted mb-4">
                        MyApp adalah aplikasi modern yang dibuat menggunakan Laravel dan Bootstrap 5. Kami berkomitmen untuk menyediakan solusi digital yang inovatif dan mudah digunakan bagi semua pengguna.
                    </p>
                    <p class="text-muted mb-4">
                        Aplikasi ini dirancang dengan performa tinggi, user-friendly, dan responsif, sehingga dapat diakses dengan baik melalui berbagai jenis perangkat.
                    </p>
                    <div class="d-flex mb-3">
                        <div class="shrink-0">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-check-lg"></i>
                            </div>
                        </div>
                        <div class="grow ms-3">
                            <h5 class="fw-bold">Visi</h5>
                            <p class="text-muted mb-0">Menjadi platform terdepan yang menghubungkan pengguna dengan solusi teknologi yang efisien dan user-friendly.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="shrink-0">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-check-lg"></i>
                            </div>
                        </div>
                        <div class="grow ms-3">
                            <h5 class="fw-bold">Misi</h5>
                            <p class="text-muted mb-0">Mengembangkan produk berkualitas tinggi yang memudahkan kehidupan sehari-hari pengguna dan mendukung produktivitas mereka.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://picsum.photos/seed/aboutus/600/400.jpg" alt="About Us" class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
@endpush