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
                      <i class="fas fa-newspaper me-2"></i>
                      Kabar Desa
                    </h2>
                    <p class="mb-0 opacity-75">Berita dan informasi terkini dari desa</p>
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
          gambar: "/assets/img/contohkabar.jpg",
        },
        {
          judul: "Pembangunan Jalan Desa",
          tanggal: "18 Februari 2026",
          deskripsi: "Proyek pembangunan jalan desa telah mencapai 70%.",
          gambar: "/assets/img/kabar.jpg",
        },
        {
          judul: "Pelatihan UMKM",
          tanggal: "15 Februari 2026",
          deskripsi: "Pelatihan bagi pelaku UMKM desa untuk meningkatkan ekonomi.",
          gambar: "/assets/img/perangkatdesa.jpg",
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
              <a href="{{ route('informasi.kabarDetail') }}" class="btn btn-government btn-sm">
                <i class="bi bi-eye me-1"></i> Lihat Detail
              </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  `;

        container.innerHTML += card;
      });
    </script>
  </body>
</html>
