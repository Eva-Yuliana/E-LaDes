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
        <div class="card bg-gradient-primary p-3 mb-4 shadow border-0">
          <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
            <div>
              <h1 class="h3 mb-0 fw-semibold text-white">Pembuatan Surat</h1>
              <p class="mb-0 text-white-50">Pilih jenis surat yang ingin dibuat</p>
            </div>
            <a href="{{ route('pembuatanSurat.riwayat') }}" class="btn btn-light btn-icon-split shadow-sm">
              <span class="icon text-dark"><i class="bi bi-clock-history"></i></span>
              <span class="text">Riwayat Surat</span>
            </a>
          </div>
        </div>

        <div class="card shadow mb-4 border-0">
          <div class="card-header bg-gradient-primary py-3">
            <h5 class="mb-0 fw-semibold text-white"><i class="bi bi-file-earmark-text me-2"></i>Daftar Template Surat</h5>
          </div>

          <div class="card-body pt-4"></div>
          <div class="row" id="templateContainer"></div>
        </div>
      </div>
    </main>

    <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">
          <div class="modal-header bg-gradient-primary text-white">
            <h5 class="modal-title" id="previewModalLabel"><i class="bi bi-file-earmark-text me-2"></i>Preview Template</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-0">
            <div id="previewContent" class="p-3"></div>
          </div>
          <div class="modal-footer bg-light">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="bi bi-x-circle me-1"></i>Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      const templateSurat = [
        {
          id: 1,
          nama: "Surat Keterangan Domisili",
          deskripsi: "Template surat resmi dengan format standar desa untuk keterangan domisili penduduk.",
        },
        {
          id: 2,
          nama: "Surat Pengantar Nikah",
          deskripsi: "Template surat resmi sebagai syarat pengantar nikah ke Kantor Urusan Agama (KUA).",
        },
        {
          id: 3,
          nama: "Surat Keterangan Tidak Mampu (SKTM)",
          deskripsi: "Template surat keterangan warga kurang mampu.",
        },
        {
          id: 4,
          nama: "Surat Pengantar SKCK",
          deskripsi: "Surat pengantar pembuatan SKCK dari desa.",
        },
        {
          id: 5,
          nama: "Surat Pengajuan Izin",
          deskripsi: "Template surat permohonan izin kegiatan.",
        },
        {
          id: 6,
          nama: "Surat Pembelian Solar",
          deskripsi: "Surat rekomendasi pembelian BBM solar.",
        },
        {
          id: 7,
          nama: "Surat Keterangan Penghasilan",
          deskripsi: "Surat keterangan jumlah penghasilan warga.",
        },
        {
          id: 8,
          nama: "Surat Beda Nama",
          deskripsi: "Surat keterangan perbedaan identitas nama.",
        },
        {
          id: 9,
          nama: "Surat Belum Pernah Menikah",
          deskripsi: "Surat keterangan status belum menikah.",
        },
        {
          id: 10,
          nama: "Surat Kelahiran",
          deskripsi: "Surat keterangan kelahiran warga.",
        },
        {
          id: 11,
          nama: "Surat Kematian",
          deskripsi: "Surat keterangan kematian penduduk.",
        },
        {
          id: 12,
          nama: "Surat Penduduk",
          deskripsi: "Surat keterangan data kependudukan warga.",
        },
      ];

      function renderTemplateSurat() {
        const container = document.getElementById("templateContainer");
        container.innerHTML = "";

        templateSurat.forEach((item) => {
          const card = `
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="government-card h-100 shadow-sm border">
          <div class="card-body d-flex flex-column p-0">
            
            <div class="bg-gradient-primary text-white p-3">
              <div class="d-flex align-items-center">
                <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px">
                  <i class="bi bi-file-earmark-text fs-4"></i>
                </div>
                <h6 class="card-title fw-semibold mb-0">${item.nama}</h6>
              </div>
            </div>

            <div class="p-3">
              <p class="card-text text-muted mb-3">${item.deskripsi}</p>

              <div class="d-grid gap-2">
                <a href="{{ route('pembuatanSurat.create') }}" class="btn btn-primary">
                  <i class="bi bi-plus-circle me-1"></i>Buat Surat
                </a>

                <button class="btn btn-outline-secondary" onclick="previewTemplate(${item.id})">
                  <i class="bi bi-eye me-1"></i>Preview
                </button>
              </div>
            </div>

          </div>
        </div>
      </div>
    `;
          container.innerHTML += card;
        });
      }

      // Jalankan saat halaman load
      document.addEventListener("DOMContentLoaded", renderTemplateSurat);

      function confirmLogout() {
        Swal.fire({
          title: "Keluar?",
          text: "Sesi Anda akan berakhir.",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#1e3c72",
          cancelButtonColor: "#d33",
          confirmButtonText: "Ya, Keluar!",
          cancelButtonText: "Batal",
        }).then((result) => {
          if (result.isConfirmed) {
            // Logika logout di sini
            Swal.fire("Berhasil!", "Anda telah keluar.", "success");
          }
        });
      }

      function previewTemplate(jenisSuratId) {
        const previewContent = document.getElementById("previewContent");
        previewContent.innerHTML = `
                <div class="text-center py-5">
                    <div class="spinner-border text-primary" role="status"></div>
                    <div class="mt-2 text-muted">Memuat template surat ID: ${jenisSuratId}...</div>
                </div>`;

        const modalElement = document.getElementById("previewModal");
        const modal = new bootstrap.Modal(modalElement);
        modal.show();

        setTimeout(() => {
          previewContent.innerHTML = `
                    <div class="alert alert-light border shadow-sm">
                        <p class="text-center fw-bold text-uppercase border-bottom pb-2">Pratinjau Dokumen</p>
                        <div style="min-height: 400px; background: white; padding: 40px; border: 1px solid #ddd; font-family: 'Times New Roman', Times, serif;">
                            <div class="text-center">
                                <h5 class="mb-0">PEMERINTAH KABUPATEN XYZ</h5>
                                <h5 class="mb-0">KECAMATAN ABC</h5>
                                <h4 class="mb-0">KANTOR KEPALA DESA PESUDUKUH</h4>
                                <small>Jl. Raya Desa Pesudukuh No. 123 Kode Pos 644xx</small>
                            </div>
                            <hr style="border: 2px solid black;">
                            <br>
                            <p class="text-center"><u><b>SURAT KETERANGAN</b></u><br>Nomor: 145/.../2026</p>
                            <br>
                            <p>Yang bertanda tangan di bawah ini Kepala Desa Pesudukuh, Kecamatan ABC, Kabupaten XYZ menerangkan bahwa:</p>
                            <table class="ms-4 mb-3">
                                <tr><td width="150">Nama</td><td>: ...................................</td></tr>
                                <tr><td>NIK</td><td>: ...................................</td></tr>
                                <tr><td>Tempat/Tgl Lahir</td><td>: ...................................</td></tr>
                            </table>
                            <p>Adalah benar penduduk yang berdomisili di Desa Pesudukuh...</p>
                            <div class="text-end" style="margin-top: 50px;">
                                <p>Pesudukuh, 24 Februari 2026<br>Kepala Desa Pesudukuh</p>
                                <br><br>
                                <p><b>( Nama Kepala Desa )</b></p>
                            </div>
                        </div>
                    </div>
                    <p class="text-danger small mt-2">* Ini adalah tampilan pratinjau statis.</p>
                `;
        }, 1000);
      }
    </script>
  </body>
</html>
