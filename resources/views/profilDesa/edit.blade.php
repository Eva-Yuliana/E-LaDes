<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Lades - Sidebar Modern</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="/assets/css/profil desa.css" />

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
          <a href="{{ route('pengaturan.index') }}" class="nav-link"> <i class="bi bi-sliders"></i> Pengaturan Sistem </a>
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
          <a href="{{ route('profilDesa.index') }}" class="nav-link active"> <i class="bi bi-building"></i> Profil Desa </a>
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
              <a class="nav-link" href="{{ route('pengaturan.index') }}"> <i class="bi bi-sliders"></i> Pengaturan Sistem </a>
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
              <a class="nav-link active" href="{{ route('profilDesa.index') }}"> <i class="bi bi-building"></i> Profil Desa </a>
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
        <div class="card card-government p-3 mb-4 shadow">
          <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
            <div>
              <h1 class="h3 mb-0 text-white fw-semibold">Edit Profil Desa</h1>
              <p class="mb-0 text-white-50">Perbarui informasi detail tentang desa</p>
            </div>
            <a href="{{ route('profilDesa.index') }}" class="btn btn-light btn-icon-split shadow-sm">
              <span class="icon text-dark">
                <i class="bi bi-arrow-left"></i>
              </span>
              <span class="text">Kembali</span>
            </a>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-11">
            <div class="card shadow border-0">
              <div class="card-header card-government text-white py-3">
                <h5 class="mb-0 fw-semibold"><i class="bi bi-pencil-square me-2"></i>Form Edit Data Desa</h5>
              </div>

              <div class="card-body p-4">
                <div class="alert alert-danger alert-dismissible fade show d-none" id="errorAlert">
                  <i class="bi bi-exclamation-triangle me-2"></i>
                  <strong>Terdapat kesalahan pada form:</strong>
                  <ul class="mb-0 mt-2" id="errorList"></ul>
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>

                <form id="editProfilForm" action="#" method="POST">
                  <div class="row">
                    <div class="col-md-6 border-end-md">
                      <div class="section-header">
                        <h6 class="section-title"><i class="bi bi-geo-alt me-2"></i>Lokasi Desa</h6>
                      </div>

                      <div class="mb-3">
                        <label for="nama_desa" class="form-label required-field"> <i class="bi bi-house me-1"></i>Nama Desa </label>
                        <input type="text" class="form-control shadow-sm" id="nama_desa" name="nama_desa" value="Pesudukuh" required />
                      </div>

                      <div class="mb-3">
                        <label for="nama_kecamatan" class="form-label required-field"> <i class="bi bi-pin-map me-1"></i>Nama Kecamatan </label>
                        <input type="text" class="form-control shadow-sm" id="nama_kecamatan" name="nama_kecamatan" value="Bagor" required />
                      </div>

                      <div class="mb-3">
                        <label for="nama_kabupaten" class="form-label required-field"> <i class="bi bi-pin-map-fill me-1"></i>Nama Kabupaten </label>
                        <input type="text" class="form-control shadow-sm" id="nama_kabupaten" name="nama_kabupaten" value="Nganjuk" required />
                      </div>

                      <div class="mb-3">
                        <label for="nama_provinsi" class="form-label required-field"> <i class="bi bi-globe2 me-1"></i>Nama Provinsi </label>
                        <input type="text" class="form-control shadow-sm" id="nama_provinsi" name="nama_provinsi" value="Jawa Timur" required />
                      </div>
                    </div>

                    <div class="col-md-6 ps-md-4">
                      <div class="section-header">
                        <h6 class="section-title"><i class="bi bi-person-badge me-2"></i>Informasi Desa</h6>
                      </div>

                      <div class="mb-3">
                        <label for="alamat_desa" class="form-label required-field"> <i class="bi bi-geo me-1"></i>Alamat Desa </label>
                        <textarea class="form-control shadow-sm" id="alamat_desa" name="alamat_desa" rows="3" required>Jl. Raya Bagor No. 123, Bagor, Nganjuk 64392</textarea>
                      </div>

                      <div class="mb-3">
                        <label for="nama_kepala_desa" class="form-label required-field"> <i class="bi bi-person me-1"></i>Nama Kepala Desa </label>
                        <input type="text" class="form-control shadow-sm" id="nama_kepala_desa" name="nama_kepala_desa" value="Nama Kepala Desa" required />
                      </div>

                      <div class="mb-3">
                        <label for="nip_kepala_desa" class="form-label required-field"> <i class="bi bi-card-text me-1"></i>NIP Kepala Desa </label>
                        <input type="text" class="form-control shadow-sm" id="nip_kepala_desa" name="nip_kepala_desa" value="197512151998031002" required />
                      </div>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-12">
                      <hr class="my-4" />
                      <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                        <a href="{{ route('profilDesa.index') }}" class="btn btn-outline-secondary px-4 shadow-sm"> <i class="bi bi-arrow-left me-2"></i>Batal </a>
                        <button type="submit" class="btn btn-primary btn-lg px-5 shadow-sm"><i class="bi bi-check-circle me-2"></i>Perbarui Profil Desa</button>
                      </div>
                    </div>
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

      // Validasi & Penanganan Submit
      document.getElementById("editProfilForm").addEventListener("submit", function (e) {
        e.preventDefault();

        const namaDesa = document.getElementById("nama_desa").value;
        const errorAlert = document.getElementById("errorAlert");
        const errorList = document.getElementById("errorList");

        // Contoh Validasi Sederhana
        if (namaDesa.length < 3) {
          errorAlert.classList.remove("d-none");
          errorList.innerHTML = "<li>Nama desa harus memiliki minimal 3 karakter.</li>";
          window.scrollTo({ top: 0, behavior: "smooth" });
        } else {
          errorAlert.classList.add("d-none");

          Swal.fire({
            title: "Berhasil!",
            text: "Profil Desa " + namaDesa + " telah diperbarui secara lokal.",
            icon: "success",
            confirmButtonColor: "#0d6efd",
          }).then(() => {
            // Redirect kembali ke halaman detail profil
            window.location.href = "{{ route('profilDesa.index') }}";
          });
        }
      });
    </script>
  </body>
</html>
