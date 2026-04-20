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
      <div class="container-fluid px-4 py-3">
        <div class="row mb-4">
          <div class="col-12">
            <div class="card card-government shadow-sm">
              <div class="card-body py-4">
                <div class="row align-items-center">
                  <div class="col-md-8">
                    <h2 class="fw-bold mb-2">Edit Kabar Desa</h2>
                    <p class="mb-0 opacity-75">Perbarui informasi kabar desa untuk masyarakat</p>
                  </div>
                  <div class="col-md-4 text-md-end d-none d-md-block text-white"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="card border-0 shadow-sm mb-5">
              <div class="card-header bg-government-light border-0 py-3">
                <div class="d-flex align-items-center">
                  <h5 class="fw-bold mb-0 text-government-primary">Form Edit Kabar Desa</h5>
                </div>
              </div>

              <div class="card-body p-4">
                <div id="error-alert" class="alert alert-danger border-0 shadow-sm d-none">
                  <h6 class="alert-heading"><i class="fas fa-exclamation-triangle me-2"></i> Terdapat kesalahan pada form:</h6>
                  <ul class="mb-0">
                    <li>Judul wajib diisi.</li>
                    <li>Format foto tidak didukung.</li>
                  </ul>
                </div>

                <form action="#" method="POST" enctype="multipart/form-data" id="editForm">
                  <div class="mb-4">
                    <label for="judul" class="form-label"> Judul Kabar Desa </label>
                    <input type="text" name="judul" id="judul" class="form-control" value="TEST" required />
                  </div>

                  <div class="mb-4">
                    <label for="isi" class="form-label"> Isi Kabar Desa </label>
                    <textarea name="isi" id="isi" class="form-control" rows="8" required>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores facere aut enim corrupti itaque aperiam libero, quidem nesciunt nam ratione qui ab ipsam recusandae veniam esse! Sequi id ratione minima.</textarea
                    >
                  </div>

                  <div class="row mb-4">
                    <div class="col-md-6">
                      <label for="tanggal" class="form-label"> Tanggal </label>
                      <input type="date" name="tanggal" id="tanggal" class="form-control" value="2026-02-20" required />
                    </div>
                  </div>

                  <div class="mb-4">
                    <label for="foto" class="form-label"> Upload Foto Baru </label>
                    <input type="file" name="foto[]" id="foto" class="form-control" multiple accept="image/*" />
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto</small>

                    <div class="current-photos mt-4">
                      <h6 class="text-government-primary fw-semibold mb-3">Foto Saat Ini:</h6>
                      <div class="row g-3">
                        <div class="col-auto">
                          <img src="https://images.unsplash.com/photo-1590650153855-d9e808231d41?q=80&w=200&h=200&fit=crop" alt="Foto 1" class="img-thumbnail shadow-sm" style="width: 140px; height: 140px; object-fit: cover" />
                        </div>
                        <div class="col-auto">
                          <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=200&h=200&fit=crop" alt="Foto 2" class="img-thumbnail shadow-sm" style="width: 140px; height: 140px; object-fit: cover" />
                        </div>
                      </div>
                    </div>
                  </div>

                  <hr class="my-4 opacity-50" />

                  <div class="d-flex justify-content-end gap-2">
                    <button type="button" onclick="window.history.back()" class="btn btn-outline-secondary btn-lg px-4">Batal</button>
                    <button type="submit" class="btn btn-primary btn-lg px-4" style="background-color: var(--government-primary)">Update Kabar Desa</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      function confirmLogout() {
        Swal.fire({
          title: "Keluar dari sistem?",
          text: "Anda harus login kembali untuk mengakses data.",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#0d6efd",
          cancelButtonColor: "#6c757d",
          confirmButtonText: "Ya, Keluar!",
          cancelButtonText: "Batal",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "{{ route('login') }}";
          }
        });
      }

      document.getElementById("editForm").addEventListener("submit", function (e) {
        // e.preventDefault(); // Aktifkan jika ingin validasi via JS sebelum submit
        console.log("Form dikirim...");
      });

      document.getElementById("foto").addEventListener("change", function () {
        if (this.files.length > 0) {
          Swal.fire({
            toast: true,
            position: "top-end",
            icon: "info",
            title: this.files.length + " foto baru dipilih",
            showConfirmButton: false,
            timer: 3000,
          });
        }
      });
    </script>
  </body>
</html>
