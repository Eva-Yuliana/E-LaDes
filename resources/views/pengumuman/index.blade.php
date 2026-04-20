<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Lades - Sidebar Modern</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="/assets/css/pengumuman.css" />

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
          <a href="{{ route('pengumuman.index') }}" class="nav-link active"> <i class="bi bi-megaphone"></i> Pengumuman </a>
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
              <a class="nav-link active" href="{{ route('pengumuman.index') }}">
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
      <div class="container-fluid px-4 py-3">
        <div class="row mb-4">
          <div class="col-12">
            <div class="card card-government">
              <div class="card-body py-4">
                <div class="row align-items-center">
                  <div class="col-md-8">
                    <h2 class="fw-bold mb-2">
                      <i class="bi bi-megaphone me-2"></i>
                      Daftar Pengumuman
                    </h2>
                    <p class="mb-0 opacity-75">Kelola pengumuman pemerintah desa</p>
                  </div>
                  <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="{{ route('pengumuman.create') }}" class="btn btn-light btn-lg shadow-sm">
                      <i class="bi bi-plus me-2"></i>
                      Tambah Pengumuman
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card border-0 shadow-sm">
              <div class="card-header bg-government-light border-0 py-3">
                <div class="d-flex align-items-center">
                  <i class="bi bi-list-ul text-government-primary me-2"></i>
                  <h5 class="fw-bold text-government-primary mb-0">Data Pengumuman</h5>
                </div>
              </div>
              <div class="card-body p-3">
                <div class="table-responsive">
                  <table id="pengumumanTable" class="table-government table-hover table mb-0">
                    <thead>
                      <tr>
                        <th><i class="bi bi-fonts me-2"></i>Judul</th>
                        <th><i class="bi bi-calendar3 me-2"></i>Tanggal Mulai</th>
                        <th><i class="bi bi-calendar-check me-2"></i>Tanggal Selesai</th>
                        <th class="text-center"><i class="bi bi-gear me-2"></i>Aksi</th>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const data = [
          { judul: "Kerja Bakti Desa", desk: "Diharapkan seluruh warga membawa peralatan kebersihan...", mulai: "Senin, 23 Februari 2026", selesai: "Senin, 23 Februari 2026" },
          { judul: "Pembagian BLT Tahap 1", desk: "Penyaluran Bantuan Langsung Tunai bertempat di Balai Desa...", mulai: "Rabu, 25 Februari 2026", selesai: "Kamis, 26 Februari 2026" },
        ];

        const tbody = document.querySelector("#pengumumanTable tbody");

        tbody.innerHTML = data
          .map(
            (d) => `
<tr>
<td>
  <div class="fw-bold text-government-primary">${d.judul}</div>
  <small class="text-muted">${d.desk}</small>
</td>
<td>${d.mulai}</td>
<td>${d.selesai}</td>
<td class="text-center">
  <div class="btn-group" role="group">
    <a href="{{ route('pengumuman.show') }}" class="btn btn-outline-info btn-sm"><i class="bi bi-eye"></i> Detail</a>
    <a href="{{ route('pengumuman.edit') }}" class="btn btn-outline-warning btn-sm"><i class="bi bi-pencil"></i> Edit</a>
    <form action="#" method="POST" class="delete-form" style="display:inline-block">
      <button type="submit" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i> Hapus</button>
    </form>
  </div>
</td>
</tr>
`,
          )
          .join("");

        document.querySelectorAll(".delete-form").forEach((form) => {
          form.addEventListener("submit", function (event) {
            event.preventDefault();
            Swal.fire({
              title: "Yakin hapus pengumuman ini?",
              text: "Data yang dihapus tidak dapat dikembalikan!",
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",
              confirmButtonText: "Ya, hapus!",
              cancelButtonText: "Batal",
            }).then((result) => {
              if (result.isConfirmed) {
                Swal.fire("Terhapus!", "Data berhasil dihapus.", "success");
                // form.submit();
              }
            });
          });
        });
      // Inisialisasi DataTables
      $(document).ready(function () {
        $("#pengumumanTable").DataTable({
          language: {
            url: "//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json",
            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ entri",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
          },
          dom: '<"d-flex justify-content-between align-items-center mb-3"lf>rt<"d-flex justify-content-between align-items-center mt-3"ip>',
          pageLength: 10,
          ordering: true,
        });
      });
      // Fungsi Logout
      function confirmLogout() {
        Swal.fire({
          title: "Keluar Sistem?",
          text: "Sesi Anda akan berakhir.",
          icon: "question",
          showCancelButton: true,
          confirmButtonColor: "#2c3e50",
          cancelButtonColor: "#d33",
          confirmButtonText: "Ya, Keluar",
          cancelButtonText: "Batal",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "{{ route('login') }}";
          }
        });
      }
      });
    </script>
  </body>
</html>
