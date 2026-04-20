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
      <div class="header-title-box shadow-sm">
        <div>
          <h4 class="mb-0 fw-semibold">Tambah Jenis Surat Baru</h4>
          <p class="mb-0 fw-medium small opacity-85">Buat format surat baru untuk pengajuan warga</p>
        </div>
        <a href="{{ route('template.index') }}" class="btn btn-light btn-sm text-white px-3"> <i class="bi bi-arrow-left me-1"></i> Kembali ke Daftar </a>
      </div>

      <form>
        <div class="card shadow-sm border-0">
          <div class="card-header bg-gradient-primary text-white py-3">
            <h6 class="mb-0 fw-semibold"><i class="bi bi-file-earmark-plus me-2"></i>Informasi Surat</h6>
          </div>
          <div class="card-body p-4">
            <div class="bg-light p-2 px-3 rounded-2 mb-4 d-flex align-items-center">
              <i class="bi bi-info-circle me-2"></i>
              <span class="fw-semibold">Informasi Dasar Surat</span>
            </div>

            <div class="row g-4">
              <div class="col-md-6">
                <label class="form-label fw-semibold">Nama Jenis Surat <span class="text-danger">*</span></label>
                <div class="input-group shadow-sm">
                  <span class="input-group-text bg-white border-end-0"><i class="bi bi-file-earmark-text text-muted"></i></span>
                  <input type="text" class="form-control border-start-0 ps-2" placeholder="Mis: Surat Keterangan Tidak Mampu" required />
                </div>
                <div class="form-text mt-2 small">Nama lengkap dari jenis surat yang akan dibuat</div>
              </div>

              <div class="col-md-6">
                <label class="form-label fw-semibold">Kode Surat <span class="text-danger">*</span></label>
                <div class="input-group shadow-sm">
                  <span class="input-group-text bg-white border-end-0">
                    <i class="bi bi-tag text-muted"></i>
                  </span>
                  <input type="text" class="form-control border-start-0 ps-3" placeholder="Mis: SKTM" />
                </div>
                <div class="form-text mt-2 small">Kode singkat untuk jenis surat (Mis: SKTM, SKU, SKD)</div>
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

        <div class="card">
          <div class="card-header fw-semibold"><i class="bi bi-hash me-2"></i> Format Penomoran</div>
          <div class="card-body">
            <label class="form-label">Format Nomor Surat <span class="text-danger">*</span></label>
            <div class="input-group mb-3">
              <span class="input-group-text">#</span>
              <input type="text" class="form-control" value="{KODE} / {NO_URUT} / 411.501.03 / {TAHUN}" />
            </div>
            <div class="placeholder-box">
              <h6 class="small fw-semibold"><i class="bi bi-lightbulb"></i> Placeholder yang tersedia:</h6>
              <div class="row small g-2">
                <div class="col-md-4"><code>{KODE}</code> - Kode Surat</div>
                <div class="col-md-4"><code>{TAHUN}</code> - Tahun saat ini</div>
                <div class="col-md-4"><code>{BULAN_ROM}</code> - Bulan (romawi)</div>
                <div class="col-md-4"><code>{NO_URUT}</code> - Nomor urut</div>
                <div class="col-md-4"><code>{BULAN}</code> - Bulan (angka)</div>
                <div class="col-md-4"><code>{TANGGAL}</code> - Tanggal</div>
              </div>
            </div>
          </div>
        </div>

        <div class="card border-0 shadow-sm mb-4">
          <div class="card-header bg-white fw-semibold"><i class="bi bi-file-earmark-text me-2"></i> Persyaratan Dokumen</div>
          <div class="card-body">
            <p class="text-muted small mb-3">Tentukan persyaratan atau lampiran yang harus disertakan pemohon saat mengajukan surat ini.</p>

            <div id="persyaratan-list">
              <div class="input-group mb-2">
                <span class="input-group-text bg-light"><i class="bi bi-file-earmark"></i></span>
                <input type="text" class="form-control" placeholder="Contoh: Fotokopi KTP" />
                <button class="btn btn-outline-danger px-3" type="button">
                  <i class="bi bi-trash"></i>
                </button>
              </div>
            </div>
            <button type="button" class="btn btn-success btn-sm mt-2 px-3"><i class="bi bi-plus-circle me-1"></i> Tambah Persyaratan</button>
          </div>
        </div>

        <div class="template-builder">
          <div class="card shadow-sm mb-3">
            <div class="card-header bg-white fw-semibold"><i class="bi bi-layout-text-window-reverse me-2"></i> Struktur Template Surat</div>
            <div class="card-body">
              <p class="text-muted small mb-0">Buat template surat dengan menambahkan paragraf dan field yang dibutuhkan. Struktur ini akan digunakan untuk generate surat otomatis.</p>
            </div>
            <div class="card-header bg-gradient-primary text-white py-2">
              <h6 class="mb-0"><i class="bi bi-tools me-1"></i> Tools Template Builder</h6>
            </div>
            <div class="card-body py-2">
              <div class="d-flex flex-wrap gap-2">
                <button type="button" class="btn btn-primary btn-sm" id="addParagraphBtn"><i class="bi bi-paragraph"></i> Paragraf</button>
                <button type="button" class="btn btn-info btn-sm text-white" id="addStaticFieldBtn"><i class="bi bi-lock"></i> Field Statis</button>
                <button type="button" class="btn btn-success btn-sm" id="addFieldGroupBtn"><i class="bi bi-list-check"></i> Field Group</button>
                <button type="button" class="btn btn-outline-secondary btn-sm ms-auto" id="previewTemplateBtn"><i class="bi bi-eye"></i> Preview</button>
                <button type="button" class="btn btn-outline-danger btn-sm" id="clearTemplateBtn"><i class="bi bi-trash"></i> Reset</button>
              </div>
            </div>
          </div>

          <div class="row g-3">
            <div class="col-md-8">
              <div class="card shadow-sm h-100">
                <div class="card-header bg-light py-2 d-flex justify-content-between align-items-center">
                  <h6 class="mb-0 fw-bold small"><i class="bi bi-file-earmark-text me-1"></i> Struktur Template</h6>
                  <span class="badge bg-primary rounded-pill" id="elementCounter">0 Elemen</span>
                </div>
                <div class="card-body p-3" style="min-height: 400px; max-height: 600px; overflow-y: auto; background-color: #fdfdfd">
                  <div id="templatePreview" class="template-preview">
                    <div id="emptyState" class="alert alert-light text-center py-5 border-0">
                      <i class="bi bi-layout-text-window-reverse d-block mb-3 fs-1 text-muted opacity-50"></i>
                      <p class="text-muted">Tambahkan elemen untuk membangun template surat</p>
                      <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="startAddParagraphBtn"><i class="bi bi-plus-circle me-1"></i> Mulai dengan Paragraf</button>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light py-2 d-flex justify-content-between align-items-center">
                  <small class="text-muted"><i class="bi bi-info-circle me-1"></i> Klik elemen untuk mengedit</small>
                  <span class="badge bg-light text-primary border" id="templateSizeIndicator">0 bytes</span>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card shadow-sm h-100">
                <div class="card-header bg-light py-2">
                  <h6 class="mb-0 fw-bold small"><i class="bi bi-gear me-1"></i> Properti Elemen</h6>
                </div>
                <div class="card-body">
                  <div id="elementProperties" style="display: none">
                    <div class="mb-3">
                      <span class="badge bg-primary mb-2" id="editingElementType">-</span>
                      <h6 class="border-bottom pb-2 fw-bold">Edit Isi</h6>
                    </div>
                    <div id="propertiesForm"></div>
                    <div class="d-grid gap-2 mt-4">
                      <button type="button" class="btn btn-primary shadow-sm" id="savePropertiesBtn"><i class="bi bi-check-circle me-1"></i> Simpan Perubahan</button>
                      <div class="row g-2">
                        <div class="col-6">
                          <button type="button" class="btn btn-outline-secondary btn-sm w-100" id="cancelEditBtn">Batal</button>
                        </div>
                        <div class="col-6">
                          <button type="button" class="btn btn-outline-danger btn-sm w-100" id="deleteElementBtn">Hapus</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="noElementSelected" class="text-center py-5">
                    <i class="bi bi-cursor text-muted opacity-25 fs-1 d-block mb-3"></i>
                    <p class="small text-muted">Pilih elemen pada template<br />untuk mengedit</p>
                  </div>
                </div>
                <div class="card-footer bg-light py-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-sm btn-link text-decoration-none p-0" data-bs-toggle="modal" data-bs-target="#templateHelpModal"><i class="bi bi-question-circle me-1"></i> Bantuan</button>
                    <small id="autoSaveStatus" class="text-success small"> <i class="bi bi-cloud-check"></i> Tersimpan </small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between mb-5 mt-4">
          <button type="button" class="btn btn-outline-danger px-4 fw-semibold"><i class="bi bi-x-circle me-2"></i>Batal</button>
          <button type="submit" class="btn btn-primary px-5 fw-semibold shadow-sm bg-gradient-primary border-0"><i class="bi bi-save me-2"></i>Simpan Jenis Surat</button>
        </div>
      </form>
    </div>

    <div class="modal fade" id="templateHelpModal" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content border-0 shadow">
          <div class="modal-header bg-light">
            <h5 class="modal-title fw-bold">Panduan Template Builder</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body p-4">
            <div class="row g-4">
              <div class="col-md-6">
                <h6 class="fw-bold"><i class="bi bi-paragraph text-primary me-2"></i>Paragraf</h6>
                <p class="small text-muted">Gunakan untuk narasi surat. Anda bisa memasukkan placeholder seperti {nama} agar otomatis terisi data warga.</p>
              </div>
              <div class="col-md-6">
                <h6 class="fw-bold"><i class="bi bi-lock text-info me-2"></i>Field Statis</h6>
                <p class="small text-muted">Gunakan untuk judul besar atau teks label yang tidak akan pernah berubah (mis: DATA ORANG TUA).</p>
              </div>
            </div>
            <div class="alert alert-info mt-3 small mb-0"><strong>Tips:</strong> Semua perubahan disimpan secara otomatis ke dalam memori sistem sementara.</div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      $(document).ready(function () {
        let elementCount = 0;
        let selectedElement = null;

        function addElement(type) {
          elementCount++;
          $("#emptyState").hide();
          let label = "",
            icon = "",
            content = "",
            typeClass = "";

          switch (type) {
            case "paragraph":
              label = "Paragraf";
              icon = "bi-paragraph";
              typeClass = "element-p";
              content = "Isi paragraf baru disini...";
              break;
            case "static":
              label = "Field Statis";
              icon = "bi-lock";
              typeClass = "element-static";
              content = "JUDUL/LABEL STATIS";
              break;
            case "group":
              label = "Field Group";
              icon = "bi-list-check";
              typeClass = "element-group";
              content = "[Data Pemohon(Tabel)]";
              break;
          }

          const html = `
                    <div class="builder-element ${typeClass} new-element shadow-sm" data-id="${elementCount}" data-type="${type}">
                        <span class="badge bg-white text-primary border element-badge shadow-sm">
                            <i class="bi ${icon}"></i> ${label}
                        </span>
                        <div class="element-content">${content}</div>
                    </div>`;

          $("#templatePreview").append(html);
          updateUI();
        }

        function updateUI() {
          const count = $(".builder-element").length;
          $("#elementCounter").text(count + " Elemen");
          $("#templateSizeIndicator").text(count * 124 + " bytes");
          if (count === 0) $("#emptyState").show();
        }

        $("#addParagraphBtn, #startAddParagraphBtn").click(() => addElement("paragraph"));
        $("#addStaticFieldBtn").click(() => addElement("static"));
        $("#addFieldGroupBtn").click(() => addElement("group"));

        $(document).on("click", ".builder-element", function () {
          $(".builder-element").removeClass("active");
          $(this).addClass("active");
          selectedElement = $(this);

          const type = $(this).data("type");
          const currentText = $(this).find(".element-content").text();

          $("#noElementSelected").hide();
          $("#elementProperties").show();
          $("#editingElementType").text(type.toUpperCase());

          let formHtml = `
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Konten Elemen</label>
                        <textarea class="form-control form-control-sm" id="propContent" rows="5">${currentText}</textarea>
                    </div>`;

          if (type === "group") {
            formHtml += `
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Gaya Tabel</label>
                            <select class="form-select form-select-sm">
                                <option>Standar (Dengan Label)</option>
                                <option>Minimalis</option>
                            </select>
                        </div>`;
          }

          $("#propertiesForm").html(formHtml);
        });

        $("#savePropertiesBtn").click(function () {
          if (selectedElement) {
            const newContent = $("#propContent").val();
            selectedElement.find(".element-content").text(newContent);
            $("#autoSaveStatus").html('<i class="bi bi-arrow-repeat"></i> Menyimpan...');
            setTimeout(() => {
              $("#autoSaveStatus").html('<i class="bi bi-cloud-check"></i> Tersimpan');
            }, 600);
          }
        });

        $("#deleteElementBtn").click(function () {
          if (selectedElement && confirm("Hapus elemen ini?")) {
            selectedElement.remove();
            $("#elementProperties").hide();
            $("#noElementSelected").show();
            updateUI();
          }
        });

        $("#clearTemplateBtn").click(function () {
          if (confirm("Hapus semua elemen template?")) {
            $(".builder-element").remove();
            $("#elementProperties").hide();
            $("#noElementSelected").show();
            updateUI();
          }
        });

        $("#cancelEditBtn").click(function () {
          $(".builder-element").removeClass("active");
          $("#elementProperties").hide();
          $("#noElementSelected").show();
        });
      });
    </script>
  </body>
</html>
