<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Lades - Sidebar Modern</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="/assets/css/log aktivitas.css" />

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
          <a href="{{ route('users.index') }}" class="nav-link"> <i class="bi bi-people"></i> Kelola Perangkat </a>
        </li>
        <li>
          <a href="{{ route('activityLogs.index') }}" class="nav-link active"> <i class="bi bi-journal-text"></i> Log Aktivitas </a>
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
              <a class="nav-link" href="{{ route('users.index') }}"> <i class="bi bi-people"></i> Kelola Perangkat </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('activityLogs.index') }}"> <i class="bi bi-journal-text"></i> Log Aktivitas </a>
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
        <div class="card card-government p-4 mb-4 shadow-sm">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h1 class="h3 mb-1 text-white fw-semibold">Log Aktivitas</h1>
              <p class="mb-0 text-white-50 small">Lihat riwayat aktivitas pengguna di sistem</p>
            </div>
          </div>
        </div>

        <div class="card shadow border-0">
          <div class="card-header bg-gradient-primary text-white py-3">
            <h6 class="mb-0 fw-semibold"><i class="bi bi-journal-text me-2"></i>Daftar Log Aktivitas</h6>
          </div>

          <div class="card-body px-4 pb-4">
            <div class="table-responsive">
              <table class="table table-hover w-100" id="activityLogsTable">
                <thead>
                  <tr>
                    <th>Tanggal & Waktu</th>
                    <th>Aksi</th>
                    <th>Deskripsi</th>
                    <th>Pengguna</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>

     document.addEventListener("DOMContentLoaded", () => {
        const logs = [
          { id: 1, waktu: "06 Maret 2026 03:51", aksi: "Login", desk: "User berhasil login", user: "Perangkat User" },
          { id: 2, waktu: "06 Maret 2026 07:52", aksi: "Login", desk: "Admin berhasil login", user: "Admin User" },
          { id: 3, waktu: "06 Maret 2026 09:38", aksi: "Tambah Pengumuman", desk: "Menambahkan pengumuman", user: "Perangkat User" },
          { id: 4, waktu: "06 Maret 2026 09:39", aksi: "Update Pengumuman", desk: "Mengubah data", user: "Perangkat User" },
          { id: 5, waktu: "06 Maret 2026 09:41", aksi: "Logout", desk: "User logout", user: "System" },
        ];

        const tbody = document.querySelector("#activityLogsTable tbody");

        tbody.innerHTML = logs
          .map(
            (l) => `
<tr>
<td>${l.waktu}</td>
<td>${l.aksi}</td>
<td>${l.desk}</td>
<td>${l.user}</td>
<td class="text-center">
<a href="{{ route('activityLogs.show') }}" class="btn btn-lihat">Lihat</a>
</td>
</tr>
`,
          )
          .join("");
      });

      $(document).ready(function () {
        $("#activityLogsTable").DataTable({
          language: {
            search: "Cari:",
            lengthMenu: "Show _MENU_ entries",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
            paginate: {
              previous: "Sebelumnya",
              next: "Selanjutnya",
            },
          },

          // bSort: false, // Tambahkan ini jika ingin mematikan fungsi klik sortir sepenuhnya
          order: [[0, "desc"]],
          pageLength: 10,
          dom: '<"d-flex justify-content-between align-items-center mb-3"lf>rt<"d-flex justify-content-between align-items-center mt-3"ip>',
        });
      });
    </script>
  </body>
</html>
