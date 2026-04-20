<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Lades - Sidebar Modern</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="/assets/css/kabar.css" />

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
          <a href="{{ route('kabar.index') }}" class="nav-link active"> <i class="bi bi-newspaper"></i> Kabar Desa </a>
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
              <a class="nav-link" href="{{ route('pengumuman.index') }}">
                <i class="bi bi-megaphone"></i>
                Pengumuman
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('kabar.index') }}">
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
                      <i class="fas fa-newspaper me-2"></i>
                      Kabar Desa
                    </h2>
                    <p class="mb-0 opacity-75">Berita dan informasi terkini dari desa</p>
                  </div>
                  <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="{{ route('kabar.create') }}" class="btn btn-light btn-lg">
                      <i class="fas fa-plus me-2"></i>
                      Tambah Kabar Desa
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="kabarContainer">
          <!-- Card akan dimuat dari JavaScript -->
        </div>
      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    // Data dummy kabar desa (bisa dari database nanti)
      const kabarData = [
        {
          judul: "Kegiatan Gotong Royong",
          tanggal: "20 Februari 2026",
          deskripsi: "Warga desa melakukan kegiatan gotong royong membersihkan lingkungan.",
          gambar: "assets/img/picture.jpg",
        },
        {
          judul: "Pembangunan Jalan Desa",
          tanggal: "18 Februari 2026",
          deskripsi: "Proyek pembangunan jalan desa telah mencapai 70%.",
          gambar: "assets/img/picture.jpg",
        },
        {
          judul: "Pelatihan UMKM",
          tanggal: "15 Februari 2026",
          deskripsi: "Pelatihan bagi pelaku UMKM desa untuk meningkatkan ekonomi.",
          gambar: "assets/img/picture.jpg",
        },
      ];

      // Ambil container
      const container = document.getElementById("kabarContainer");

      // Loop data dan tampilkan
      kabarData.forEach((kabar) => {
        const card = `
    <div class="col">
      <div class="card kabar-card h-100 shadow-sm border-0">
        <img src="${kabar.gambar}" class="kabar-image" />
        <div class="card-body d-flex flex-column p-4">
          <div class="mb-2">
            <span class="kabar-date text-white small">
              <i class="fas fa-calendar-alt me-1"></i>
              ${kabar.tanggal}
            </span>
          </div>
          <h5 class="card-title text-government-primary fw-bold mb-2">${kabar.judul}</h5>
          <p class="card-text text-muted flex-grow-1">${kabar.deskripsi}</p>
          <div class="mt-auto pt-3">
            <div class="d-flex justify-content-between align-items-center">
              <a href="{{ route('kabar.show') }}" class="btn btn-government btn-sm">
                <i class="bi bi-eye me-1"></i> Lihat Detail
              </a>
              <div class="btn-group">
                <a href="{{ route('kabar.edit') }}" class="btn btn-outline-warning btn-sm">
                  <i class="bi bi-pencil"></i>
                </a>
                <button class="btn btn-outline-danger btn-sm delete-btn">
                  <i class="bi bi-trash"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  `;

        container.innerHTML += card;
      });

      // Fungsi Logout
      function confirmLogout(type) {
        Swal.fire({
          title: "Keluar Sistem?",
          text: "Anda harus login kembali untuk mengakses layanan.",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#2c3e50",
          cancelButtonColor: "#d33",
          confirmButtonText: "Ya, Keluar!",
          cancelButtonText: "Batal",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "{{ route('login') }}"; // Arahkan ke file logout Anda
          }
        });
      }

      // Konfirmasi Hapus
      document.addEventListener("DOMContentLoaded", function () {
        const deleteButtons = document.querySelectorAll(".delete-btn");
        deleteButtons.forEach((btn) => {
          btn.addEventListener("click", function (e) {
            Swal.fire({
              title: "Hapus Kabar?",
              text: "Data yang dihapus tidak dapat dikembalikan!",
              icon: "error",
              showCancelButton: true,
              confirmButtonColor: "#d33",
              cancelButtonColor: "#3085d6",
              confirmButtonText: "Ya, Hapus!",
              cancelButtonText: "Batal",
            }).then((result) => {
              if (result.isConfirmed) {
                // Proses hapus di sini (form submit atau AJAX)
                Swal.fire("Terhapus!", "Kabar desa telah dihapus.", "success");
              }
            });
          });
        });
      });
    </script>
  </body>
</html>
