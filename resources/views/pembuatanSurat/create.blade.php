<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pembuatan Surat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="/assets/css/pembuatan_surat.css" />

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
          <a href="{{ route('pembuatanSurat.index') }}" class="nav-link active"> <i class="bi bi-file-earmark-plus"></i> Pembuatan Surat </a>
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
              <a class="nav-link" href="{{ route('pengajuanSurat.index') }}">
                <i class="bi bi-envelope-paper"></i>
                Pengajuan Surat
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('pembuatanSurat.index') }}">
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
      <div class="container-fluid py-4">
        <div class="card card-government p-3 mb-4 border-0 shadow-sm">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h1 class="h4 mb-0 text-white fw-semibold">Buat Surat: TEST</h1>
              <p class="mb-0 text-white-50" style="font-size: 0.9rem">Formulir Pembuatan Surat Resmi</p>
            </div>
            <a href="{{ route('pembuatanSurat.index') }}" class="btn btn-light btn-sm shadow-sm d-flex align-items-center px-3"> <i class="bi bi-arrow-left me-2"></i> Kembali </a>
          </div>
        </div>

        <div class="card shadow mb-4 border-0">
          <div class="card-header bg-gradient-primary py-3">
            <h5 class="mb-0 fw-semibold text-white"><i class="bi bi-file-earmark-text me-2"></i>Form Pengisian Data Surat</h5>
          </div>

          <div class="card-body px-4">
            <form id="suratForm" action="#" method="POST">
              <div class="bg-light p-2 px-3 rounded mb-3 d-flex align-items-center">
                <i class="bi bi-person me-2 text-blue-dark"></i>
                <span class="fw-semibold text-blue-dark" style="font-size: 1rem">Informasi Pemohon</span>
              </div>

              <div class="row mb-4">
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold small">NIK <span class="text-danger">*</span></label>
                  <input type="text" class="form-control bg-white" placeholder="Masukkan NIK pemohon" required />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold small">Nama Pemohon <span class="text-danger">*</span></label>
                  <input type="text" class="form-control bg-white" placeholder="Masukkan nama lengkap pemohon" required />
                </div>
              </div>

              <div class="bg-light p-2 px-3 rounded mb-3 d-flex align-items-center">
                <i class="bi bi-card-list me-2 text-blue-dark"></i>
                <span class="fw-semibold text-blue-dark" style="font-size: 1rem">peminta</span>
              </div>

              <div class="row mb-4">
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold small"><i class="bi bi-pencil me-1"></i> Nama <span class="text-danger">*</span></label>
                  <input type="text" class="form-control bg-white" placeholder="Masukkan nama" required />
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold small"><i class="bi bi-pencil me-1"></i> Jenis Kelamin <span class="text-danger">*</span></label>
                  <select class="form-select" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold small"><i class="bi bi-pencil me-1"></i> Tempat, Tanggal Lahir <span class="text-danger">*</span></label>
                  <div class="d-flex gap-2">
                    <input type="text" class="form-control bg-white" placeholder="Masukkan tempat lahir" style="flex: 2" required />
                    <input type="date" class="form-control bg-white" style="flex: 1" required />
                  </div>
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold small"><i class="bi bi-pencil me-1"></i> Alamat <span class="text-danger">*</span></label>
                  <textarea class="form-control bg-white" rows="3" placeholder="Masukkan alamat"></textarea>
                </div>
              </div>

              <div class="d-flex justify-content-between align-items-center mt-5 pt-3 border-top">
                <button type="button" class="btn btn-outline-primary px-4 py-2 fw-semibold shadow-sm"><i class="bi bi-eye me-2"></i> Preview Surat</button>
                <div class="d-flex gap-2">
                  <button type="button" class="btn btn-secondary px-4 py-2 fw-semibold shadow-sm"><i class="bi bi-x-circle me-2"></i> Batal</button>
                  <button type="submit" class="btn btn-primary px-4 py-2 fw-semibold shadow-sm"><i class="bi bi-printer me-2"></i> Cetak Surat</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>

    <script>
      function previewSurat() {
        const form = document.getElementById("suratForm");
        const formData = new FormData(form);

        // Simulasi URL Preview (karena ini statis)
        const params = new URLSearchParams(formData).toString();
        alert("Membuka Preview dengan data:\n" + params);

        // Kode asli Anda:
        // window.open('URL_PREVIEW?' + params, '_blank', 'width=800,height=600,scrollbars=yes,resizable=yes');
      }

      // Handle "Lainnya" select functionality
      document.addEventListener("DOMContentLoaded", function () {
        const selectElements = document.querySelectorAll("select.select-lainnya");

        selectElements.forEach((select) => {
          let lainnyaDiv = select.parentElement.querySelector(".lainnya-input");

          function checkLainnya() {
            const selectedOption = select.options[select.selectedIndex];
            const val = (selectedOption.value || "").toLowerCase().trim();
            const text = (selectedOption.text || "").toLowerCase().trim();

            if (val === "lainnya" || text === "lainnya" || val.includes("lainnya") || text.includes("lainnya")) {
              // Pastikan input dibuat jika belum ada
              const existingInput = lainnyaDiv.querySelector('input[name="' + select.name + '_lainnya"]');
              if (!existingInput) {
                lainnyaDiv.innerHTML = `
                                <input type='text' class='form-control' name='${select.name}_lainnya' 
                                    placeholder='Sebutkan lainnya...' value='' required>
                            `;
              }
              lainnyaDiv.style.display = "block";
            } else {
              lainnyaDiv.innerHTML = "";
              lainnyaDiv.style.display = "none";
            }
          }

          select.addEventListener("change", checkLainnya);
          checkLainnya(); // Cek saat halaman dimuat
        });
      });

      // One-way binding: Nama Pemohon -> Nama / Nama Lengkap
      document.addEventListener("DOMContentLoaded", function () {
        const namaPemohonInput = document.getElementById("nama_pemohon");
        if (namaPemohonInput) {
          namaPemohonInput.addEventListener("input", function () {
            const value = this.value;

            // Daftar target field yang akan diisi otomatis
            const targetNames = ["nama", "nama_lengkap"];

            targetNames.forEach((name) => {
              const targetInput = document.querySelector(`input[name="${name}"]`);
              if (targetInput) {
                targetInput.value = value;
              }

              const targetTextarea = document.querySelector(`textarea[name="${name}"]`);
              if (targetTextarea) {
                targetTextarea.value = value;
              }
            });
          });
        }
      });
    </script>
  </body>
</html>
