<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Lades - Sidebar Modern</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="/assets/css/style.css" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <div class="d-none d-md-block sidebar-government p-3">
      <div class="brand-section d-flex align-items-center justify-content-center">
        <div class="logo-wrapper">
          <img src="/assets/img/logo.png" alt="Logo Desa" class="logo-img" />
        </div>
        <div class="brand-text">
          <div class="brand-title">Pemerintah Desa</div>
          <div class="brand-subtitle">Pesudukuh</div>
        </div>
      </div>

      <div class="user-info">
        <div class="user-name">Perangkat User</div>
        <div class="user-role">Perangkat Desa</div>
      </div>

      <div class="nav-section-header"><i class="bi bi-grid-fill me-2"></i>Menu Utama</div>

      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="{{ route('dashboard.perangkat') }}" class="nav-link active"> <i class="bi bi-speedometer2"></i> Dashboard </a>
        </li>

        <div class="nav-section-header mt-3"><i class="bi bi-briefcase me-2"></i>Layanan Desa</div>
        <li>
          <a href="{{ route('pengajuanSurat.index') }}" class="nav-link"> <i class="bi bi-envelope-paper"></i> Pengajuan Surat </a>
        </li>
        <li>
          <a href="{{ route('pembuatanSurat.index') }}" class="nav-link"> <i class="bi bi-file-earmark-plus"></i> Pembuatan Surat </a>
        </li>

        <div class="nav-section-header mt-3"><i class="bi bi-megaphone me-2"></i>Informasi Publik</div>
        <li>
          <a href="{{ route('pengumuman.index') }}" class="nav-link"> <i class="bi bi-megaphone"></i> Pengumuman </a>
        </li>
        <li>
          <a href="{{ route('kabar.index') }}" class="nav-link"> <i class="bi bi-newspaper"></i> Kabar Desa </a>
        </li>

        <div class="nav-section-header mt-3"><i class="bi bi-person-gear me-2"></i>Manajemen</div>
        <li>
          <a href="{{ route('laporan.index') }}" class="nav-link"> <i class="bi bi-graph-up-arrow"></i> Laporan </a>
        </li>
        <li>
          <a href="{{ route('profil.perangkat') }}" class="nav-link"> <i class="bi bi-person-circle"></i> Profil Akun </a>
        </li>
      </ul>

      <hr />

      <button type="button" class="btn-government-logout mt-auto" onclick="confirmLogout()"><i class="bi bi-box-arrow-right me-2"></i> Keluar Sistem</button>
    </div>

    <nav class="navbar navbar-expand-lg mobile-navbar-government d-md-none sticky-top">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="#">
          <i class="bi bi-bank text-white fs-5"></i>
          <div>
            <div style="font-size: 1rem; line-height: 1">E-Lades</div>
            <div style="font-size: 0.65rem; opacity: 0.8">Desa Digital</div>
          </div>
        </a>

        <!-- Hamburger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNavbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse Menu -->
        <div class="collapse navbar-collapse mt-3" id="mobileNavbarNav">
          <!-- User Info -->
          <div class="mobile-user-info mb-3">
            <div class="user-name">Perangkat User</div>
            <div class="user-role">Perangkat Desa</div>
          </div>

          <!-- ================= MENU UTAMA ================= -->
          <div class="nav-section-header"><i class="bi bi-grid-fill me-2"></i>Menu Utama</div>

          <ul class="navbar-nav mb-2">
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('dashboard.perangkat') }}">
                <i class="bi bi-speedometer2"></i>
                Dashboard
              </a>
            </li>
          </ul>

          <!-- ================= LAYANAN DESA ================= -->
          <div class="nav-section-header mt-3"><i class="bi bi-briefcase me-2"></i>Layanan Desa</div>

          <ul class="navbar-nav mb-2">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pengajuanSurat.index') }}">
                <i class="bi bi-envelope-paper"></i>
                Pengajuan Surat
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pembuatanSurat.index') }}">
                <i class="bi bi-file-earmark-plus"></i>
                Pembuatan Surat
              </a>
            </li>
          </ul>

          <!-- ================= INFORMASI PUBLIK ================= -->
          <div class="nav-section-header mt-3"><i class="bi bi-megaphone me-2"></i>Informasi Publik</div>

          <ul class="navbar-nav mb-2">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pengumuman.index') }}">
                <i class="bi bi-megaphone"></i>
                Pengumuman
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('kabar.index') }}">
                <i class="bi bi-newspaper"></i>
                Kabar Desa
              </a>
            </li>
          </ul>

          <!-- ================= MANAJEMEN ================= -->
          <div class="nav-section-header mt-3"><i class="bi bi-person-gear me-2"></i>Manajemen</div>

          <ul class="navbar-nav mb-3">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('laporan.index') }}">
                <i class="bi bi-graph-up-arrow"></i>
                Laporan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('profil.perangkat') }}">
                <i class="bi bi-person-circle"></i>
                Profil Akun
              </a>
            </li>
          </ul>

          <!-- Logout -->
          <button type="button" class="btn-government-logout mt-2" onclick="confirmLogout('mobile')">
            <i class="bi bi-box-arrow-right me-2"></i>
            Keluar Sistem
          </button>
        </div>
      </div>
    </nav>

    <div class="main-content">
      <div class="px-4 py-3">
        <div class="row mb-4">
          <div class="col-12">
            <div class="card card-government">
              <div class="card-body py-4">
                <div class="row align-items-center">
                  <div class="col-md-8">
                    <h2 class="fw-bold mb-2 text-white">Dashboard Pemerintahan Desa</h2>
                    <p class="mb-0 opacity-75 text-white">Sistem Informasi Pelayanan Administratif Desa</p>
                  </div>
                  <div class="col-md-4 text-md-end">
                    <div class="d-flex align-items-center justify-content-md-end">
                      <i class="bi bi-bank fs-1 opacity-50 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row g-4">
          <div class="col-lg">
            <div class="row g-4 mb-4">
              <div class="col-md-3">
                <div class="card card-stats h-100">
                  <div class="card-body p-4">
                    <div class="icon-box">
                      <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <h3 class="text-government-primary fw-bold mb-1">11</h3>
                    <p class="text-muted mb-0">Total Pengajuan</p>
                    <small class="text-muted">Keseluruhan pengajuan surat</small>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card card-stats h-100">
                  <div class="card-body p-4">
                    <div class="icon-box" style="background: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%)">
                      <i class="bi bi-clock"></i>
                    </div>
                    <h3 class="text-warning fw-bold mb-1">1</h3>
                    <p class="text-muted mb-0">Tertunda</p>
                    <small class="text-muted">Menunggu verifikasi</small>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card card-stats h-100">
                  <div class="card-body p-4">
                    <div class="icon-box" style="background: linear-gradient(135deg, #0dcaf0 0%, #0d6efd 100%)">
                      <i class="bi bi-gear-fill"></i>
                    </div>
                    <h3 class="text-info fw-bold mb-1">1</h3>
                    <p class="text-muted mb-0">Diproses</p>
                    <small class="text-muted">Sedang dalam proses</small>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card card-stats h-100">
                  <div class="card-body p-4">
                    <div class="icon-box" style="background: linear-gradient(135deg, #198754 0%, #20c997 100%)">
                      <i class="bi bi-check-circle-fill"></i>
                    </div>
                    <h3 class="text-success fw-bold mb-1">7</h3>
                    <p class="text-muted mb-0">Selesai</p>
                    <small class="text-muted">Berhasil diselesaikan</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="row g-4 mb-4">
              <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                  <div class="card-header bg-government-light border-0 py-3">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-megaphone text-government-primary me-2"></i>
                      <h5 class="fw-bold mb-0 text-government-primary">Pengumuman Terbaru</h5>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                      <div class="list-group-item border-0 py-3">
                        <div class="d-flex align-items-start">
                          <div class="bg-primary bg-opacity-10 rounded p-2 me-3">
                            <i class="bi bi-bell text-government-primary"></i>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="fw-bold mb-1 text-government-primary">TEST</h6>
                            <p class="text-muted small mb-1"><i class="fas fa-calendar-alt me-1"></i> 20 Okt 2023</p>
                            <p class="mb-0 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores facere aut e...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                  <div class="card-header bg-government-light border-0 py-3">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-newspaper text-government-primary me-2"></i>
                      <h5 class="fw-bold mb-0 text-government-primary">Kabar Desa Terbaru</h5>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                      <div class="list-group-item border-0 py-3">
                        <div class="d-flex align-items-start">
                          <div class="bg-success bg-opacity-10 rounded p-2 me-3">
                            <i class="bi bi-house text-success"></i>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="fw-bold mb-1 text-government-primary">TEST</h6>
                            <p class="text-muted small mb-1"><i class="fas fa-calendar-alt me-1"></i> 15 Okt 2023</p>
                            <p class="mb-0 text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores facere aut e...</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row g-4">
              <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                  <div class="card-header bg-government-light border-0 py-3">
                    <div class="d-flex align-items-center">
                      <i class="fas fa-chart-pie text-government-primary me-2"></i>
                      <h5 class="fw-bold mb-0 text-government-primary">Grafik Status</h5>
                    </div>
                  </div>
                  <div class="card-body p-4">
                    <canvas id="statusChart" style="max-height: 300px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                  <div class="card-header bg-government-light border-0 py-3">
                    <div class="d-flex align-items-center">
                      <i class="fas fa-history text-government-primary me-2"></i>
                      <h5 class="fw-bold mb-0 text-government-primary">Aktivitas Terbaru</h5>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                      <div class="list-group-item border-0 py-3">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; background-color: #eef7ff">
                              <i class="text-info"></i>
                            </div>
                            <div>
                              <h6 class="fw-bold mb-0" style="color: #1a407b">TEST</h6>
                              <p class="text-muted small mb-0">TEST</p>
                            </div>
                          </div>
                          <span class="badge rounded-pill bg-success px-3 py-2">Selesai</span>
                        </div>
                      </div>

                      <div class="list-group-item border-0 py-3">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; background-color: #eef7ff">
                              <i class="text-info"></i>
                            </div>
                            <div>
                              <h6 class="fw-bold mb-0" style="color: #1a407b">TEST</h6>
                              <p class="text-muted small mb-0">TEST</p>
                            </div>
                          </div>
                          <span class="badge rounded-pill bg-warning text-white px-3 py-2">Tertunda</span>
                        </div>
                      </div>

                      <div class="list-group-item border-0 py-3">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; background-color: #eef7ff">
                              <i class="text-info"></i>
                            </div>
                            <div>
                              <h6 class="fw-bold mb-0" style="color: #1a407b">TEST</h6>
                              <p class="text-muted small mb-0">TEST</p>
                            </div>
                          </div>
                          <span class="badge rounded-pill bg-info text-white px-3 py-2">Diproses</span>
                        </div>
                      </div>

                      <div class="list-group-item border-0 py-3">
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center">
                            <div class="rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; background-color: #eef7ff">
                              <i class="text-info"></i>
                            </div>
                            <div>
                              <h6 class="fw-bold mb-0" style="color: #1a407b">TEST</h6>
                              <p class="text-muted small mb-0">TEST</p>
                            </div>
                          </div>
                          <span class="badge rounded-pill bg-danger px-3 py-2">Ditolak</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      // Script Logout
      function confirmLogout(type = "desktop") {
        Swal.fire({
          title: "Konfirmasi Keluar",
          text: "Apakah Anda yakin ingin keluar?",
          icon: "question",
          showCancelButton: true,
          confirmButtonColor: "#dc3545",
          confirmButtonText: "Ya, Keluar",
          buttonsStyling: false,
          customClass: {
            confirmButton: "btn btn-danger mx-2",
            cancelButton: "btn btn-secondary mx-2",
          },
        }).then((result) => {
          if (result.isConfirmed) {
            location.reload();
          }
        });
      }

      // Script Grafik Dashboard
      document.addEventListener("DOMContentLoaded", function () {
        const ctx = document.getElementById("statusChart").getContext("2d");
        new Chart(ctx, {
          type: "pie",
          data: {
            labels: ["Tertunda", "Diproses", "Selesai", "Ditolak"],
            datasets: [
              {
                data: [12, 5, 133, 2],
                backgroundColor: ["#ffc107", "#0dcaf0", "#198754", "#dc3545"],
                borderWidth: 1,
              },
            ],
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: { position: "bottom" },
            },
          },
        });
      });

       // Logout function
      function confirmLogout() {
        Swal.fire({
          title: "Keluar Sistem?",
          text: "Anda harus login kembali untuk mengakses data.",
          icon: "question",
          showCancelButton: true,
          confirmButtonColor: "#2c3e50",
          cancelButtonColor: "#d33",
          confirmButtonText: "Ya, Keluar",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "{{ route('login') }}"; // Sesuaikan URL
          }
        });
      }
    </script>
  </body>
</html>
