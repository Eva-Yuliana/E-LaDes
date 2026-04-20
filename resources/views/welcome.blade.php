<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Lades - Sistem Pelayanan Desa Digital</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="/assets/css/landing page.css" />
  </head>
  <body>
    <div class="sticky-top">
      <nav class="navbar navbar-government navbar-expand-lg py-3">
        <div class="container">
          <a class="navbar-brand" href="#">
            <div class="logo-container">
              <i class="bi bi-bank2 text-white fs-2 me-2"></i>
              <div class="text-white">
                <div style="font-size: 1.1rem; font-weight: 700; line-height: 1">E-LADES</div>
                <div style="font-size: 0.7rem; opacity: 0.8; line-height: 1">Pemerintahan Desa Digital</div>
              </div>
            </div>
          </a>

          <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
            <span class="navbar-toggler-icon" style="filter: invert(1)"></span>
          </button>

          <div class="collapse navbar-collapse" id="navContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-house me-1"></i> Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tentang"><i class="bi bi-info-circle me-1"></i> Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#visi-misi"><i class="bi bi-bullseye me-1"></i> Visi Misi</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="bi bi-newspaper me-1"></i> Informasi</a>
                <ul class="dropdown-menu border-0 shadow">
                  <li>
                    <a class="dropdown-item" href="{{ route('informasi.kabar') }}"><i class="bi bi-newspaper me-2 text-primary"></i>Kabar Desa</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{ route('informasi.pengumuman') }}"><i class="bi bi-megaphone me-2 text-warning"></i>Pengumuman</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('pengajuan.index') }}"><i class="bi bi-file-earmark-text me-1"></i> Pengajuan</a>
              </li>
            </ul>
            <div class="d-flex">
              <a class="btn btn-login w-100" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right me-2"></i> Masuk Sistem</a>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1051">
      <div class="toast show toast-government shadow-lg" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header border-0" style="background: rgba(255, 255, 255, 0.1); color: white">
          <i class="bi bi-megaphone me-2"></i>
          <strong class="me-auto">Pengumuman Penting</strong>
          <small>22 Feb 2026</small>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body text-white">
          <strong>Pembaruan Sistem</strong>
          <p>Layanan mandiri kini tersedia melalui aplikasi mobile.</p>
        </div>
      </div>
    </div>

    <div class="notification-mobile">
      <div class="notification-banner" id="mobile-notification-0">
        <button class="close-btn" onclick="closeMobileNotification(0)" aria-label="Close">
          <i class="bi bi-x"></i>
        </button>
        <div class="notification-content">
          <div class="notification-title"><i class="bi bi-megaphone me-2"></i> Pengumuman Penting</div>
          <div class="notification-date">Minggu, 22 Februari 2026</div>
          <div class="notification-text text-white">Pembaruan Sistem: Layanan mandiri kini tersedia.</div>
        </div>
      </div>
    </div>

    <div id="heroSection"></div>

    <section class="government-bg py-5 fade-in-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-3 col-6 mb-4 fade-in-up">
            <div class="icon-government"><i class="bi bi-file-earmark-check"></i></div>
            <div class="stats-number">6</div>
            <p class="text-muted">Surat Terbit</p>
          </div>
          <div class="col-md-3 col-6 mb-4 fade-in-up">
            <div class="icon-government"><i class="bi bi-people"></i></div>
            <div class="stats-number">3255</div>
            <p class="text-muted">Penduduk Terdaftar</p>
          </div>
          <div class="col-md-3 col-6 mb-4 fade-in-up">
            <div class="icon-government"><i class="bi bi-file-earmark-text"></i></div>
            <div class="stats-number">11</div>
            <p class="text-muted">Jenis Surat</p>
          </div>
          <div class="col-md-3 col-6 mb-4 fade-in-up">
            <div class="icon-government"><i class="bi bi-clock"></i></div>
            <div class="stats-number">24/7</div>
            <p class="text-muted">Layanan Online</p>
          </div>
        </div>
      </div>
    </section>

    <section id="tentang" class="py-5 fade-in-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 fade-in-left">
            <h2 class="section-title mb-4 text-start">E-LaDeS</h2>
            <p class="text-muted mb-4" style="text-align: justify; line-height: 1.8">
              E-Lades merupakan inovasi pelayanan publik yang mengintegrasikan seluruh layanan administrasi desa dalam satu platform digital. Sistem ini dirancang untuk meningkatkan efisiensi, transparansi, dan kualitas pelayanan kepada
              masyarakat.
            </p>
            <p class="text-muted mb-4" style="text-align: justify; line-height: 1.8">
              Dengan memanfaatkan teknologi informasi terkini, kami berkomitmen untuk memberikan pelayanan yang cepat, akurat, dan dapat diakses kapan saja, di mana saja. Mari bersama-sama membangun desa yang lebih maju dan modern.
            </p>
            <div class="row mt-4">
              <div class="col-6 mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i> Pelayanan 24/7</div>
              <div class="col-6 mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i> Proses Cepat</div>
              <div class="col-6 mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i> Data Aman</div>
              <div class="col-6 mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i> Transparansi</div>
            </div>
          </div>
          <div class="col-lg-6 fade-in-right">
            <div class="feature-card h-100 p-4 shadow-lg">
              <h3 class="text-primary fw-semibold mb-4"><i class="bi bi-cogs me-2"></i> Fitur Unggulan</h3>
              <div class="row">
                <div class="col-md-6 d-flex align-items-start">
                  <div class="icon-box bg-blue-light text-primary me-3">
                    <i class="bi bi-cloud-arrow-up"></i>
                  </div>
                  <div>
                    <h6 class="fw-bold mb-1">Pengajuan Surat Online</h6>
                    <small class="text-muted">Ajukan berbagai jenis surat secara online</small>
                  </div>
                </div>

                <div class="col-md-6 d-flex align-items-start">
                  <div class="icon-box bg-green-light text-success me-3">
                    <i class="bi bi-search"></i>
                  </div>
                  <div>
                    <h6 class="fw-bold mb-1">Tracking Status</h6>
                    <small class="text-muted">Pantau status pengajuan real-time</small>
                  </div>
                </div>

                <div class="col-md-6 d-flex align-items-start">
                  <div class="icon-box bg-yellow-light text-warning me-3">
                    <i class="bi bi-bell"></i>
                  </div>
                  <div>
                    <h6 class="fw-bold mb-1">Notifikasi Otomatis</h6>
                    <small class="text-muted">Dapatkan pemberitahuan progres</small>
                  </div>
                </div>

                <div class="col-md-6 d-flex align-items-start">
                  <div class="icon-box bg-cyan-light text-info me-3">
                    <i class="bi bi-download"></i>
                  </div>
                  <div>
                    <h6 class="fw-bold mb-1">Download Digital</h6>
                    <small class="text-muted">Unduh surat dalam format digital</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="visi-misi" class="government-bg py-5 fade-in-section">
      <div class="container">
        <div class="mb-5 text-center fade-in-up">
          <h2 class="section-title">Visi & Misi</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-4 fade-in-left">
            <div class="card feature-card h-100 shadow-sm p-4">
              <div class="icon-government"><i class="bi bi-eye"></i></div>
              <h4 class="text-primary fw-semibold text-center">VISI</h4>
              <p class="text-muted text-center italic">"Mewujudkan desa yang maju, mandiri, dan sejahtera melalui pelayanan publik yang berbasis teknologi digital, transparan, dan berorientasi pada kepuasan masyarakat."</p>
            </div>
          </div>
          <div class="col-lg-6 mb-4 fade-in-right">
            <div class="card feature-card h-100 shadow-sm p-4">
              <div class="icon-government"><i class="bi bi-bullseye"></i></div>
              <h4 class="text-primary fw-semibold text-center">MISI</h4>
              <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> Mengembangkan sistem pelayanan digital yang mudah diakses</li>
                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> Meningkatkan transparansi dan akuntabilitas pemerintah desa</li>
                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> Memberikan pelayanan berkualitas dan responsif</li>
                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i> Memberdayakan masyarakat melalui teknologi informasi</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 fade-in-section">
      <div class="container">
        <div class="mb-5 text-center fade-in-up">
          <h2 class="section-title">Kabar Desa Terbaru</h2>
          <p class="text-muted">Informasi dan berita terkini dari desa</p>
        </div>

        <div class="row g-4">
          <div class="col-lg-4 col-md-6 mb-4 fade-in-up">
            <div class="card news-card h-100 border-0 shadow-sm">
              <div class="news-image-wrapper">
                <img src="assets/img/contohkabar.jpg" class="card-img-top" alt="Berita Desa" onerror="this.src = 'https://via.placeholder.com/400x250'" />
                <span class="date-badge">01 Oct</span>
              </div>

              <div class="card-body news-content">
                <h5 class="fw-bold mb-2">TEST</h5>
                <div class="news-meta mb-3">
                  <small><i class="bi bi-person me-1"></i> Admin • 01 Oktober 2025</small>
                </div>
                <p class="card-text small opacity-90">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores facere aut e...</p>
                <div class="mt-4">
                  <a href="{{ route('informasi.kabarDetail') }}" class="btn btn-read-more"> Baca Selengkapnya <i class="bi bi-arrow-right ms-1"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center mt-5 fade-in-up">
          <a href="{{ route('informasi.kabar') }}" class="btn btn-primary-gov px-4 py-2"> <i class="bi bi-newspaper me-2"></i> LIHAT SEMUA BERITA </a>
        </div>
      </div>
    </section>

    <footer class="bg-dark py-4 text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1013.7849589936225!2d111.87101133375725!3d-7.601695962369089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784b5a64ac9f07%3A0x427953bbea055486!2sBalai%20Desa%20Pesudukuh!5e0!3m2!1sen!2sid!4v1759389750543!5m2!1sen!2sid"
                width="100%"
                height="100%"
                style="border: 10"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>

          <div class="col-md-6 text-md-end mt-md-0 mt-3">
            <p>Pemerintah Desa Pesudukuh</p>
            <p>Kecamatan Bagor, Kabupaten Nganjuk</p>
            <p><i class="bi bi-envelope"></i> desapesudukuh@gmail.com</p>
            <a href="https://wa.me/6281357743268" target="_blank" class="text-white">
              <i class="bi bi-whatsapp"></i>
              +62813-5774-3268
            </a>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // ===== RENDER HERO / BERANDA =====
        function renderHeroSection() {
          const heroContainer = document.getElementById("heroSection");

          const heroHTML = `
      <section class="hero-government py-5 fade-in-section">
        <div class="position-relative container py-5">
          <div class="row align-items-center">
            
            <!-- Kiri: Text -->
            <div class="col-lg-8 col-md-7 fade-in-left">
              <h1 class="display-4 fw-bold mb-4">
                <i class="bi bi-bank me-3"></i> E-LaDeS
              </h1>

              <h4 class="mb-4">
                Sistem Pelayanan Administrasi Desa Terpadu
              </h4>

              <p class="lead mb-4">
                Memberikan pelayanan terbaik kepada masyarakat melalui sistem digital yang modern,
                transparan, dan mudah diakses. Wujudkan desa yang maju dan berkelanjutan.
              </p>

              <div class="d-flex flex-wrap gap-3">
                <a class="btn btn-light btn-lg px-4 py-3" href="{{ route('pengajuan.index') }}">
                  <i class="bi bi-file-earmark-text me-2"></i>
                  Pengajuan Surat Online
                </a>

                <a class="btn btn-outline-light btn-lg px-4 py-3" href="#tentang">
                  <i class="bi bi-info-circle me-2"></i>
                  Pelajari Lebih Lanjut
                </a>
              </div>
            </div>

            <!-- Kanan: Icon -->
            <div class="col-lg-4 col-md-5 text-center fade-in-right">
              <div class="rounded-circle d-inline-block bg-white bg-opacity-10 p-5 fade-in-scale">
                <i class="bi bi-building text-white" style="font-size: 8rem"></i>
              </div>
            </div>

          </div>
        </div>
      </section>
    `;

          heroContainer.innerHTML = heroHTML;
        }

        // ===== ANIMASI FADE-IN =====
        function initFadeAnimation() {
          const observerOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px",
          };

          const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
              }
            });
          }, observerOptions);

          const elements = document.querySelectorAll(".fade-in-section, .fade-in-left, .fade-in-right, .fade-in-scale");

          elements.forEach((el) => observer.observe(el));
        }

        // ===== INISIALISASI =====
        renderHeroSection();
        initFadeAnimation();
      });

      function closeMobileNotification(index) {
        const notification = document.getElementById("mobile-notification-" + index);
        if (notification) {
          notification.style.animation = "slideOutUp 0.3s ease-in";
          setTimeout(() => {
            notification.remove();
          }, 300);
        }
      }

      document.addEventListener("DOMContentLoaded", function () {
        // Auto close mobile notifications
        const notifications = document.querySelectorAll(".notification-banner");
        notifications.forEach((notification, index) => {
          setTimeout(
            () => {
              if (notification.parentNode) closeMobileNotification(index);
            },
            8000 + index * 1000,
          );
        });

        // Intersection Observer for Fade-in effects
        const observerOptions = { threshold: 0.1, rootMargin: "0px 0px -50px 0px" };
        const observer = new IntersectionObserver((entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) entry.target.classList.add("is-visible");
          });
        }, observerOptions);

        const fadeElements = document.querySelectorAll(".fade-in-section, .fade-in-up, .fade-in-left, .fade-in-right, .fade-in-scale");
        fadeElements.forEach((el) => observer.observe(el));
      });
    </script>
  </body>
</html>
