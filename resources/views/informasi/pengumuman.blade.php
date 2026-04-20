<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Lades - Sidebar Modern</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="/assets/css/informasi.css" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
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
    <a href="{{ route('informasi.pengumumanDetail') }}" class="btn btn-outline-info btn-sm"><i class="bi bi-eye"></i> Detail</a>
  </div>
</td>
</tr>
`,
          )
          .join("");

        // Inisialisasi DataTables
        $(document).ready(function () {
          $("#pengumumanTable").DataTable({
            language: {
              url: "//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json",
              search: "Cari:",
              lengthMenu: "Tampilkan _MENU_ entri",
              info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
              paginate: {
                first: "Pertama",
                last: "Terakhir",
                next: "Selanjutnya", // Sesuai gambar
                previous: "Sebelumnya",
              },
            },
            dom: '<"d-flex justify-content-between align-items-center mb-3"lf>rt<"d-flex justify-content-between align-items-center mt-3"ip>',
            pageLength: 10,
            ordering: true,
          });
        });
      });
    </script>
  </body>
</html>
