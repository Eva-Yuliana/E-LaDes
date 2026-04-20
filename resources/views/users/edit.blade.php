<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Lades - Sidebar Modern</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="/assets/css/kelola perangkat.css" />

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
          <a href="{{ route('profilDesa.index') }}" class="nav-link"> <i class="bi bi-building"></i> Profil Desa </a>
        </li>
        <li>
          <a href="{{ route('users.index') }}" class="nav-link active"> <i class="bi bi-people"></i> Kelola Perangkat </a>
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
              <a class="nav-link" href="{{ route('profilDesa.index') }}"> <i class="bi bi-building"></i> Profil Desa </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('users.index') }}"> <i class="bi bi-people"></i> Kelola Perangkat </a>
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

    <main class="main-content">
      <div class="container-fluid py-4">
        <div class="card card-government p-3 mb-4">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h1 class="h3 mb-0 text-white fw-semibold">Edit Perangkat</h1>
              <p class="mb-0 text-white-50">Perbarui data perangkat: Perangkat User</p>
            </div>
            <a href="{{ route('users.index') }}" class="btn btn-light btn-icon-split">
              <span class="icon text-dark">
                <i class="bi bi-arrow-left"></i>
              </span>
              <span class="text">Kembali</span>
            </a>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8">
            <div class="card shadow mb-4">
              <div class="card-header bg-gradient-primary text-white py-3">
                <h5 class="mb-0 fw-semibold"><i class="bi bi-person-gear me-2"></i>Formulir Edit Perangkat</h5>
              </div>

              <div class="card-body p-4">
                <form id="editForm">
                  <div class="row mb-4">
                    <label for="foto" class="col-md-3 form-label">Foto Profil</label>
                    <div class="col-md-9">
                      <div class="d-flex align-items-center">
                        <div class="me-3 mb-3" id="imagePreview">
                          <div class="image-preview-container">
                            <i class="bi bi-person text-muted" style="font-size: 2.5rem"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <input type="file" class="form-control" id="foto" name="foto" accept="image/*" />
                          <div class="form-text">Format: JPG, PNG, GIF. Maks: 2MB</div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="section-header border-bottom pb-2 mb-3">
                    <h6 class="section-title fw-bold"><i class="bi bi-card-list me-2"></i>Informasi Akun</h6>
                  </div>

                  <div class="row mb-3">
                    <label for="name" class="col-md-3 col-form-label form-label">Nama Lengkap *</label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" id="name" name="name" value="Perangkat User" required />
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="email" class="col-md-3 col-form-label form-label">Email *</label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email" value="perangkat@email.com" required />
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="no_telp" class="col-md-3 col-form-label form-label">No. Telepon</label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-phone"></i></span>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" value="081234567890" />
                      </div>
                      <div class="form-text">Contoh: 081234567890 (Tanpa spasi atau karakter khusus)</div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="role" class="col-md-3 col-form-label form-label">Role *</label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
                        <select class="form-select" id="role" name="role" required>
                          <option value="perangkat" selected>Perangkat</option>
                          <option value="admin">Admin</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="section-header border-bottom pb-2 mb-3 mt-4">
                    <h6 class="section-title fw-bold"><i class="bi bi-key me-2"></i>Keamanan Akun</h6>
                    <p class="text-muted small">Kosongkan kolom password jika tidak ingin mengubahnya</p>
                  </div>

                  <div class="row mb-3">
                    <label for="password" class="col-md-3 col-form-label form-label">Password Baru</label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" />
                        <button class="btn btn-outline-secondary toggle-password" type="button" data-target="password">
                          <i class="bi bi-eye"></i>
                        </button>
                      </div>
                      <div class="form-text mt-2">Kosongkan jika tidak ingin mengubah password</div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="password_confirmation" class="col-md-3 col-form-label form-label">Konfirmasi Password</label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-shield"></i></span>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" />
                        <button class="btn btn-outline-secondary toggle-password" type="button" data-target="password_confirmation">
                          <i class="bi bi-eye"></i>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="section-header border-bottom pb-2 mb-3 mt-4">
                    <h6 class="section-title fw-bold"><i class="bi bi-briefcase me-2"></i>Informasi Jabatan</h6>
                  </div>

                  <div class="row mb-4">
                    <label for="jabatan" class="col-md-3 col-form-label form-label">Jabatan</label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-briefcase"></i></span>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="Sekretaris Desa" />
                      </div>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-9 offset-md-3">
                      <div class="card bg-light border p-3">
                        <div class="d-flex justify-content-between align-items-center">
                          <button type="submit" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white">
                              <i class="bi bi-save"></i>
                            </span>
                            <span class="text">Perbarui Data Perangkat</span>
                          </button>
                          <a href="{{ route('users.index') }}" class="btn btn-secondary fw-600"> <i class="bi bi-arrow-left me-2"></i>Kembali </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card shadow mb-4">
              <div class="card-header bg-gradient-info text-white py-3">
                <h5 class="mb-0 fw-semibold"><i class="bi bi-person-badge me-2"></i>Informasi Perangkat</h5>
              </div>
              <div class="card-body">
                <div class="text-center mb-4">
                  <div class="bg-light rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 120px; height: 120px; border: 4px solid #fff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1)">
                    <i class="bi bi-person text-secondary" style="font-size: 3.5rem"></i>
                  </div>
                  <h5 class="mb-0 fw-bold">Perangkat User</h5>
                  <p class="text-muted">Sekretaris Desa</p>
                </div>

                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex px-0 py-3">
                    <i class="bi bi-envelope text-primary me-3 fs-4"></i>
                    <div>
                      <small class="text-muted d-block">Email</small>
                      <strong class="text-dark">perangkat@email.com</strong>
                    </div>
                  </li>
                  <li class="list-group-item d-flex px-0 py-3">
                    <i class="bi bi-phone text-primary me-3 fs-4"></i>
                    <div>
                      <small class="text-muted d-block">No. Telepon</small>
                      <strong class="text-dark">081234567890</strong>
                    </div>
                  </li>
                  <li class="list-group-item d-flex px-0 py-3">
                    <i class="bi bi-shield-lock text-primary me-3 fs-4"></i>
                    <div>
                      <small class="text-muted d-block">Role</small>
                      <span class="badge bg-primary mt-1">Perangkat</span>
                    </div>
                  </li>
                  <li class="list-group-item d-flex px-0 py-3">
                    <i class="bi bi-calendar3 text-primary me-3 fs-4"></i>
                    <div>
                      <small class="text-muted d-block">Terdaftar sejak</small>
                      <strong class="text-dark">21 Feb 2026</strong>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // 1. Image Preview Logic
        const fotoInput = document.getElementById("foto");
        const previewDiv = document.getElementById("imagePreview");

        fotoInput.onchange = function (event) {
          const file = event.target.files[0];
          if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
              previewDiv.innerHTML = `
                        <div class="image-preview-container">
                            <img src="${e.target.result}" style="object-fit: cover; width: 100%; height: 100%;">
                        </div>
                    `;
            };
            reader.readAsDataURL(file);
          }
        };

        // 2. Toggle Password Visibility Logic
        const toggleButtons = document.querySelectorAll(".toggle-password");

        toggleButtons.forEach((button) => {
          button.addEventListener("click", function () {
            const targetId = this.getAttribute("data-target");
            const passwordInput = document.getElementById(targetId);
            const icon = this.querySelector("i");

            if (passwordInput.type === "password") {
              passwordInput.type = "text";
              icon.classList.replace("bi-eye", "bi-eye-slash");
            } else {
              passwordInput.type = "password";
              icon.classList.replace("bi-eye-slash", "bi-eye");
            }
          });
        });

        // 3. Form Submit Simulation
        document.getElementById("editForm").onsubmit = function (e) {
          e.preventDefault();
          alert("Simulasi: Data perangkat sedang diperbarui...");
        };
      });
    </script>
  </body>
</html>
