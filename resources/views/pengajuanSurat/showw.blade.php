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
                  <a href="{{ route('pengajuanSurat.edit') }}" class="btn btn-warning btn-sm"> <i class="bi bi-pencil"></i> Edit Status </a>
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
                      <div class="info-value"><span class="badge badge-status">Tertunda</span></div>
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
            <div class="card mb-4 shadow-sm border-0">
              <div class="card-body">
                <h6 class="fw-semibold mb-3">Aksi Cepat</h6>

                <!-- BUTTON MULAI PROSES -->
                <button onclick="mulaiProses()" class="btn btn-info w-100 mb-3 text-dark fw-medium shadow-sm d-flex align-items-center justify-content-center py-2"><i class="bi bi-play-circle me-2"></i> Mulai Proses</button>

                <!-- TEXTAREA -->
                <div class="mb-3">
                  <textarea id="catatanTolak" class="form-control bg-light textarea-custom" rows="3" placeholder="Alasan penolakan..."></textarea>
                </div>

                <!-- BUTTON TOLAK -->
                <button onclick="tolakPengajuan()" class="btn btn-danger w-100 fw-medium shadow-sm d-flex align-items-center justify-content-center py-2"><i class="bi bi-x-circle me-2"></i> Tolak Pengajuan</button>
              </div>
            </div>

            <div class="card shadow-sm border-0">
              <div class="card-body">
                <h6 class="fw-semibold mb-3 d-flex align-items-center">Log Aktivitas</h6>
                <div class="log-container">
                  <div class="log-item p-3 rounded shadow-sm bg-light mb-2">
                    <p class="log-title mb-1 fw-bold" style="font-size: 0.9rem; color: #333">Pengajuan Dibuat</p>
                    <p class="log-time mb-0 text-muted" style="font-size: 0.8rem">25 Maret 2026 00:00</p>
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
      const API_URL = "http://127.0.0.1:8000/api/pengajuan/1"; // GANTI sesuai endpoint kamu

      // =========================
      // MULAI PROSES
      // =========================
      function mulaiProses() {
        Swal.fire({
          title: "Sedang Diproses...",
          text: "Mohon tunggu, pengajuan sedang diproses.",
          allowOutsideClick: false,
          allowEscapeKey: false,
          showConfirmButton: false,
          didOpen: () => {
            Swal.showLoading();
          },
        });

        fetch(API_URL, {
          method: "PATCH",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({
            status: "diproses",
          }),
        })
          .then((res) => res.json())
          .then((result) => {
            Swal.fire({
              icon: "success",
              title: "Berhasil!",
              text: "Pengajuan berhasil diproses.",
              timer: 2000,
              showConfirmButton: false,
            }).then(() => {
              location.reload();
            });
          })
          .catch((err) => {
            Swal.fire({
              icon: "error",
              title: "Gagal!",
              text: "Terjadi kesalahan saat memproses.",
            });
          });
      }

      // =========================
      // TOLAK PENGAJUAN
      // =========================
      function tolakPengajuan() {
        const catatan = document.getElementById("catatanTolak").value.trim();

        if (!catatan) {
          Swal.fire({
            icon: "warning",
            title: "Peringatan!",
            text: "Mohon isi alasan penolakan terlebih dahulu.",
          });
          return;
        }

        Swal.fire({
          title: "Konfirmasi Penolakan",
          text: "Apakah Anda yakin ingin menolak pengajuan ini?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#dc3545",
          cancelButtonColor: "#6c757d",
          confirmButtonText: "Ya, Tolak!",
          cancelButtonText: "Batal",
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire({
              title: "Sedang Diproses...",
              text: "Mohon tunggu...",
              allowOutsideClick: false,
              showConfirmButton: false,
              didOpen: () => {
                Swal.showLoading();
              },
            });

            fetch(API_URL, {
              method: "PATCH",
              headers: {
                "Content-Type": "application/json",
              },
              body: JSON.stringify({
                status: "ditolak",
                catatan: catatan,
              }),
            })
              .then((res) => res.json())
              .then((result) => {
                Swal.fire({
                  icon: "success",
                  title: "Berhasil!",
                  text: "Pengajuan berhasil ditolak.",
                  timer: 2000,
                  showConfirmButton: false,
                }).then(() => {
                  location.reload();
                });
              })
              .catch((err) => {
                Swal.fire({
                  icon: "error",
                  title: "Gagal!",
                  text: "Terjadi kesalahan saat menolak pengajuan.",
                });
              });
          }
        });
      }
    </script>
  </body>
</html>
