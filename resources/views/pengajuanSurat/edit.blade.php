<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pengajuan Surat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="/assets/css/pengajuan surat.css" />

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
          <a href="{{ route('pengajuanSurat.index') }}" class="nav-link active"> <i class="bi bi-envelope-paper"></i> Pengajuan Surat </a>
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
              <a class="nav-link active" href="{{ route('pengajuanSurat.index') }}">
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

     <main class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card shadow-sm mb-4">
              <div class="card-header bg-gradient-primary p-3 text-white">
                <h4>Edit Status Pengajuan Surat</h4>
              </div>
              <div class="card-body p-4">
                <div class="row mb-3">
                  <div class="col-md-4 fw-bold">Jenis Surat:</div>
                  <div class="col-md-8">TEST</div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-4 fw-bold">Nama Pemohon:</div>
                  <div class="col-md-8">Test</div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-4 fw-bold">NIK:</div>
                  <div class="col-md-8">1111111111111111</div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-4 fw-bold">Status Saat Ini:</div>
                  <div class="col-md-8">
                    <span class="badge fw-semibold bg-tertunda">Tertunda</span>
                  </div>
                </div>

                <hr />

                <form action="#" method="POST">
                  <div class="row mb-4">
                    <label for="status" class="col-md-4 col-form-label fw-bold">Status Baru:</label>
                    <div class="col-md-8">
                      <select name="status" id="status" class="form-select" required>
                        <option value="">Pilih Status</option>
                        <option value="tertunda" selected>Tertunda</option>
                        <option value="diproses">Diproses</option>
                        <option value="selesai">Selesai</option>
                        <option value="ditolak">Ditolak</option>
                      </select>
                    </div>
                  </div>

                  <div class="row nomor-surat-field mb-4" style="display: none">
                    <label for="nomor_surat" class="col-md-4 col-form-label fw-bold">Nomor Surat:</label>
                    <div class="col-md-8">
                      <input type="text" name="nomor_surat" id="nomor_surat" class="form-control" placeholder="Contoh: 001/SK/2024" />
                      <small class="form-text text-muted">Kosongkan untuk generate otomatis</small>
                    </div>
                  </div>

                  <div class="row tanggal-surat-field mb-4" style="display: none">
                    <label for="tanggal_surat" class="col-md-4 col-form-label fw-bold">Tanggal Surat:</label>
                    <div class="col-md-8">
                      <input type="date" name="tanggal_surat" id="tanggal_surat" class="form-control" value="2024-05-20" />
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-8 offset-md-4">
                      <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Update Status</button>
                      <a href="{{ route('pengajuanSurat.index') }}" class="btn btn-secondary"> <i class="bi bi-arrow-left"></i> Kembali </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-3 shadow-sm">
              <div class="card-header bg-gradient-primary p-3 text-white">
                <h5>Data Pengajuan</h5>
              </div>
              <div class="card-body p-4">
                <div class="data-preview-item">
                  <strong>Nama:</strong><br />
                  <span class="text-muted">Test</span>
                </div>
                <div class="data-preview-item">
                  <strong>Jenis Kelamin:</strong><br />
                  <span class="text-muted">Perempuan</span>
                </div>
                <div class="data-preview-item">
                  <strong>Tempat Tanggal Lahir:</strong><br />
                  <span class="text-muted">Nganjuk, 25-03-2026</span>
                </div>
                <div class="data-preview-item">
                  <strong>Alamat:</strong><br />
                  <span class="text-muted">Nganjuk</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const statusSelect = document.getElementById("status");
        const nomorSuratField = document.querySelector(".nomor-surat-field");
        const tanggalSuratField = document.querySelector(".tanggal-surat-field");

        function toggleFields() {
          const selectedStatus = statusSelect.value;

          // Jika status dipilih 'Selesai', munculkan input nomor dan tanggal surat
          if (selectedStatus === "selesai") {
            nomorSuratField.style.display = "flex"; // Menggunakan flex agar sejajar row Bootstrap
            tanggalSuratField.style.display = "flex";
          } else {
            nomorSuratField.style.display = "none";
            tanggalSuratField.style.display = "none";
          }
        }

        // Jalankan fungsi saat dropdown berubah
        statusSelect.addEventListener("change", toggleFields);

        // Jalankan fungsi saat halaman pertama kali dimuat
        toggleFields();
      });
    </script>
  </body>
</html>
