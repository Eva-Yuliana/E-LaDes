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
        <div class="user-name">Admin User</div>
        <div class="user-role">Administrator</div>
      </div>

      <div class="nav-section-header"><i class="bi bi-grid-fill me-2"></i>Menu Utama</div>

      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="{{ route('dashboard.admin') }}" class="nav-link"> <i class="bi bi-speedometer2"></i> Dashboard </a>
        </li>

        <div class="nav-section-header mt-3"><i class="bi bi-gear me-2"></i>Administrasi</div>
        <li>
          <a href="{{ route('pengaturan.index') }}" class="nav-link active"> <i class="bi bi-sliders"></i> Pengaturan Sistem </a>
        </li>
        <li>
          <a href="{{ route('template.index') }}" class="nav-link"> <i class="bi bi-file-text"></i> Template Surat </a>
        </li>

        <div class="nav-section-header mt-3"><i class="bi bi-megaphone me-2"></i>Informasi Publik</div>
        <li>
          <a href="{{ route('pengumuman.admin') }}" class="nav-link"> <i class="bi bi-megaphone"></i> Pengumuman </a>
        </li>
        <li>
          <a href="{{ route('kabar.admin') }}" class="nav-link"> <i class="bi bi-newspaper"></i> Kabar Desa </a>
        </li>

        <div class="nav-section-header mt-3"><i class="bi bi-building me-2"></i>Kelola Desa</div>
        <li>
          <a href="{{ route('profilDesa.index') }}" class="nav-link"> <i class="bi bi-building"></i> Profil Desa </a>
        </li>
        <li>
          <a href="{{ route('users.index') }}" class="nav-link"> <i class="bi bi-people"></i> Kelola Perangkat </a>
        </li>
        <li>
          <a href="{{ route('activityLogs.index') }}" class="nav-link"> <i class="bi bi-journal-text"></i> Log Aktivitas </a>
        </li>
        <li>
          <a href="{{ route('profil.admin') }}" class="nav-link"> <i class="bi bi-person-circle"></i> Profil Akun </a>
        </li>
      </ul>

      <hr />
      <button type="button" class="btn-government-logout mt-auto" onclick="confirmLogout()"><i class="bi bi-box-arrow-right me-2"></i> Keluar Sistem</button>
    </div>

    <nav class="navbar navbar-expand-lg mobile-navbar-government d-md-none sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center gap-2" href="#">
          <i class="bi bi-bank text-white fs-5"></i>
          <div>
            <div style="font-size: 1rem; line-height: 1">E-Lades</div>
            <div style="font-size: 0.65rem; opacity: 0.8">Desa Digital</div>
          </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobileNavbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mt-3" id="mobileNavbarNav">
          <div class="mobile-user-info mb-3">
            <div class="user-name">Budi Santoso</div>
            <div class="user-role">Perangkat Desa</div>
          </div>

          <div class="nav-section-header"><i class="bi bi-grid-fill me-2"></i>Menu Utama</div>
           <ul class="navbar-nav mb-2">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard.admin') }}"> <i class="bi bi-speedometer2"></i> Dashboard </a>
            </li>
          </ul>

          <div class="nav-section-header mt-3"><i class="bi bi-gear me-2"></i>Administrasi</div>
          <ul class="navbar-nav mb-2">
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('pengaturan.index') }}"> <i class="bi bi-sliders"></i> Pengaturan Sistem </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('template.index') }}"> <i class="bi bi-file-text"></i> Template Surat </a>
            </li>
          </ul>

          <div class="nav-section-header mt-3"><i class="bi bi-megaphone me-2"></i>Informasi Publik</div>
          <ul class="navbar-nav mb-2">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pengumuman.admin') }}"> <i class="bi bi-megaphone"></i> Pengumuman </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('kabar.admin') }}"> <i class="bi bi-newspaper"></i> Kabar Desa </a>
            </li>
          </ul>

          <div class="nav-section-header mt-3"><i class="bi bi-building me-2"></i>Kelola Desa</div>
          <ul class="navbar-nav mb-3">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('profilDesa.index') }}"> <i class="bi bi-building"></i> Profil Desa </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('users.index') }}"> <i class="bi bi-people"></i> Kelola Perangkat </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('activityLogs.index') }}"> <i class="bi bi-journal-text"></i> Log Aktivitas </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('profil.admin') }}"> <i class="bi bi-person-circle"></i> Profil Akun </a>
            </li>
          </ul>

          <button type="button" class="btn-government-logout mt-2" onclick="confirmLogout('mobile')"><i class="bi bi-box-arrow-right me-2"></i> Keluar Sistem</button>
        </div>
      </div>
    </nav>

    <div class="main-content">
      <div class="container-fluid py-4">
        <div class="card card-government p-4 mb-4">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h1 class="h3 mb-1 text-white fw-semibold">Pengaturan Sistem</h1>
              <p class="mb-0 text-white-50">Konfigurasi pengaturan umum aplikasi e-LaDeS</p>
            </div>
            <div class="text-white fs-2">
              <i class="bi bi-shield-check"></i>
            </div>
          </div>
        </div>

        <div id="alertPlaceholder"></div>

        <form id="mainSettingsForm">
          <div class="row">
            <div class="col-md-3">
              <div class="nav flex-column nav-pills sticky-top pt-2" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="top: 20px; z-index: 100">
                <button class="nav-link active" id="app-settings-tab" data-bs-toggle="pill" data-bs-target="#app-settings" type="button" role="tab"><i class="bi bi-gear-fill me-2"></i>Pengaturan Aplikasi</button>
                <button class="nav-link" id="whatsapp-settings-tab" data-bs-toggle="pill" data-bs-target="#whatsapp-settings" type="button" role="tab"><i class="bi bi-whatsapp me-2"></i>Whatsapp Gateway</button>
                <button class="nav-link" id="landing-settings-tab" data-bs-toggle="pill" data-bs-target="#landing-settings" type="button" role="tab"><i class="bi bi-house-fill me-2"></i>Halaman Utama</button>

                <div class="card bg-white border mt-4 shadow-sm">
                  <div class="card-body p-3">
                    <h6 class="fw-bold"><i class="bi bi-info-circle-fill me-2"></i>Informasi</h6>
                    <p class="small text-muted mb-0">Pengaturan akan berlaku untuk seluruh sistem e-LaDeS.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-9">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="app-settings" role="tabpanel">
                  <div class="card shadow-sm mb-4 border-0" style="border-radius: 8px; overflow: hidden">
                    <div class="card-header text-white py-3" style="background-color: #2a5298">
                      <h5 class="mb-0 fw-semibold"><i class="bi bi-gear me-2"></i>Pengaturan Aplikasi</h5>
                    </div>

                    <div class="card-body p-4">
                      <div class="mb-4">
                        <label class="form-label fw-semibold text-dark" style="font-size: 1rem">Description</label>
                        <input type="text" class="form-control py-2" value="Aplikasi Layanan Desa Digital" style="border-color: #dee2e6; border-radius: 8px" />
                      </div>

                      <div class="mb-2">
                        <label class="form-label fw-semibold text-dark" style="font-size: 1rem">Name</label>
                        <input type="text" class="form-control py-2" value="E-LaDeS" style="border-color: #dee2e6; border-radius: 8px" />
                        <div class="form-text mt-2 text-muted" style="font-size: 0.9rem">Nama aplikasi yang ditampilkan di seluruh sistem</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="landing-settings" role="tabpanel">
                  <div class="card shadow-sm mb-4 border-0" style="border-radius: 8px; overflow: hidden">
                    <div class="card-header text-white py-3" style="background-color: #f39c12">
                      <h5 class="mb-0 fw-semibold"><i class="bi bi-house-door me-2"></i>Pengaturan Halaman Utama</h5>
                    </div>

                    <div class="card-body p-4">
                      <div class="alert border-0 py-3 mb-4" style="background-color: #e1f5fe; color: #01579b; border-radius: 8px">
                        <div class="d-flex">
                          <i class="bi bi-info-circle-fill me-3 fs-5"></i>
                          <div>Pengaturan ini akan memengaruhi tampilan halaman utama (landing page) yang dilihat oleh pengunjung website.</div>
                        </div>
                      </div>

                      <ul class="nav nav-tabs border-bottom-0 mb-4" id="landingTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active fw-bold px-4 py-2" id="statistik-tab" data-bs-toggle="tab" data-bs-target="#statistik" type="button" role="tab" style="border-radius: 8px 8px 0 0">
                            <i class="bi bi-graph-up me-2"></i>Statistik
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link px-4 py-2" id="visi-misi-tab" data-bs-toggle="tab" data-bs-target="#visi-misi" type="button" role="tab"><i class="bi bi-eye me-2"></i>Visi & Misi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link px-4 py-2" id="berita-tab" data-bs-toggle="tab" data-bs-target="#berita" type="button" role="tab"><i class="bi bi-newspaper me-2"></i>Berita</button>
                        </li>
                      </ul>

                      <div class="tab-content pt-2" id="landingTabContent">
                        <div class="tab-pane fade show active" id="statistik" role="tabpanel">
                          <h5 class="fw-semibold mb-3 pb-2 border-bottom" style="color: #2c3e50">Statistik</h5>

                          <div class="mb-2">
                            <label class="form-label fw-bsemiold text-dark" style="font-size: 1.1rem">Tampilkan Statistik</label>
                            <input type="text" class="form-control py-2" value="Ya" style="border-color: #dee2e6; border-radius: 8px" />
                            <div class="form-text mt-2 text-muted" style="font-size: 0.9rem">Aktifkan untuk menampilkan bagian statistik pada halaman utama</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="visi-misi" role="tabpanel">
                  <h5 class="fw-semibold mb-3 pb-2 border-bottom" style="color: #2c3e50">Visi & Misi</h5>

                  <div class="mb-4">
                    <label class="form-label fw-semibold text-dark">Konten Misi</label>
                    <textarea class="form-control" rows="5" style="border-color: #dee2e6; border-radius: 8px">
Mengembangkan sistem pelayanan digital yang mudah diakses
Meningkatkan transparansi dan akuntabilitas pemerintah desa
Memberikan pelayanan berkualitas dan responsif
Memberdayakan masyarakat melalui teknologi informasi</textarea
                    >
                    <div class="form-text mt-2 text-muted">Setiap baris akan menjadi satu poin misi</div>
                  </div>

                  <div class="mb-4">
                    <label class="form-label fw-semibold text-dark">Judul Misi</label>
                    <input type="text" class="form-control py-2" value="MISI" style="border-color: #dee2e6; border-radius: 8px" />
                  </div>

                  <div class="mb-4">
                    <label class="form-label fw-semibold text-dark">Konten Visi</label>
                    <textarea class="form-control" rows="3" style="border-color: #dee2e6; border-radius: 8px">
Mewujudkan desa yang maju, mandiri, dan sejahtera melalui pelayanan publik yang berbasis teknologi digital, transparan, dan berorientasi pada kepuasan masyarakat.</textarea
                    >
                  </div>

                  <div class="mb-2">
                    <label class="form-label fw-semibold text-dark">Judul Visi</label>
                    <input type="text" class="form-control py-2" value="VISI" style="border-color: #dee2e6; border-radius: 8px" />
                  </div>
                </div>

                <div class="tab-pane fade" id="berita" role="tabpanel">
                  <h5 class="fw-semibold mb-3 pb-2 border-bottom" style="color: #2c3e50">Berita & Pengumuman</h5>

                  <div class="mb-4">
                    <label class="form-label fw-semibold text-dark">Tampilkan Berita</label>
                    <input type="text" class="form-control py-2" value="Ya" style="border-color: #dee2e6; border-radius: 8px" />
                  </div>

                  <div class="mb-2">
                    <label class="form-label fw-semibold text-dark">Tampilkan Pengumuman</label>
                    <input type="text" class="form-control py-2" value="Ya" style="border-color: #dee2e6; border-radius: 8px" />
                  </div>
                </div>

                <div class="tab-pane fade" id="whatsapp-settings" role="tabpanel">
                  <div class="card shadow-sm mb-4 border-0" style="border-radius: 8px; overflow: hidden">
                    <div class="card-header text-white py-3" style="background-color: #1e8449">
                      <h5 class="mb-0 fw-semibold"><i class="bi bi-gear me-2"></i>Pengaturan WhatsApp</h5>
                    </div>

                    <div class="card-body p-4">
                      <div class="mb-4">
                        <label class="form-label fw-semibold text-dark" style="font-size: 1rem">Whatsfonnte Api Url</label>
                        <input type="text" class="form-control py-2" value="https://api.fonnte.com" style="border-color: #dee2e6; border-radius: 8px" />
                      </div>

                      <div class="mb-4">
                        <label class="form-label fw-semibold text-dark" style="font-size: 1rem">Whatsfonnte Device</label>
                        <input type="text" class="form-control py-2" placeholder="" style="border-color: #dee2e6; border-radius: 8px" />
                      </div>

                      <div class="mb-2">
                        <label class="form-label fw-semibold text-dark" style="font-size: 1rem">Whatsfonnte Token</label>
                        <input type="text" class="form-control py-2" placeholder="" style="border-color: #dee2e6; border-radius: 8px" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card bg-white border shadow-sm mb-4">
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                    <button type="submit" class="btn btn-primary btn-icon-split shadow-sm">
                      <span class="icon text-white-50">
                        <i class="bi bi-save"></i>
                      </span>
                      <span class="text">Simpan Pengaturan</span>
                    </button>
                    <button type="button" class="btn btn-outline-secondary" onclick="confirmInit()"><i class="bi bi-arrow-repeat me-2"></i>Inisialisasi Pengaturan Default</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Sidebar Logout Confirmation
      function confirmLogout(mode) {
        Swal.fire({
          title: "Keluar Sistem?",
          text: "Anda akan keluar dari sesi administrator.",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#0d6efd",
          cancelButtonColor: "#6c757d",
          confirmButtonText: "Ya, Keluar",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "{{ route('login') }}";
          }
        });
      }

      // Form Submit Handler
      document.getElementById("mainSettingsForm").addEventListener("submit", function (e) {
        e.preventDefault();
        showAlert("Berhasil!", "Seluruh pengaturan sistem telah diperbarui.", "success");
        window.scrollTo({ top: 0, behavior: "smooth" });
      });

      // Default Initialization Handler
      function confirmInit() {
        Swal.fire({
          title: "Inisialisasi Default?",
          text: "Ini akan mengembalikan pengaturan ke konfigurasi awal.",
          icon: "info",
          showCancelButton: true,
          confirmButtonColor: "#0d6efd",
          confirmButtonText: "Proses",
          cancelButtonText: "Batal",
        }).then((result) => {
          if (result.isConfirmed) {
            showAlert("Diproses!", "Pengaturan telah dikembalikan ke default.", "info");
          }
        });
      }

      // Alert Helper
      function showAlert(title, message, type) {
        const placeholder = document.getElementById("alertPlaceholder");
        const icon = type === "success" ? "bi-check-circle-fill" : "bi-info-circle-fill";
        placeholder.innerHTML = `
            <div class="alert alert-${type} alert-dismissible fade show shadow-sm border-0 mb-4" role="alert">
                <i class="bi ${icon} me-2"></i><strong>${title}</strong> ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
      }
    </script>
  </body>
</html>
