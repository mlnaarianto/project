<x-layouts.app title="Dashboard">

    <h2 class="fw-bold mb-4">Dashboard</h2>

    <!-- ROW CARD -->
    <div class="row g-4">

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-muted mb-1">Users</p>
                            <h4 class="fw-bold">1,245</h4>
                        </div>
                        <div class="text-primary fs-1">
                            <i class="bi bi-people"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-muted mb-1">Orders</p>
                            <h4 class="fw-bold">372</h4>
                        </div>
                        <div class="text-success fs-1">
                            <i class="bi bi-bag-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-muted mb-1">Revenue</p>
                            <h4 class="fw-bold">$12,430</h4>
                        </div>
                        <div class="text-warning fs-1">
                            <i class="bi bi-cash-coin"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="text-muted mb-1">Messages</p>
                            <h4 class="fw-bold">87</h4>
                        </div>
                        <div class="text-danger fs-1">
                            <i class="bi bi-envelope-paper"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- CHART AREA -->
    <div class="card shadow-sm border-0 mt-4">
        <div class="card-header bg-white">
            <h6 class="m-0 fw-bold">Statistik Mingguan</h6>
        </div>
        <div class="card-body">
            <div class="text-center py-5 text-muted">
                <i class="bi bi-graph-up-arrow fs-1"></i>
                <p class="mt-2">Grafik akan tampil di sini</p>
            </div>
        </div>
    </div>


    <!-- TABLE AREA -->
    <div class="card shadow-sm border-0 mt-4">
        <div class="card-header bg-white">
            <h6 class="m-0 fw-bold">Aktivitas Terbaru</h6>
        </div>
        <div class="card-body p-0">

            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Tanggal</th>
                        <th>Aktivitas</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2025-11-28</td>
                        <td>User baru mendaftar</td>
                        <td><span class="badge bg-success">Sukses</span></td>
                    </tr>
                    <tr>
                        <td>2025-11-28</td>
                        <td>Order #3245 dibuat</td>
                        <td><span class="badge bg-primary">Diproses</span></td>
                    </tr>
                    <tr>
                        <td>2025-11-27</td>
                        <td>Pembayaran gagal</td>
                        <td><span class="badge bg-danger">Gagal</span></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

</x-layouts.app>
