<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Lades - Sidebar Modern</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="/assets/css/laporan.css" />

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
          <a href="{{ route('kabar.index') }}" class="nav-link"> <i class="bi bi-newspaper"></i> Kabar Desa </a>
        </li>

        <div class="nav-section-header mt-3"><i class="bi bi-person-gear me-2"></i>Manajemen</div>
        <li>
          <a href="{{ route('laporan.index') }}" class="nav-link active"> <i class="bi bi-graph-up-arrow"></i> Laporan </a>
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
              <a class="nav-link active" href="{{ route('laporan.index') }}">
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="page-header fade-in-up">
              <div class="content">
                <div class="row align-items-center">
                  <div class="col-md-8">
                    <h2 class="mb-2" style="font-weight: 700"><i class="bi bi-graph-up me-3"></i>Laporan Pengajuan Surat</h2>
                    <p class="mb-0 opacity-75">Laporan dan analisa data pengajuan surat dari warga</p>
                  </div>
                  <div class="col-md-4 text-end d-none d-md-block">
                    <i class="bi bi-file-earmark-bar-graph fs-1 opacity-50"></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-md-3 mb-3">
                <div class="card stats-card text-white fade-in-up" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); box-shadow: 0 10px 30px rgba(30, 60, 114, 0.3)">
                  <div class="card-body text-center">
                    <div class="icon-box mx-auto" style="background: rgba(255, 255, 255, 0.2)">
                      <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <h5>11</h5>
                    <p>Total Data</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="card stats-card text-white fade-in-up" style="background: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%); box-shadow: 0 10px 30px rgba(255, 193, 7, 0.3); animation-delay: 0.1s">
                  <div class="card-body text-center">
                    <div class="icon-box mx-auto" style="background: rgba(255, 255, 255, 0.2)">
                      <i class="bi bi-clock"></i>
                    </div>
                    <h5>1</h5>
                    <p>Tertunda</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="card stats-card text-white fade-in-up" style="background: linear-gradient(135deg, #0dcaf0 0%, #0d6efd 100%); box-shadow: 0 10px 30px rgba(13, 202, 240, 0.3); animation-delay: 0.2s">
                  <div class="card-body text-center">
                    <div class="icon-box mx-auto" style="background: rgba(255, 255, 255, 0.2)">
                      <i class="bi bi-gear-fill"></i>
                    </div>
                    <h5>1</h5>
                    <p>Diproses</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="card stats-card text-white fade-in-up" style="background: linear-gradient(135deg, #198754 0%, #20c997 100%); box-shadow: 0 10px 30px rgba(25, 135, 84, 0.3); animation-delay: 0.3s">
                  <div class="card-body text-center">
                    <div class="icon-box mx-auto" style="background: rgba(255, 255, 255, 0.2)">
                      <i class="bi bi-check-circle-fill"></i>
                    </div>
                    <h5>7</h5>
                    <p>Selesai</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="card filter-card mb-4 fade-in-up">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <i class="bi bi-funnel text-government-primary me-2"></i>
                  <h6 class="mb-0 text-muted">Filter Laporan</h6>
                </div>
                <form>
                  <div class="row g-3 align-items-end">
                    <div class="col-md-3">
                      <label class="form-label text-muted small">Status</label>
                      <select class="form-select">
                        <option value="">📋 Semua Status</option>
                        <option value="tertunda">⏳ Tertunda</option>
                        <option value="diproses">⚙️ Diproses</option>
                        <option value="selesai">✅ Selesai</option>
                        <option value="ditolak">❌ Ditolak</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label class="form-label text-muted small">Tanggal Mulai</label>
                      <input type="date" class="form-control" />
                    </div>
                    <div class="col-md-3">
                      <label class="form-label text-muted small">Tanggal Selesai</label>
                      <input type="date" class="form-control" />
                    </div>
                    <div class="col-md-3">
                      <button type="button" class="btn btn-filter w-100"><i class="bi bi-search me-2"></i>Filter</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="card filter-card fade-in-up">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <i class="bi bi-table text-government-primary me-2"></i>
                  <h6 class="mb-0 text-muted">Data Laporan</h6>
                </div>
                <div class="table-responsive">
                  <table id="laporanTable" class="table table-modern" style="width: 100%">
                    <thead>
                      <tr>
                        <th><i class="bi bi-hash"></i>No</th>
                        <th><i class="bi bi-person"></i>Nama Pemohon</th>
                        <th><i class="bi bi-telephone"></i>Telepon Pemohon</th>
                        <th><i class="bi bi-file-earmark-text"></i>Jenis Surat</th>
                        <th><i class="bi bi-flag"></i>Status</th>
                        <th><i class="bi bi-calendar3"></i>Tanggal Pengajuan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 30px; height: 30px">
                              <i class="bi bi-person text-primary"></i>
                            </div>
                            <span class="fw-semibold">Test</span>
                          </div>
                        </td>
                        <td><span class="fw-semibold text-government-primary">08123456789</span></td>
                        <td><span class="fw-semibold text-government-primary">TEST</span></td>
                        <td>
                          <span class="badge bg-success px-3 py-2"><i class="bi bi-check-circle me-1"></i> Selesai</span>
                        </td>
                        <td data-order="2023-10-25">
                          <div class="d-flex flex-column">
                            <span class="fw-semibold">25/10/2023</span>
                            <small class="text-muted">09:30</small>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex gap-2">
                           <a href="{{ route('pengajuanSurat.show') }}" class="btn btn-sm btn-government"> <i class="bi bi-eye"></i> Lihat </a>
                            <button class="btn btn-sm btn-warning" onclick="sendReminder(1)"><i class="bi bi-telephone"></i> Pengingat</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 30px; height: 30px">
                              <i class="bi bi-person text-primary"></i>
                            </div>
                            <span class="fw-semibold">Test</span>
                          </div>
                        </td>
                        <td><span class="fw-semibold text-government-primary">08987654321</span></td>
                        <td><span class="fw-semibold text-government-primary">TEST</span></td>
                        <td>
                          <span class="badge bg-warning px-3 py-2"><i class="bi bi-clock me-1"></i> Tertunda</span>
                        </td>
                        <td data-order="2023-10-26">
                          <div class="d-flex flex-column">
                            <span class="fw-semibold">26/10/2023</span>
                            <small class="text-muted">14:20</small>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex gap-2">
                             <a href="{{ route('pengajuanSurat.show') }}" class="btn btn-sm btn-government"> <i class="bi bi-eye"></i> Lihat </a>
                            <button class="btn btn-sm btn-warning" onclick="sendReminder(2)"><i class="bi bi-telephone"></i> Pengingat</button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
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
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Initialize DataTable
        $("#laporanTable").DataTable({
          responsive: true,
          pageLength: 25,
          lengthMenu: [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "Semua"],
          ],
          language: {
            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ data per halaman",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            infoEmpty: "Menampilkan 0 sampai 0 dari 0 data",
            infoFiltered: "(difilter dari _MAX_ total data)",
            paginate: {
              first: "Pertama",
              last: "Terakhir",
              next: "Selanjutnya",
              previous: "Sebelumnya",
            },
            emptyTable: "Tidak ada data yang tersedia",
            zeroRecords: "Tidak ditemukan data yang sesuai",
          },

          // Mengatur posisi elemen sesuai gambar (B=Buttons, l=Length, f=Filter, r=Processing, t=Table, i=Info, p=Pagination)
          dom: '<"row align-items-center mb-3"<"col-md-4"l><"col-md-8 text-end"f>>' + '<"row mb-3"<"col-md-12"B>>' + "t" + '<"row mt-3"<"col-md-6"i><"col-md-6"p>>',
          buttons: [
            {
              extend: "excel",
              text: '<i class="bi bi-file-earmark-excel me-1"></i> Excel',
              className: "btn btn-excel",
            },
            {
              extend: "pdf",
              text: '<i class="bi bi-file-pdf me-1"></i> PDF',
              className: "btn btn-pdf",
            },
            {
              extend: "print",
              text: '<i class="bi bi-printer me-1"></i> Print',
              className: "btn btn-print",
            },
          ],
        });
      });

      function sendReminder(id) {
        Swal.fire({
          title: "Kirim Pengingat",
          text: "Anda akan mengirim pengingat pengambilan surat via WhatsApp kepada pemohon. Lanjutkan?",
          icon: "question",
          showCancelButton: true,
          confirmButtonColor: "#1e3c72",
          cancelButtonColor: "#d33",
          confirmButtonText: "Ya, Kirim",
          cancelButtonText: "Batal",
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire("Berhasil!", "Pengingat berhasil dikirim.", "success");
          }
        });
      }

      function confirmLogout(type) {
        Swal.fire({
          title: "Keluar Sistem",
          text: "Apakah Anda yakin ingin keluar?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#1e3c72",
          cancelButtonColor: "#d33",
          confirmButtonText: "Ya, Keluar",
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "{{ route('login') }}"; 
          }
        });
      }
    </script>
  </body>
</html>
