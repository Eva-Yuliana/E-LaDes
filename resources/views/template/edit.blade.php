<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Lades - Sidebar Modern</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="/assets/css/template surat.css" />

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
          <a href="{{ route('template.index') }}" class="nav-link active"> <i class="bi bi-file-text"></i> Template Surat </a>
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
            <div class="user-name">Admin User</div>
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
              <a class="nav-link active" href="{{ route('template.index') }}"> <i class="bi bi-file-text"></i> Template Surat </a>
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
      <div class="container py-4">
        <div class="header-title-box shadow-sm">
          <div>
            <h4 class="mb-0 fw-semibold">Edit Jenis Surat: TEST</h4>
            <p class="mb-0 fw-medium small opacity-85">Ubah format surat dan pengaturannya</p>
          </div>
          <a href="{{ route('template.index') }}" class="btn btn-light btn-sm text-white px-3"> <i class="bi bi-arrow-left me-1"></i> Kembali ke Daftar </a>
        </div>

        <form>
          <div class="card shadow-sm">
            <div class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center">
              <h6 class="mb-0 fw-bold"><i class="bi bi-pencil-square me-2"></i>Informasi Surat</h6>
              <span class="badge bg-white text-primary fw-semibold" style="border-radius: 12px"> Kode: TST </span>
            </div>
            <div class="card-body p-4">
              <div class="alert alert-info py-2 small mb-4">
                <i class="bi bi-info-circle-fill me-2"></i>
                Informasi: Template terakhir diperbarui pada 30 September 2025 03:35
              </div>

              <h6 class="fw-bold mb-3 small text-muted"><i class="bi bi-info-circle me-1"></i> Informasi Dasar Surat</h6>
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label small fw-bold">Nama Jenis Surat <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text bg-white"><i class="bi bi-file-earmark-text"></i></span>
                    <input type="text" class="form-control" value="TEST" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="form-label small fw-bold">Kode Surat <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text bg-white"><i class="bi bi-tag"></i></span>
                    <input type="text" class="form-control" value="TST" required />
                  </div>
                </div>
                <div class="col-md-12">
                  <label class="form-label fw-semibold">Deskripsi Surat</label>
                  <div class="input-group shadow-sm">
                    <span class="input-group-text bg-white border-end-0 align-items-start pt-2"><i class="bi bi-card-text text-muted"></i></span>
                    <textarea class="form-control border-start-0 ps-2" rows="3" placeholder="Deskripsi singkat tentang surat ini..."></textarea>
                  </div>
                  <div class="form-text mt-2 small">Deskripsi singkat tentang kegunaan atau fungsi surat ini</div>
                </div>
              </div>
            </div>
          </div>

          <div class="card shadow-sm">
            <div class="card-header bg-white fw-bold small"><i class="bi bi-hash me-2"></i>Format Penomoran</div>
            <div class="card-body">
              <label class="form-label small fw-bold">Format Nomor Surat <span class="text-danger">*</span></label>
              <div class="input-group mb-3">
                <span class="input-group-text">#</span>
                <input type="text" class="form-control fw-medium" value="{KODE} / {NO_URUT} / 411.501.03 / {TAHUN}" />
              </div>
              <div class="placeholder-box">
                <h6 class="small fw-semibold"><i class="bi bi-lightbulb"></i> Placeholder yang tersedia:</h6>
                <div class="row small g-2 mt-1">
                  <div class="col-md-4"><span class="text-danger">{KODE}</span> - Kode surat</div>
                  <div class="col-md-4"><span class="text-danger">{TAHUN}</span> - Tahun saat ini</div>
                  <div class="col-md-4"><span class="text-danger">{BULAN_ROM}</span> - Bulan (romawi)</div>
                  <div class="col-md-4"><span class="text-info">{NO_URUT}</span> - Nomor urut</div>
                  <div class="col-md-4"><span class="text-danger">{BULAN}</span> - Bulan (angka)</div>
                  <div class="col-md-4"><span class="text-danger">{TANGGAL}</span> - Tanggal</div>
                </div>
              </div>
            </div>
          </div>

          <div class="card shadow-sm">
            <div class="card-header bg-white fw-bold small"><i class="bi bi-file-earmark-check me-2"></i>Persyaratan Dokumen</div>
            <div class="card-body">
              <p class="text-muted small">Tentukan persyaratan atau lampiran yang harus disertakan pemohon.</p>
              <div id="persyaratan-list" class="mb-3">
                <div class="input-group mb-2 shadow-sm">
                  <span class="input-group-text bg-white"><i class="bi bi-file-earmark"></i></span>
                  <input type="text" class="form-control" value="Fotokopi KTP" />
                  <button class="btn btn-outline-danger" type="button"><i class="bi bi-trash"></i></button>
                </div>
              </div>
              <button type="button" class="btn btn-success btn-sm"><i class="bi bi-plus-circle me-1"></i> Tambah Persyaratan</button>
            </div>
          </div>

          <div class="card shadow-sm">
            <div class="card-header bg-white fw-bold small"><i class="bi bi-layout-text-sidebar-reverse me-2"></i>Struktur Template Surat</div>
            <div class="card-body border-bottom bg-light py-2">
              <div class="d-flex gap-2 align-items-center">
                <span class="small fw-bold text-muted me-2"><i class="bi bi-tools"></i> Tools:</span>
                <button type="button" class="btn btn-primary btn-sm px-3" id="addParagraphBtn"><i class="bi bi-paragraph me-1"></i> Paragraf</button>
                <button type="button" class="btn btn-info btn-sm text-white px-3" id="addStaticFieldBtn"><i class="bi bi-lock me-1"></i> Field Statis</button>
                <button type="button" class="btn btn-success btn-sm px-3" id="addFieldGroupBtn"><i class="bi bi-grid me-1"></i> Field Group</button>
                <div class="ms-auto">
                  <button type="button" class="btn btn-outline-secondary btn-sm"><i class="bi bi-eye"></i> Preview</button>
                  <button type="button" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i> Reset</button>
                </div>
              </div>
            </div>

            <div class="card-body p-3">
              <div class="row g-3">
                <div class="col-md-8">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="small fw-bold mb-0">Struktur Template</h6>
                    <span class="badge bg-primary rounded-pill">5 Elemen</span>
                  </div>
                  <div id="templatePreview" class="border rounded p-3 bg-light" style="min-height: 400px">
                    <div class="builder-element active shadow-sm" data-type="paragraph">
                      <div class="element-controls">
                        <button class="btn btn-light border btn-control"><i class="bi bi-arrow-up"></i></button>
                        <button class="btn btn-light border btn-control"><i class="bi bi-arrow-down"></i></button>
                        <button class="btn btn-light border btn-control text-danger"><i class="bi bi-trash"></i></button>
                      </div>
                      <div class="mb-1">
                        <i class="bi bi-paragraph text-primary me-1"></i>
                        <span class="fw-semibold small">pendahuluan (pendahuluan)</span>
                      </div>
                      <div class="element-content small text-muted">Sepengetahuan Kepala Desa:</div>
                    </div>

                    <div class="builder-element shadow-sm" data-type="group">
                      <div class="element-controls">
                        <button class="btn btn-light border btn-control"><i class="bi bi-arrow-up"></i></button>
                        <button class="btn btn-light border btn-control"><i class="bi bi-arrow-down"></i></button>
                        <button class="btn btn-light border btn-control text-danger"><i class="bi bi-trash"></i></button>
                      </div>
                      <div class="mb-2 d-flex align-items-center">
                        <i class="bi bi-list-task text-success me-1"></i>
                        <span class="fw-semibold small me-2">Field Group: kepala desa</span>
                        <span class="badge bg-secondary badge-status" style="border-radius: 12px">Statis</span>
                      </div>
                      <div class="ps-3 border-start">
                        <div class="small mb-1">Kepala Desa: <span class="badge bg-info text-white" style="border-radius: 12px">Nama_kepala_desa</span></div>
                        <div class="small">NIP: <span class="badge bg-info text-white" style="border-radius: 12px">Nip_kepala_desa</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-2 d-flex justify-content-between small text-muted">
                    <span><i class="bi bi-info-circle me-1"></i> Elemen dapat digeser untuk mengatur urutan</span>
                    <span>1.17 KB</span>
                  </div>
                </div>

                <div class="col-md-4">
                  <h6 class="small fw-bold mb-2">Properti Elemen</h6>
                  <div class="card border h-100 shadow-none">
                    <div id="noElementSelected" class="card-body text-center py-5">
                      <i class="bi bi-cursor text-muted opacity-25 fs-1"></i>
                      <p class="small text-muted mt-2">Pilih elemen pada template untuk mengedit propertinya</p>
                    </div>
                    <div id="elementProperties" class="card-body" style="display: none"></div>
                    <div class="card-footer bg-white border-top-0 d-flex justify-content-between">
                      <button type="button" class="btn btn-link btn-sm text-decoration-none p-0"><i class="bi bi-question-circle"></i> Bantuan</button>
                      <span class="text-success small"><i class="bi bi-cloud-check"></i> Tersimpan</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-between mt-4 mb-5">
            <button type="button" class="btn btn-outline-danger px-4 shadow-sm"><i class="bi bi-x-circle me-2"></i> Batal</button>
            <button type="submit" class="btn btn-warning px-5 shadow-sm"><i class="bi bi-save me-2"></i> Perbarui Jenis Surat</button>
          </div>
        </form>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
      // Logic sederhana untuk simulasi pemilihan elemen
      $(document).on("click", ".builder-element", function () {
        $(".builder-element").removeClass("active");
        $(this).addClass("active");
        $("#noElementSelected").hide();
        $("#elementProperties").show().html(`
            <h6 class="fw-bold small border-bottom pb-2">Edit Konten</h6>
            <div class="mb-3">
                <label class="form-label small">Teks / Label</label>
                <textarea class="form-control form-control-sm" rows="4">${$(this).find(".element-content").text()}</textarea>
            </div>
            <button class="btn btn-primary btn-sm w-100">Simpan Perubahan</button>
        `);
      });
    </script>
  </body>
</html>
