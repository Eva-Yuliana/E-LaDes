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
      <div class="container-fluid px-4 py-3">
        <div class="card card-government mb-4 p-3">
          <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
            <div>
              <h1 class="h3 mb-0">Pembuatan Surat</h1>
              <p class="mb-0">Kelola berbagai jenis surat dan template yang tersedia</p>
            </div>
            <a href="{{ route('template.create') }}" class="btn btn-primary btn-icon-split shadow-sm">
              <span class="icon text-white-50">
                <i class="bi bi-plus-circle"></i>
              </span>
              <span class="text">Tambah Jenis Surat</span>
            </a>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card shadow">
              <div class="card-header bg-gradient-primary d-flex justify-content-between align-items-center text-white">
                <h5 class="mb-0"><i class="bi bi-list-check me-2"></i> Daftar Jenis Surat</h5>
              </div>

              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover table-government w-100" id="jenisSuratTable">
                    <thead>
                      <tr>
                        <th>Kode</th>
                        <th>Nama Surat</th>
                        <th>Deskripsi</th>
                        <th>Format Nomor</th>
                        <th>Jumlah Pengajuan</th>
                        <th class="text-center">Aksi</th>
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
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const data = [
          { kode: "SKU", nama: "Surat Keterangan Usaha", desk: "Surat pernyataan resmi untuk penduduk yang memiliki usaha produktif...", format: "{KODE} / {NO_URUT} / 411.501.03 / {TAHUN}", jumlah: 2 },
          { kode: "SKTM", nama: "Surat Keterangan Tidak Mampu", desk: "Digunakan untuk permohonan bantuan atau keringanan biaya...", format: "{KODE} / {NO_URUT} / 411.501.03 / {TAHUN}", jumlah: 11 },
        ];

        const tbody = document.querySelector("#jenisSuratTable tbody");

        tbody.innerHTML = data
          .map(
            (d) => `
<tr>
<td><span class="badge rounded-pill bg-primary">${d.kode}</span></td>
<td><strong>${d.nama}</strong></td>
<td>${d.desk}</td>
<td><code class="bg-light rounded p-1">${d.format}</code></td>
<td><span class="badge bg-info rounded-pill">${d.jumlah}</span></td>
<td class="text-center">
  <div class="btn-group">
    <a href="{{ route('template.edit') }}" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit Jenis Surat">
      <i class="bi bi-pencil-square"></i>
    </a>
    <button type="button" class="btn btn-sm btn-danger btn-delete" data-bs-toggle="tooltip" title="Hapus Jenis Surat">
      <i class="bi bi-trash"></i>
    </button>
  </div>
</td>
</tr>
`,
          )
          .join("");
      });

      $(document).ready(function () {
        // Inisialisasi DataTables
        $("#jenisSuratTable").DataTable({
          // Properti "dom" untuk mengatur posisi elemen (l = length, f = filtering/search, t = table, i = info, p = pagination)
          // d-flex justify-content-between digunakan agar elemen kiri dan kanan sejajar
          dom: "<'row mb-3'<'col-md-6 d-flex align-items-center'l><'col-md-6 d-flex justify-content-end align-items-center'f>>" + "<'row'<'col-md-12'tr>>" + "<'row mt-3'<'col-md-6'i><'col-md-6 d-flex justify-content-end'p>>",

          language: {
            search: "Cari:",
            searchPlaceholder: "", // Bisa dikosongkan agar rapi
            lengthMenu: "Tampilkan _MENU_ entri",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
            infoEmpty: "Menampilkan 0 sampai 0 dari 0 entri",
            zeroRecords: "Tidak ditemukan data yang sesuai",
            paginate: {
              first: "Pertama",
              last: "Terakhir",
              next: "Selanjutnya", // Sesuai gambar
              previous: "Sebelumnya", // Sesuai gambar
            },
          },
          responsive: true,
          ordering: true,
          paging: true,
          info: true,
          columnDefs: [
            {
              orderable: false,
              targets: 5,
            },
          ],
        });

        const deleteButtons = document.querySelectorAll(".btn-delete");
        deleteButtons.forEach((btn) => {
          btn.addEventListener("click", function () {
            Swal.fire({
              title: "Hapus Jenis Surat?",
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

        // Inisialisasi Tooltips Bootstrap
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl);
        });
      });
    </script>
  </body>
</html>
