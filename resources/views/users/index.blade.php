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
        <div class="card card-government mb-4 p-3 shadow-sm" style="background: linear-gradient(135deg, #2c3e50, #34495e)">
          <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
            <div>
              <h1 class="h3 mb-0 fw-semibold text-white">Kelola Perangkat</h1>
              <p class="text-white-50 mb-0">Manajemen data perangkat desa</p>
            </div>
            <a href="{{ route('users.create') }}" class="btn btn-light btn-icon-split shadow-sm">
              <span class="icon text-dark">
                <i class="bi bi-plus-circle"></i>
              </span>
              <span class="text">Tambah Perangkat</span>
            </a>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card shadow-sm border-0">
              <div class="card-header bg-gradient-primary py-3 text-white">
                <div class="d-flex justify-content-between align-items-center">
                  <h5 class="mb-0 fw-semibold"><i class="bi bi-people me-2"></i>Daftar Perangkat Desa</h5>
                </div>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table id="userTable" class="table table-striped table-hover table-government align-middle mb-0">
                    <thead class="table-light">
                      <tr>
                        <th width="5%">No</th>
                        <th width="30%">Nama</th>
                        <th width="20%">Email</th>
                        <th width="15%">Role</th>
                        <th width="15%">Dibuat</th>
                        <th width="15%" class="text-center">Aksi</th>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
     document.addEventListener("DOMContentLoaded", () => {
        const users = [
          { id: 1, nama: "Admin Desa", email: "admin@desa.go.id", role: "Admin", tanggal: "20/02/2026" },
          { id: 2, nama: "Test", email: "test@desa.go.id", role: "Perangkat", tanggal: "21/02/2026" },
        ];

        const tbody = document.querySelector("#userTable tbody");

        tbody.innerHTML = users
          .map(
            (u, i) => `
<tr>
<td>${i + 1}</td>
<td>
  <div class="d-flex align-items-center">
    <div class="flex-shrink-0">
      <img src="https://ui-avatars.com/api/?name=${u.nama.replace(" ", "+")}&background=4e73df&color=fff" class="rounded-circle shadow-sm" width="40" height="40">
    </div>
    <div class="ms-3">
      <h6 class="mb-0 fw-semibold text-dark">${u.nama}</h6>
    </div>
  </div>
</td>
<td>${u.email}</td>
<td><span class="badge ${u.role == "Admin" ? "bg-danger" : "bg-primary"}">${u.role}</span></td>
<td>${u.tanggal}</td>
<td class="text-center">
  <div class="btn-group">
    <a href="{{ route('users.edit') }}" class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" title="Edit Perangkat">
      <i class="bi bi-pencil"></i>
    </a>
    <button type="button" class="btn btn-sm btn-outline-danger btn-delete" data-bs-toggle="tooltip" title="Hapus Perangkat">
      <i class="bi bi-trash"></i>
    </button>
  </div>
</td>
</tr>
`,
          )
          .join("");
      });

      document.addEventListener("DOMContentLoaded", function () {
        // 1. Initialize Tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // 2. Delete Confirmation with SweetAlert2 (Enhanced)
        const deleteButtons = document.querySelectorAll(".btn-delete");
        deleteButtons.forEach((btn) => {
          btn.addEventListener("click", function () {
            Swal.fire({
              title: "Hapus Perangkat?",
              text: "Data yang dihapus tidak dapat dikembalikan!",
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: "#d33",
              cancelButtonColor: "#3085d6",
              confirmButtonText: "Ya, Hapus!",
              cancelButtonText: "Batal",
            }).then((result) => {
              if (result.isConfirmed) {
                const row = this.closest("tr");
                row.style.transition = "all 0.5s";
                row.style.opacity = "0";

                setTimeout(() => {
                  row.remove();
                  // Update alert notification
                  const alertBox = document.querySelector(".alert");
                  alertBox.className = "alert alert-danger alert-dismissible fade show";
                  alertBox.innerHTML = '<i class="bi bi-trash me-2"></i> Data perangkat telah dihapus! <button type="button" class="btn-close" data-bs-dismiss="alert"></button>';

                  Swal.fire("Terhapus!", "Data berhasil dihapus.", "success");
                }, 500);
              }
            });
          });
        });
      });

      // Logout function
      function confirmLogout() {
        Swal.fire({
          title: "Keluar Sistem?",
          text: "Anda harus login kembali untuk mengakses data.",
          icon: "question",
          showCancelButton: true,
          confirmButtonColor: "#2c3e50",
          cancelButtonColor: "#d33",
          confirmButtonText: "Ya, Keluar",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "{{ route('login') }}"; // Sesuaikan URL
          }
        });
      }
    </script>
  </body>
</html>
