<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Pengumuman</title>

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
                      <i class="bi bi-eye me-2"></i>
                      Detail Pengumuman
                    </h2>
                    <p class="mb-0 opacity-75">Informasi lengkap pengumuman</p>
                  </div>
                  <div class="col-md-4 text-md-end">
                    <div class="d-flex align-items-center justify-content-md-end">
                      <i class="bi bi-megaphone fs-1 opacity-50"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
              <div class="card-header bg-government-light border-0 py-3">
                <div class="d-flex align-items-center">
                  <i class="bi bi-info-circle text-government-primary me-2"></i>
                  <h5 class="fw-bold mb-0 text-government-primary">Judul Pengumuman Di Sini</h5>
                </div>
              </div>
              <div class="card-body p-4">
                <div class="info-item">
                  <div class="label">
                    <i class="bi bi-fonts me-2"></i>
                    Judul Pengumuman
                  </div>
                  <p class="value">Judul Pengumuman Di Sini</p>
                </div>

                <div class="info-item">
                  <div class="label">
                    <i class="bi bi-text-left me-2"></i>
                    Isi Pengumuman
                  </div>
                  <p class="value">Ini adalah detail konten isi dari pengumuman yang ditampilkan. Semua informasi terkait pengumuman akan muncul secara lengkap di bagian ini.</p>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="info-item">
                      <div class="label">
                        <i class="bi bi-calendar3 me-2"></i>
                        Tanggal Mulai
                      </div>
                      <span class="value text-muted">2025-10-07 00:00:00</span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-item">
                      <div class="label">
                        <i class="bi bi-calendar-check me-2"></i>
                        Tanggal Selesai
                      </div>
                      <span class="value text-muted">2025-10-11 00:00:00</span>
                    </div>
                  </div>
                </div>

                <div class="info-item">
                  <div class="label">
                    <i class="bi bi-person me-2"></i>
                    Dibuat Oleh
                  </div>
                  <p class="value">Perangkat User</p>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-4">
                  <a href="{{ route('informasi.pengumuman') }}" class="btn btn-outline-secondary btn-lg">
                    <i class="bi bi-arrow-left me-2"></i>
                    Kembali
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
