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
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-md-12">
            <div class="card-government fade-in-up mb-4 p-4">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <h2 class="mb-2" style="font-weight: 700"><i class="bi bi-file-earmark-text me-3"></i>Kelola Pengajuan Surat</h2>
                  <p class="mb-0 opacity-75">Kelola dan pantau semua pengajuan surat dari warga</p>
                </div>
              </div>
            </div>

            <div class="card filter-card fade-in-up mb-4">
              <div class="card-body">
                <div class="d-flex align-items-center mb-4">
                  <i class="bi bi-table text-primary me-2"></i>
                  <h6 class="text-muted mb-0">Data Pengajuan Surat</h6>
                </div>

                <div class="row mb-4">
                  <div class="col-md-3 mb-3">
                    <div class="card stats-card text-white" style="background: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%)">
                      <div class="card-body text-center">
                        <i class="bi bi-clock mb-3 d-block" style="font-size: 2rem"></i>
                        <h5 id="stat-tertunda">1</h5>
                        <p>Tertunda</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <div class="card stats-card text-white" style="background: linear-gradient(135deg, #0dcaf0 0%, #0d6efd 100%); transition-delay: 0.1s">
                      <div class="card-body text-center">
                        <i class="bi bi-gear-fill mb-3 d-block" style="font-size: 2rem"></i>
                        <h5 id="stat-diproses">1</h5>
                        <p>Diproses</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <div class="card stats-card text-white" style="background: linear-gradient(135deg, #198754 0%, #20c997 100%); transition-delay: 0.2s">
                      <div class="card-body text-center">
                        <i class="bi bi-check-circle-fill mb-3 d-block" style="font-size: 2rem"></i>
                        <h5 id="stat-selesai">7</h5>
                        <p>Selesai</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <div class="card stats-card text-white" style="background: linear-gradient(135deg, #dc3545 0%, #e91e63 100%); transition-delay: 0.3s">
                      <div class="card-body text-center">
                        <i class="bi bi-x-circle-fill mb-3 d-block" style="font-size: 2rem"></i>
                        <h5 id="stat-ditolak">2</h5>
                        <p>Ditolak</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="table-responsive px-2">
                  <table id="pengajuanTable" class="table-modern table w-100">
                    <thead>
                      <tr>
                        <th><i class="bi bi-calendar3 me-2"></i>Tanggal</th>
                        <th><i class="bi bi-file-earmark-text me-2"></i>Jenis Surat</th>
                        <th><i class="bi bi-person me-2"></i>Nama Pemohon</th>
                        <th><i class="bi bi-credit-card me-2"></i>NIK</th>
                        <th><i class="bi bi-flag me-2"></i>Status</th>
                        <th class="no-sort"><i class="bi bi-gear me-2"></i>Aksi</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Mock Data untuk menggantikan API Laravel
        const mockData = [
          { id: 1, created_at: "2024-03-20T10:00:00", jenis_surat_nama: "Surat Keterangan Penduduk", nama_pemohon: "Test", nik: "1111111111111111", status: "tertunda" },
          { id: 2, created_at: "2024-03-19T14:30:00", jenis_surat_nama: "Surat Pengantar SKCK", nama_pemohon: "Test", nik: "1111111111111111", status: "diproses" },
          { id: 3, created_at: "2024-03-18T09:15:00", jenis_surat_nama: "Surat Keterangan Usaha", nama_pemohon: "Test", nik: "1111111111111111", status: "selesai" },
        ];

        // Initialize DataTable
        $("#pengajuanTable").DataTable({
          data: mockData,
          columns: [
            {
              data: "created_at",
              render: function (data) {
                const date = new Date(data);
                return `<div class="d-flex flex-column">
                                    <span class="fw-semibold">${date.toLocaleDateString("id-ID", { day: "2-digit", month: "long", year: "numeric" })}</span>
                                    <small class="text-muted">${date.toLocaleTimeString("id-ID", { hour: "2-digit", minute: "2-digit" })}</small>
                                </div>`;
              },
            },
            {
              data: "jenis_surat_nama",
              render: (data) => `<span class="fw-semibold text-primary">${data}</span>`,
            },
            {
              data: "nama_pemohon",
              render: (data) => `<span class="fw-semibold">${data}</span>`,
            },
            {
              data: "nik",
              render: (data) => `<code class="bg-light rounded px-2 py-1">${data}</code>`,
            },
            {
              data: "status",
              render: function (data) {
                let config = {
                  tertunda: { icon: "bi-clock", color: "warning" },
                  diproses: { icon: "bi-gear", color: "info" },
                  selesai: { icon: "bi-check-circle", color: "success" },
                  ditolak: { icon: "bi-x-circle", color: "danger" },
                };
                let res = config[data] || { icon: "bi-question", color: "secondary" };
                return `<span class="badge bg-${res.color} px-3 py-2">
                                    <i class="bi ${res.icon} me-1"></i>${data.toUpperCase()}
                                </span>`;
              },
            },
            {
              data: null,
              render: function (data, type, row) {
                let actions = `
      <div class="d-flex gap-1">
        <a href="{{ route('pengajuanSurat.show') }}" 
           class="btn btn-sm btn-outline-info btn-action" 
           title="Lihat Detail">
          <i class="bi bi-eye"></i>
        </a>

        <a href="{{ route('pengajuanSurat.edit') }}" 
           class="btn btn-sm btn-outline-warning btn-action" 
           title="Edit Status">
          <i class="bi bi-pencil"></i>
        </a>
    `;

                if (row.status === "tertunda") {
                  actions += `
        <button class="btn btn-sm btn-outline-danger btn-action delete-btn" 
                data-id="${row.id}" 
                title="Hapus">
          <i class="bi bi-trash"></i>
        </button>
      `;
                }

                actions += `</div>`;
                return actions;
              },
            },
          ],
          language: {
            url: "//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json",
            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ entri",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
            paginate: {
              previous: "Sebelumnya",
              next: "Selanjutnya",
            },
          },

          dom: '<"d-flex justify-content-between align-items-center mb-3"lf>rt<"d-flex justify-content-between align-items-center mt-3"ip>',
          pageLength: 10,
          ordering: true,
        });

        // Delete Handle
        $(document).on("click", ".delete-btn", function () {
          Swal.fire({
            title: "Apakah Anda yakin?",
            text: "Data akan dihapus permanen!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus!",
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire("Terhapus!", "Data berhasil dihapus.", "success");
            }
          });
        });
      });
    </script>
  </body>
</html>
