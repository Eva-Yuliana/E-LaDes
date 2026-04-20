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
          <div class="col-lg-8">
            <div class="card mb-4">
              <div class="card-header-blue d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-semibold">Detail Pengajuan Surat</h5>
                <div>
                  <button onclick="history.back()" class="btn btn-secondary btn-sm"><i class="bi bi-arrow-left"></i> Kembali</button>
                </div>
              </div>
              <div class="card-body">
                <div class="row g-3 mb-4">
                  <div class="col-md-6">
                    <div class="info-box">
                      <div class="info-label"><i class="bi bi-file-earmark-text"></i> Jenis Surat</div>
                      <div class="info-value">TEST</div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box">
                      <div class="info-label"><i class="bi bi-person"></i> Nama Pemohon</div>
                      <div class="info-value">Test</div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box">
                      <div class="info-label"><i class="bi bi-card-heading"></i> NIK</div>
                      <div class="info-value">1111111111111111</div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box">
                      <div class="info-label"><i class="bi bi-check-circle"></i> Status</div>
                      <div class="info-value"><span class="badge badge-proses">Diproses</span></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box phone-box">
                      <div class="info-label"><i class="bi bi-telephone"></i> Nomor Telepon</div>
                      <div class="info-value mb-2">081357743268</div>
                      <div class="d-flex gap-2">
                        <button class="btn btn-sm px-3" style="background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%); color: white; border: none"><i class="bi bi-telephone-fill"></i> Telepon</button>

                        <button class="btn btn-sm px-3" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: white; border: none"><i class="bi bi-whatsapp"></i> WhatsApp</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box">
                      <div class="info-label"><i class="bi bi-calendar"></i> Tanggal Pengajuan</div>
                      <div class="info-value">Senin, 09 Februari 2026</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-4 fw-bold">Nomor Surat:</div>
                <div class="col-md-8">10</div>
              </div>

              <div class="row mb-3">
                <div class="col-md-4 fw-bold">Diproses Oleh:</div>
                <div class="col-md-8">Nama Petugas</div>
              </div>

              <div class="row mb-3">
                <div class="col-md-4 fw-bold">Terakhir Update:</div>
                <div class="col-md-8">09/02/2026 14:30</div>
              </div>
              <h6 class="fw-bold mb-3 ms-3">Dokumen Terkait:</h6>

              <div class="alert alert-info border-0 shadow-sm d-flex align-items-center py-3 mb-4 ms-3" style="background-color: #e0f7fa; border-radius: 8px; color: #00838f; max-width: 570px">
                <i class="bi bi-info-circle me-3 fs-5"></i>
                <div style="font-size: 0.95rem">Tidak ada dokumen yang dilampirkan pada pengajuan ini.</div>
              </div>

              <h6 class="fw-bold mb-3 ms-3">Template Surat:</h6>

              <div class="p-4 border-0 shadow-sm rounded bg-white ms-3" style="max-width: 700px">
                <h6 class="fw-bold mb-3 border-bottom pb-2">Template Surat:</h6>

                <div class="p-3 rounded bg-light">
                  <label class="form-label-custom">Pendahuluan:</label>
                  <input type="text" class="form-control-custom" value="Sepengetahuan Kepala Desa:" readonly />

                  <div class="row">
                    <div class="col-md-6">
                      <label class="form-label-custom">kepala desa:</label>
                      <div class="mb-3">
                        <label class="small text-muted d-block">Kepala Desa</label>
                        <input type="text" class="form-control-custom" value="Test" readonly />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label class="form-label-custom">&nbsp;</label>
                      <div class="mb-3">
                        <label class="small text-muted d-block">NIP</label>
                        <input type="text" class="form-control-custom" value="197512151998031002" readonly />
                      </div>
                    </div>
                  </div>

                  <label class="form-label-custom">masyarakat:</label>
                  <input type="text" class="form-control-custom" value="Dibawah ini Masyarakat dengan:" readonly />

                  <div class="row">
                    <div class="col-md-6">
                      <label class="form-label-custom">peminta:</label>
                      <label class="small text-muted d-block">Nama</label>
                      <input type="text" class="form-control-custom" value="Test" readonly />
                    </div>
                    <div class="col-md-6">
                      <label class="form-label-custom">&nbsp;</label>
                      <label class="small text-muted d-block">Jenis Kelamin</label>
                      <input type="text" class="form-control-custom" value="Laki-laki" readonly />
                    </div>
                    <div class="col-md-6">
                      <label class="small text-muted d-block">Tempat, Tanggal Lahir</label>
                      <input type="text" class="form-control-custom" value="Nganjuk, 15-08-2003" readonly />
                    </div>
                    <div class="col-md-6">
                      <label class="small text-muted d-block">Alamat</label>
                      <input type="text" class="form-control-custom" value="Nganjuk" readonly />
                    </div>
                  </div>

                  <label class="form-label-custom">penutup:</label>
                  <input type="text" class="form-control-custom" value="Adalah Masyarakat Pesudukuh" readonly />

                  <button class="btn btn-primary w-30 fw-semibold mt-2 shadow-sm" style="background: #007bff; border: none; height: 40px"><i class="bi bi-save me-2"></i>Simpan Perubahan</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-body">
                <h6 class="fw-bold section-title-line">Aksi Cepat</h6>

                <button class="btn btn-download"><i class="bi bi-download"></i> Download Surat</button>
                <button class="btn btn-print"><i class="bi bi-printer"></i> Cetak Surat</button>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <h6 class="fw-bold section-title-line">Log Aktivitas</h6>

                <div class="log-container">
                  <div class="log-item">
                    <p class="log-title">Pengajuan Dibuat</p>
                    <p class="log-time">09 Februari 2026 14:13</p>
                  </div>
                  <div class="log-item status-change">
                    <p class="log-title">Status Diubah</p>
                    <p class="log-time">12 Februari 2026 03:45</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function confirmLogout() {
        Swal.fire({
          title: "Yakin ingin keluar?",
          text: "Anda harus login kembali untuk mengakses sistem.",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#1e3c72",
          cancelButtonColor: "#d33",
          confirmButtonText: "Ya, Keluar",
          cancelButtonText: "Batal",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "{{ route('login') }}";
          }
        });
      }
    </script>
  </body>
</html>
