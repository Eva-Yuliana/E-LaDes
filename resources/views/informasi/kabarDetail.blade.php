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
    <div class="main-content">
      <div class="government-container py-4">
        <div class="container-fluid px-md-4">
          <div class="card mb-4 shadow-sm border-0">
            <div class="card-header card-government p-4">
              <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="mb-md-0 mb-2">
                  <h3 class="text-light mb-0 fw-semibold">
                    <i class="bi bi-newspaper me-2"></i>
                    Judul Berita Kabar Desa
                  </h3>
                </div>
                <div>
                  <span class="date-badge text-light">
                    <i class="fas fa-calendar-alt me-2"></i>
                    Senin, 01 Januari 2026
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8 mb-4">
              <div class="card info-card mb-4 shadow-sm">
                <div class="card-header bg-white py-3">
                  <h5 class="text-primary mb-0 fw-semibold">
                    <i class="fas fa-align-left me-2"></i>
                    Isi Berita
                  </h5>
                </div>
                <div class="card-body p-4">
                  <p class="text-secondary mb-0" style="text-align: justify; line-height: 1.8; font-size: 1.05rem">
                    Ini adalah area isi berita. Semua teks deskripsi atau laporan mengenai kegiatan desa akan muncul di sini dengan format rata kanan-kiri (justify) dan spasi baris yang nyaman dibaca oleh masyarakat Pesudukuh.
                  </p>
                </div>
              </div>

              <div class="card info-card shadow-sm">
                <div class="card-header bg-white py-3">
                  <h5 class="text-primary mb-0 fw-semibold">
                    <i class="fas fa-images me-2"></i>
                    Galeri Foto (1 Foto)
                  </h5>
                </div>
                <div class="card-body">
                  <div class="row photo-gallery">
                    <div class="col-md-6 col-lg-4 mb-3">
                      <div class="photo-container">
                        <img src="/assets/img/picture.jpg" alt="Foto 1" class="img-fluid img-thumbnail" style="height: 180px; object-fit: cover; width: 100%" data-bs-toggle="modal" data-bs-target="#photoModal0" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card info-card mb-4 shadow-sm">
                <div class="card-header bg-white py-3">
                  <h6 class="text-primary mb-0 fw-semibold"><i class="fas fa-user-edit me-2"></i> Informasi Penulis</h6>
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div class="bg-primary rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px">
                      <i class="fas fa-user text-white"></i>
                    </div>
                    <div>
                      <h6 class="mb-0 fw-semibold">Tidak diketahui</h6>
                      <small class="text-muted">Perangkat Desa</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card info-card mb-4 shadow-sm">
                <div class="card-header bg-white py-3">
                  <h6 class="text-primary mb-0 fw-semibold"><i class="fas fa-info-circle me-2"></i> Informasi Artikel</h6>
                </div>
                <div class="card-body">
                  <div class="mb-3 d-flex justify-content-between">
                    <span class="text-muted small">Tanggal Publikasi:</span>
                    <span class="text-muted fw-semibold">Rabu, 01 Oktober 2025</span>
                  </div>
                  <div class="mb-3 d-flex justify-content-between">
                    <span class="text-muted small">Total Foto:</span>
                    <span class="badge rounded-pill bg-secondary">1 Foto</span>
                  </div>
                </div>
              </div>

              <div class="card info-card shadow-sm">
                <div class="card-body">
                  <a href="{{ route('informasi.kabar') }}" class="btn btn-government w-100 text-light py-2 fw-semibold">KEMBALI</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="photoModal0" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">
          <div class="modal-header card-government text-white">
            <h5 class="modal-title"><i class="fas fa-image me-2"></i> Detail Foto</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body p-2 text-center bg-dark">
            <img src="https://via.placeholder.com/800x600" class="img-fluid rounded" style="max-height: 75vh" />
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
