<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Lades - Sidebar Modern</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="/assets/css/profil.css" />

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
          <a href="{{ route('kabar.index') }}" class="nav-link"> <i class="bi bi-newspaper"></i> Kabar Desa </a>
        </li>

        <div class="nav-section-header mt-3"><i class="bi bi-person-gear me-2"></i>Manajemen</div>
        <li>
          <a href="{{ route('laporan.index') }}" class="nav-link"> <i class="bi bi-graph-up-arrow"></i> Laporan </a>
        </li>
        <li>
          <a href="{{ route('profil.perangkat') }}" class="nav-link active"> <i class="bi bi-person-circle"></i> Profil Akun </a>
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
              <a class="nav-link active" href="{{ route('profil.perangkat') }}">
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
        <div class="card card-government p-3 mb-4">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h1 class="h3 mb-0 text-white">Pengaturan Profil</h1>
              <p class="mb-0 text-white-50">Kelola informasi akun dan keamanan Anda</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8">
            <div class="card shadow mb-4">
              <div class="card-header bg-gradient-primary text-white py-3">
                <h5 class="mb-0 fw-bold"><i class="bi bi-person-gear me-2"></i>Pengaturan Akun</h5>
              </div>
              <div class="card-body">
                <form id="profileForm" enctype="multipart/form-data">
                  <div class="section-header border-bottom pb-2 mb-3">
                    <h6 class="section-title fw-bold"><i class="bi bi-person-badge me-2"></i>Foto Profil</h6>
                  </div>

                  <div class="row mb-4">
                    <div class="col-md-3 text-center">
                      <div class="image-preview" id="imagePreview">
                        <img src="assets/img/image.png" id="profileDisplay" class="rounded-circle img-thumbnail shadow" style="width: 150px; height: 150px; object-fit: cover" alt="Foto Profil" />
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="mb-3">
                        <label for="foto" class="form-label">Ubah Foto Profil</label>
                        <div class="input-group">
                          <span class="input-group-text"><i class="bi bi-image"></i></span>
                          <input type="file" class="form-control" id="foto" name="foto" accept="image/*" />
                        </div>
                        <div class="form-text">Format: JPG, PNG, GIF. Ukuran maksimal: 2MB. Disarankan foto dengan perbandingan 1:1.</div>
                      </div>
                    </div>
                  </div>

                  <div class="section-header border-bottom pb-2 mb-3 mt-4">
                    <h6 class="section-title fw-bold"><i class="bi bi-envelope-at me-2"></i>Informasi Kontak</h6>
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                      <input type="email" class="form-control" id="email" name="email" value="perangkat@email.com" required />
                    </div>
                    <div class="form-text">Email ini akan digunakan untuk notifikasi dan komunikasi dari sistem.</div>
                  </div>

                  <div class="mb-3">
                    <label for="no_telp" class="form-label">Nomor Telepon</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-phone"></i></span>
                      <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukkan nomor telepon aktif Anda" />
                    </div>
                    <div class="form-text">Nomor telepon akan digunakan untuk komunikasi dan notifikasi WhatsApp.</div>
                  </div>

                  <div class="section-header border-bottom pb-2 mb-3 mt-4">
                    <h6 class="section-title fw-bold"><i class="bi bi-key me-2"></i>Keamanan Akun</h6>
                  </div>

                  <div class="mb-3">
                    <label for="password" class="form-label">Password Baru</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-lock"></i></span>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Kosongkan jika tidak ingin mengubah password" />
                      <button class="btn btn-outline-secondary toggle-password" type="button" data-target="password">
                        <i class="bi bi-eye"></i>
                      </button>
                    </div>
                    <div class="form-text">Gunakan kombinasi huruf besar, huruf kecil, angka dan simbol.</div>
                  </div>

                  <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-shield"></i></span>
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" />
                      <button class="btn btn-outline-secondary toggle-password" type="button" data-target="password_confirmation">
                        <i class="bi bi-eye"></i>
                      </button>
                    </div>
                  </div>

                  <div class="card bg-light border p-3 mt-4">
                    <div class="d-flex justify-content-between">
                      <button type="submit" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white"><i class="bi bi-save"></i></span>
                        <span class="text">Simpan Perubahan</span>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card shadow mb-4">
              <div class="card-header bg-gradient-info text-white py-3">
                <h5 class="mb-0 fw-bold"><i class="bi bi-info-circle me-2"></i>Informasi Akun</h5>
              </div>
              <div class="card-body">
                <div class="text-center mb-4">
                  <img src="assets/img/image.png" id="sidebarAvatar" class="rounded-circle img-thumbnail shadow mb-3" style="width: 100px; height: 100px; object-fit: cover" alt="Avatar" />
                  <h5 class="mb-0 fw-bold">Perangkat User</h5>
                  <p class="text-muted small">Sekretaris</p>
                  <span class="badge rounded-pill bg-primary">Perangkat</span>
                </div>

                <div class="list-group list-group-flush small">
                  <div class="list-group-item px-0">
                    <h6 class="mb-1 fw-bold">Email</h6>
                    <p class="mb-0 text-muted">perangkat@email.com</p>
                  </div>
                  <div class="list-group-item px-0">
                    <h6 class="mb-1 fw-bold">No. Telepon</h6>
                    <p class="mb-0 text-muted">Belum diatur</p>
                  </div>
                  <div class="list-group-item px-0">
                    <h6 class="mb-1 fw-bold">Terakhir Login</h6>
                    <p class="mb-0 text-muted">Jumat, 06 Maret 2026 - 09:43</p>
                  </div>
                  <div class="list-group-item px-0">
                    <h6 class="mb-1 fw-bold">Terdaftar Sejak</h6>
                    <p class="mb-0 text-muted">Kamis, 25 September 2025</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card shadow mb-4">
              <div class="card-header bg-gradient-success text-white py-3">
                <h5 class="mb-0 fw-bold"><i class="bi bi-shield-check me-2"></i>Keamanan Akun</h5>
              </div>
              <div class="card-body">
                <div class="alert alert-info border-0 shadow-sm mb-4">
                  <i class="bi bi-lightbulb me-2"></i>
                  <strong>Tips Keamanan:</strong>
                  <p class="mb-0 small">Gunakan password yang kuat dan unik. Jangan bagikan password Anda kepada siapapun.</p>
                </div>
                <div class="mb-0">
                  <h6 class="mb-2 fw-bold"><i class="bi bi-check-circle-fill text-success me-2"></i>Syarat Password Kuat:</h6>
                  <ul class="small text-muted ps-4 mb-0">
                    <li>Minimal 8 karakter</li>
                    <li>Kombinasi huruf besar & kecil</li>
                    <li>Termasuk angka dan simbol</li>
                    <li>Tidak menggunakan informasi pribadi</li>
                  </ul>
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
        // 1. Image Preview
        const fotoInput = document.getElementById("foto");
        const profileDisplay = document.getElementById("profileDisplay");
        const sidebarAvatar = document.getElementById("sidebarAvatar");

        if (fotoInput) {
          fotoInput.addEventListener("change", function (event) {
            const file = event.target.files[0];
            if (file) {
              const reader = new FileReader();
              reader.onload = function (e) {
                profileDisplay.src = e.target.result;
                if (sidebarAvatar) sidebarAvatar.src = e.target.result;
              };
              reader.readAsDataURL(file);
            }
          });
        }

        // 2. Toggle Password
        const toggleButtons = document.querySelectorAll(".toggle-password");
        toggleButtons.forEach((button) => {
          button.addEventListener("click", function () {
            const targetId = this.getAttribute("data-target");
            const input = document.getElementById(targetId);
            const icon = this.querySelector("i");
            if (input.type === "password") {
              input.type = "text";
              icon.classList.replace("bi-eye", "bi-eye-slash");
            } else {
              input.type = "password";
              icon.classList.replace("bi-eye-slash", "bi-eye");
            }
          });
        });

        // 3. Form Submit
        const profileForm = document.getElementById("profileForm");
        profileForm.addEventListener("submit", function (e) {
          e.preventDefault();
          Swal.fire({
            icon: "success",
            title: "Berhasil",
            text: "Perubahan profil Anda telah berhasil disimpan (Simulasi).",
            confirmButtonColor: "#1e3c72",
          });
        });
      });

      function confirmLogout() {
        Swal.fire({
          title: "Keluar Sistem?",
          text: "Anda akan mengakhiri sesi ini.",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#d33",
          confirmButtonText: "Ya, Keluar",
        }).then((result) => {
          if (result.isConfirmed) window.location.href = "{{ route('login') }}";
        });
      }
    </script>
  </body>
</html>
