<!-- resources/views/about.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(135deg, #4f46e5, #3b82f6);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .team-card {
            border-radius: 16px;
            transition: 0.3s ease;
            overflow: hidden;
        }

        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .timeline {
            position: relative;
            padding: 20px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            height: 100%;
            width: 4px;
            background: #4f46e5;
            left: 50%;
            transform: translateX(-50%);
        }

        .timeline-item {
            margin-bottom: 50px;
            position: relative;
            width: 50%;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background: white;
            border: 4px solid #4f46e5;
            border-radius: 50%;
            top: 0;
        }

        .timeline-left {
            left: 0;
            padding-right: 40px;
            text-align: right;
        }

        .timeline-left::after {
            right: -10px;
        }

        .timeline-right {
            left: 50%;
            padding-left: 40px;
        }

        .timeline-right::after {
            left: -10px;
        }

        @media (max-width: 768px) {
            .timeline::before {
                left: 30px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                text-align: left !important;
            }

            .timeline-left::after,
            .timeline-right::after {
                left: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">MyApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="btn btn-primary rounded-pill px-4 ms-2" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container">
            <h1 class="display-5 fw-bold">Tentang Kami</h1>
            <p class="lead mt-3">Mengenal lebih dekat MyApp dan tim di baliknya</p>
        </div>
    </section>

    <!-- ABOUT US SECTION -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-4">Visi & Misi Kami</h2>
                    <p class="text-muted mb-4">
                        MyApp berkomitmen untuk menyediakan solusi digital yang inovatif dan mudah digunakan bagi semua
                        pengguna. Kami percaya bahwa teknologi harus dapat diakses oleh siapa saja, kapan saja, dan di
                        mana saja.
                    </p>
                    <div class="d-flex mb-3">
                        <div class="shrink-0">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 50px; height: 50px;">
                                <i class="bi bi-check-lg"></i>
                            </div>
                        </div>
                        <div class="grow ms-3">
                            <h5 class="fw-bold">Visi</h5>
                            <p class="text-muted mb-0">Menjadi platform terdepan yang menghubungkan pengguna dengan
                                solusi teknologi yang efisien dan user-friendly.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="shrink-0">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 50px; height: 50px;">
                                <i class="bi bi-check-lg"></i>
                            </div>
                        </div>
                        <div class="grow ms-3">
                            <h5 class="fw-bold">Misi</h5>
                            <p class="text-muted mb-0">Mengembangkan produk berkualitas tinggi yang memudahkan kehidupan
                                sehari-hari pengguna dan mendukung produktivitas mereka.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://picsum.photos/seed/aboutus/600/400.jpg" alt="About Us"
                        class="img-fluid rounded-4 shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- TIMELINE SECTION -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center mb-5">Perjalanan Kami</h2>
            <div class="timeline">
                <div class="timeline-item timeline-left">
                    <h4 class="fw-bold">2023</h4>
                    <p class="text-muted">MyApp didirikan dengan visi untuk menciptakan solusi digital yang inovatif dan
                        mudah digunakan.</p>
                </div>
                <div class="timeline-item timeline-right">
                    <h4 class="fw-bold">2024</h4>
                    <p class="text-muted">Meluncurkan versi beta dengan fitur-fitur dasar dan menerima umpan balik
                        positif dari pengguna awal.</p>
                </div>
                <div class="timeline-item timeline-left">
                    <h4 class="fw-bold">2025</h4>
                    <p class="text-muted">Merilis versi stabil dengan fitur lengkap dan mulai ekspansi ke pasar yang
                        lebih luas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->
    <section class="py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-5">Tim Kami</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="team-card bg-white shadow-sm h-100">
                        <img src="https://picsum.photos/seed/person1/400/400.jpg" alt="Team Member" class="img-fluid">
                        <div class="p-4">
                            <h5 class="fw-bold">Ahmad Rizki</h5>
                            <p class="text-primary mb-2">CEO & Founder</p>
                            <p class="text-muted">Berpengalaman lebih dari 10 tahun dalam industri teknologi dan
                                digital.</p>
                            <div class="mt-3">
                                <a href="#" class="text-muted me-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="text-muted me-2"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="text-muted"><i class="bi bi-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card bg-white shadow-sm h-100">
                        <img src="https://picsum.photos/seed/person2/400/400.jpg" alt="Team Member" class="img-fluid">
                        <div class="p-4">
                            <h5 class="fw-bold">Siti Nurhaliza</h5>
                            <p class="text-primary mb-2">CTO</p>
                            <p class="text-muted">Ahli dalam pengembangan perangkat lunak dan arsitektur sistem yang
                                scalable.</p>
                            <div class="mt-3">
                                <a href="#" class="text-muted me-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="text-muted me-2"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="text-muted"><i class="bi bi-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card bg-white shadow-sm h-100">
                        <img src="https://picsum.photos/seed/person3/400/400.jpg" alt="Team Member"
                            class="img-fluid">
                        <div class="p-4">
                            <h5 class="fw-bold">Budi Santoso</h5>
                            <p class="text-primary mb-2">Head of Design</p>
                            <p class="text-muted">Spesialis dalam UX/UI design dengan fokus pada pengalaman pengguna
                                yang intuitif.</p>
                            <div class="mt-3">
                                <a href="#" class="text-muted me-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="text-muted me-2"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="text-muted"><i class="bi bi-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS SECTION -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4 mb-md-0">
                    <h2 class="fw-bold text-primary">10K+</h2>
                    <p class="text-muted">Pengguna Aktif</p>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <h2 class="fw-bold text-primary">50+</h2>
                    <p class="text-muted">Fitur Tersedia</p>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <h2 class="fw-bold text-primary">99.9%</h2>
                    <p class="text-muted">Uptime Server</p>
                </div>
                <div class="col-md-3">
                    <h2 class="fw-bold text-primary">24/7</h2>
                    <p class="text-muted">Dukungan Pelanggan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="text-center py-4 bg-white border-top mt-4">
        <p class="mb-0">&copy; 2025 MyApp. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</body>

</html>
