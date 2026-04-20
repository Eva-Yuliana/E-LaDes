<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Lades - Sidebar Modern</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="/assets/css/kabar.css" />

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
          <a href="{{ route('dashboard.perangkat') }}" class="nav-link"> <i class="bi bi-speedometer2"></i> Dashboard </a>
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
          <a href="{{ route('kabar.index') }}" class="nav-link active"> <i class="bi bi-newspaper"></i> Kabar Desa </a>
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
              <a class="nav-link" href="{{ route('dashboard.perangkat') }}">
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
              <a class="nav-link active" href="{{ route('kabar.index') }}">
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
      <div class="government-container py-4">
        <div class="container-fluid px-md-4">
          <div class="card mb-4 shadow-sm border-0">
            <div class="card-header card-government p-4">
              <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="mb-md-0 mb-2">
                  <h3 class="text-light mb-0 fw-semibold">
                    <i class="bi bi-newspaper me-2"></i>
                    Judul Berita Kabar Desa
                  </h3>
                </div>
                <div>
                  <span class="date-badge text-light">
                    <i class="fas fa-calendar-alt me-2"></i>
                    Senin, 01 Januari 2026
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8 mb-4">
              <div class="card info-card mb-4 shadow-sm">
                <div class="card-header bg-white py-3">
                  <h5 class="text-primary mb-0 fw-semibold">
                    <i class="fas fa-align-left me-2"></i>
                    Isi Berita
                  </h5>
                </div>
                <div class="card-body p-4">
                  <p class="text-secondary mb-0" style="text-align: justify; line-height: 1.8; font-size: 1.05rem">
                    Ini adalah area isi berita. Semua teks deskripsi atau laporan mengenai kegiatan desa akan muncul di sini dengan format rata kanan-kiri (justify) dan spasi baris yang nyaman dibaca oleh masyarakat Pesudukuh.
                  </p>
                </div>
              </div>

              <div class="card info-card shadow-sm">
                <div class="card-header bg-white py-3">
                  <h5 class="text-primary mb-0 fw-semibold">
                    <i class="fas fa-images me-2"></i>
                    Galeri Foto (1 Foto)
                  </h5>
                </div>
                <div class="card-body">
                  <div class="row photo-gallery">
                    <div class="col-md-6 col-lg-4 mb-3">
                      <div class="photo-container">
                        <img src="/assets/img/picture.jpg" alt="Foto 1" class="img-fluid img-thumbnail" style="height: 180px; object-fit: cover; width: 100%" data-bs-toggle="modal" data-bs-target="#photoModal0" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card info-card mb-4 shadow-sm">
                <div class="card-header bg-white py-3">
                  <h6 class="text-primary mb-0 fw-semibold"><i class="fas fa-user-edit me-2"></i> Informasi Penulis</h6>
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="bg-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px">
                      <i class="fas fa-user text-white"></i>
                    </div>
                    <div>
                      <h6 class="mb-0 fw-semibold">Tidak diketahui</h6>
                      <small class="text-muted">Perangkat Desa</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card info-card mb-4 shadow-sm">
                <div class="card-header bg-white py-3">
                  <h6 class="text-primary mb-0 fw-semibold"><i class="fas fa-info-circle me-2"></i> Informasi Artikel</h6>
                </div>
                <div class="card-body">
                  <div class="mb-3 d-flex justify-content-between">
                    <span class="text-muted small">Tanggal Publikasi:</span>
                    <span class="text-muted fw-semibold">Rabu, 01 Oktober 2025</span>
                  </div>
                  <div class="mb-3 d-flex justify-content-between">
                    <span class="text-muted small">Total Foto:</span>
                    <span class="badge rounded-pill bg-secondary">1 Foto</span>
                  </div>
                </div>
              </div>

              <div class="card info-card shadow-sm">
                <div class="card-body">
                  <button onclick="goBack()" class="btn btn-government w-100 text-light py-2 fw-semibold">KEMBALI</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="photoModal0" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">
          <div class="modal-header card-government text-white">
            <h5 class="modal-title"><i class="fas fa-image me-2"></i> Detail Foto</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body p-2 text-center bg-dark">
            <img src="https://via.placeholder.com/800x600" class="img-fluid rounded" style="max-height: 75vh" />
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function confirmLogout() {
        Swal.fire({
          title: "Keluar Sistem?",
          text: "Anda akan diarahkan ke halaman login.",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Ya, Keluar",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "{{ route('login') }}";
          }
        });
      }

      function goBack() {
        if (window.history.length > 1) {
          window.history.back();
        } else {
          window.location.href = "{{ route('kabar.index') }}";
        }
      }
    </script>
  </body>
</html>
