<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pengajuan Surat - E-Lades</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

    <style>
      /* Warna Dasar & Background (Sesuai Gambar) */
      body {
        background-color: #f0f5ff; /* Biru sangat muda yang bersih */
        font-family: "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        color: #334155;
      }

      /* Header Biru Gelap (Sesuai image_a596ad.jpg) */
      .header-government {
        background-color: #2c4e8a;
        color: white;
        border-radius: 12px;
        padding: 20px 30px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      }

      /* Container Formulir Putih Bersih */
      .form-container-main {
        background-color: white;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.02);
        margin-bottom: 50px;
      }

      /* Section Grouping (Informasi Pemohon & Formulir) */
      .section-box {
        background-color: #f8fbff; /* Biru transparan tipis */
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 30px;
        border: 1px solid #eef2f7;
      }

      .section-title {
        color: #2c4e8a;
        font-weight: 600;
        font-size: 1.2rem;
        text-align: center;
        margin-bottom: 25px;
        letter-spacing: 0.5px;
      }

      /* Style Input (Sesuai Gambar) */
      .form-label {
        font-weight: 600;
        font-size: 0.9rem;
        color: #1e293b;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
      }

      .form-label i {
        margin-right: 8px;
        color: #64748b;
        font-size: 1rem;
      }

      .form-label .text-danger {
        margin-left: 4px;
      }

      .form-control,
      .form-select {
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        padding: 12px 15px;
        font-size: 0.95rem;
        transition: all 0.2s;
        background-color: white;
      }

      .form-control:focus {
        border-color: #2c4e8a;
        box-shadow: 0 0 0 4px rgba(44, 78, 138, 0.1);
      }

      /* Helper Text (Keterangan di bawah input) */
      .form-text {
        font-size: 0.8rem;
        color: #94a3b8;
        margin-top: 6px;
        display: flex;
        align-items: center;
      }

      .form-text i {
        margin-right: 5px;
      }

      /* Tombol Ajukan Surat (Biru Lebar) */
      .btn-submit-government {
        background-color: #2c4e8a;
        color: white;
        padding: 14px 40px;
        border-radius: 10px;
        font-weight: 600;
        border: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: all 0.3s;
      }

      .btn-submit-government:hover {
        background-color: #1e3a6d;
        transform: translateY(-2px);
        color: white;
      }

      /* Tombol Kembali (Putih) */
      .btn-back {
        background-color: white;
        color: #334155;
        font-weight: 600;
        border-radius: 8px;
        padding: 8px 18px;
        border: 1px solid #e2e8f0;
        font-size: 0.85rem;
      }

      hr {
        border-top: 1px solid #e2e8f0;
        opacity: 1;
      }
    </style>
  </head>
  <body>
    <div class="container mt-4">
      <div class="header-government d-flex justify-content-between align-items-center mb-4">
        <div>
          <h5 class="fw-bold mb-1"><i class="bi bi-file-earmark-plus-fill me-2"></i>Pengajuan TEST</h5>
          <p class="small mb-0 opacity-75">Lengkapi formulir di bawah untuk mengajukan TEST</p>
        </div>
         <a href="{{ route('pengajuan.index') }}" class="btn btn-light">
          <i class="bi bi-arrow-left me-2"></i>
          Kembali
        </a>
      </div>

      <div class="form-container-main">
        <div id="formErrorBox" class="alert alert-danger d-none" role="alert">
          <strong>Terdapat kesalahan pada form:</strong>
          <ul class="mb-0 mt-2" id="errorList"></ul>
        </div>
        <form id="formPengajuan">
          <div class="section-box">
            <div class="section-title">Informasi Surat</div>
          </div>

          <div class="section-box">
            <div class="section-title">Informasi Pemohon</div>
            <div class="row g-4">
              <div class="col-md-6">
                <label class="form-label"> <i class="bi bi-card-heading"></i>NIK <span class="text-danger">*</span> </label>

                <input type="text" id="nikInput" class="form-control" placeholder="Masukkan 16 digit NIK" />

                <div id="nikError" class="text-danger small mt-1 d-none"><i class="bi bi-exclamation-circle"></i> Kolom nik harus berisi 16 digit.</div>

                <div class="form-text"><i class="bi bi-check-circle"></i> NIK harus sesuai dengan KTP</div>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-person"></i>Nama Lengkap <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Masukkan nama lengkap sesuai KTP" />
                <div class="form-text"><i class="bi bi-check-circle"></i> Nama harus sesuai dengan identitas resmi</div>
              </div>
              <div class="col-md-12">
                <label class="form-label"><i class="bi bi-telephone"></i>Nomor Telepon <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Contoh: 081234567890" style="max-width: 400px" />
                <div class="form-text"><i class="bi bi-chat-dots"></i> Nomor ini akan digunakan untuk mengirim notifikasi status pengajuan</div>
              </div>
            </div>
          </div>

          <div class="section-box">
            <div class="section-title">Formulir Pengajuan Surat</div>
            <div class="row g-4">
              <div class="col-md-12">
                <label class="form-label"><i class="bi bi-pencil-square"></i>Nama <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Masukkan nama" />
                <div class="form-text"><i class="bi bi-info-circle"></i> Isi dengan data yang akurat</div>
              </div>
              <div class="col-md-12">
                <label class="form-label"><i class="bi bi-list-ul"></i>Jenis Kelamin <span class="text-danger">*</span></label>
                <select class="form-select">
                  <option selected disabled>Pilih...</option>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
                <div class="form-text"><i class="bi bi-cursor"></i> Pilih salah satu opsi yang tersedia</div>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-geo-alt"></i>Tempat Lahir <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Tempat Lahir" />
              </div>
              <div class="col-md-6">
                <label class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                <input type="date" class="form-control" />
              </div>
              <div class="col-md-12">
                <div class="form-text"><i class="bi bi-calendar-event"></i> Isi tempat dan tanggal lahir sesuai KTP</div>
              </div>
              <div class="col-md-12">
                <label class="form-label"><i class="bi bi-chat-left-dots"></i>Alamat <span class="text-danger">*</span></label>
                <textarea class="form-control" rows="4" placeholder="Masukkan alamat"></textarea>
                <div class="form-text"><i class="bi bi-info-circle"></i> Jelaskan dengan detail dan jelas</div>
              </div>
            </div>
          </div>

          <div class="section-box">
            <div class="section-title">Unggah Dokumen Pendukung</div>
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <label class="form-label">Upload KTP (Format: JPG/PNG/PDF)</label>
                  <input type="file" class="form-control" name="file_ktp" />
                </div>
              </div>
            </div>
          </div>

          <div class="text-center mt-5">
            <button type="submit" class="btn btn-submit-government"><i class="bi bi-send-fill"></i> AJUKAN SURAT</button>
            <p class="small text-muted mt-3"><i class="bi bi-info-circle me-1"></i> Pastikan semua data yang dimasukkan sudah benar sebelum mengirim</p>
          </div>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.getElementById("formPengajuan").addEventListener("submit", function (e) {
        e.preventDefault();

        let errors = [];

        const nik = document.getElementById("nikInput").value.trim();
        const nikInput = document.getElementById("nikInput");
        const nikError = document.getElementById("nikError");

        // Reset
        nikInput.classList.remove("is-invalid");
        nikError.classList.add("d-none");

        // VALIDASI NIK
        if (nik.length !== 16 || isNaN(nik)) {
          errors.push("Kolom nik harus berisi 16 digit.");
          nikInput.classList.add("is-invalid");
          nikError.classList.remove("d-none");
        }

        // TAMPILKAN ERROR
        const errorBox = document.getElementById("formErrorBox");
        const errorList = document.getElementById("errorList");

        if (errors.length > 0) {
          errorBox.classList.remove("d-none");

          errorList.innerHTML = "";
          errors.forEach((err) => {
            errorList.innerHTML += `<li>${err}</li>`;
          });

          // Scroll ke atas biar kelihatan
          window.scrollTo({ top: 0, behavior: "smooth" });
        } else {
          errorBox.classList.add("d-none");

          // SIMULASI BERHASIL
          alert("Form berhasil dikirim!");
        }
      });
    </script>
  </body>
</html>
