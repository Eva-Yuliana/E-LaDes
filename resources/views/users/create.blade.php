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
        <div class="card card-government p-3 mb-4 shadow-sm">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h1 class="h3 mb-0 fw-semibold text-white">Tambah Perangkat Baru</h1>
              <p class="mb-0 text-white-50">Tambah data perangkat desa ke dalam sistem</p>
            </div>
            <a href="{{ route('users.index') }}" class="btn btn-light btn-icon-split shadow-sm">
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
                <h5 class="mb-0 fw-semibold"><i class="bi bi-person-plus me-2"></i>Formulir Data Perangkat</h5>
              </div>

              <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                  <div class="section-header border-bottom pb-2 mb-3">
                    <h6 class="section-title fw-bold"><i class="bi bi-card-list me-2"></i>Informasi Akun</h6>
                  </div>

                  <div class="row mb-3">
                    <label for="name" class="col-md-3 col-form-label">Nama Lengkap *</label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required />
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="email" class="col-md-3 col-form-label">Email *</label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan alamat email" required />
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="no_telp" class="col-md-3 col-form-label">No. Telepon</label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-phone"></i></span>
                        <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukkan nomor telepon" />
                      </div>
                      <div class="form-text">Contoh: 081234567890 (Tanpa spasi atau karakter khusus)</div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="role" class="col-md-3 col-form-label">Role *</label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
                        <select class="form-select" id="role" name="role" required>
                          <option value="">Pilih Role</option>
                          <option value="perangkat">Perangkat</option>
                          <option value="admin">Admin</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="section-header border-bottom pb-2 mb-3 mt-4">
                    <h6 class="section-title fw-bold"><i class="bi bi-key me-2"></i>Keamanan Akun</h6>
                  </div>

                  <div class="row mb-3">
                    <label for="password" class="col-md-3 col-form-label">Password *</label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" required />
                        <button class="btn btn-outline-secondary toggle-password" type="button" tabindex="-1">
                          <i class="bi bi-eye"></i>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="password_confirmation" class="col-md-3 col-form-label">Konfirmasi Password *</label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-shield"></i></span>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required />
                        <button class="btn btn-outline-secondary toggle-confirm-password" type="button" tabindex="-1">
                          <i class="bi bi-eye"></i>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="section-header border-bottom pb-2 mb-3 mt-4">
                    <h6 class="section-title fw-bold"><i class="bi bi-briefcase me-2"></i>Informasi Jabatan</h6>
                  </div>

                  <div class="row mb-3">
                    <label for="jabatan" class="col-md-3 col-form-label">Jabatan</label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-briefcase"></i></span>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Misalnya: Kepala Desa, Sekretaris Desa, dll" />
                      </div>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <label for="foto" class="col-md-3 col-form-label">Foto Profil</label>
                    <div class="col-md-9">
                      <div class="d-flex align-items-center">
                        <div class="image-preview me-3 mb-3" id="imagePreview">
                          <div class="bg-light rounded-circle d-flex align-items-center justify-content-center border" style="width: 100px; height: 100px; overflow: hidden">
                            <i class="bi bi-person text-muted" style="font-size: 2rem"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <input type="file" class="form-control" id="foto" name="foto" accept="image/*" />
                          <div class="form-text">Format: JPG, PNG, GIF. Maks: 2MB</div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col-md-9 offset-md-3">
                      <div class="card bg-light border p-3">
                        <div class="d-flex justify-content-between align-items-center">
                          <button type="submit" class="btn btn-primary btn-icon-split shadow-sm">
                            <span class="icon text-white">
                              <i class="bi bi-save"></i>
                            </span>
                            <span class="text">Simpan Data Perangkat</span>
                          </button>
                          <a href="{{ route('users.index') }}" class="btn btn-secondary"> <i class="bi bi-arrow-left me-2"></i>Kembali </a>
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
              <div class="card-header bg-gradient-success text-white py-3">
                <h5 class="mb-0 fw-semibold"><i class="bi bi-info-circle me-2"></i>Petunjuk</h5>
              </div>
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex border-0 px-0">
                    <i class="bi bi-check-circle text-success me-2 fs-5"></i>
                    <div>
                      <strong>Nama Lengkap</strong>
                      <p class="small text-muted mb-0">Isi dengan nama lengkap perangkat desa</p>
                    </div>
                  </li>
                  <li class="list-group-item d-flex border-0 px-0">
                    <i class="bi bi-check-circle text-success me-2 fs-5"></i>
                    <div>
                      <strong>Email</strong>
                      <p class="small text-muted mb-0">Gunakan email aktif untuk notifikasi</p>
                    </div>
                  </li>
                  <li class="list-group-item d-flex border-0 px-0">
                    <i class="bi bi-check-circle text-success me-2 fs-5"></i>
                    <div>
                      <strong>No. Telepon</strong>
                      <p class="small text-muted mb-0">Nomor telepon aktif untuk komunikasi</p>
                    </div>
                  </li>
                  <li class="list-group-item d-flex border-0 px-0">
                    <i class="bi bi-check-circle text-success me-2 fs-5"></i>
                    <div>
                      <strong>Role</strong>
                      <p class="small text-muted mb-0">Admin: Akses penuh ke sistem<br />Perangkat: Akses terbatas</p>
                    </div>
                  </li>
                  <li class="list-group-item d-flex border-0 px-0">
                    <i class="bi bi-check-circle text-success me-2 fs-5"></i>
                    <div>
                      <strong>Foto Profil</strong>
                      <p class="small text-muted mb-0">Unggah foto dengan ukuran 1:1 (disarankan)</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Toggle Password Visibility
        const setupPasswordToggle = (buttonClass, inputId) => {
          const btn = document.querySelector(buttonClass);
          if (btn) {
            btn.addEventListener("click", function () {
              const input = document.getElementById(inputId);
              const icon = this.querySelector("i");
              if (input.type === "password") {
                input.type = "text";
                icon.classList.replace("bi-eye", "bi-eye-slash");
              } else {
                input.type = "password";
                icon.classList.replace("bi-eye-slash", "bi-eye");
              }
            });
          }
        };

        setupPasswordToggle(".toggle-password", "password");
        setupPasswordToggle(".toggle-confirm-password", "password_confirmation");

        // Image Preview logic
        const fotoInput = document.getElementById("foto");
        if (fotoInput) {
          fotoInput.onchange = function (event) {
            const preview = document.getElementById("imagePreview");
            if (this.files && this.files[0]) {
              const reader = new FileReader();
              reader.onload = function (e) {
                preview.innerHTML = `
                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center border" style="width: 100px; height: 100px; overflow: hidden;">
                                    <img src="${e.target.result}" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;">
                                </div>
                            `;
              };
              reader.readAsDataURL(this.files[0]);
            }
          };
        }
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
