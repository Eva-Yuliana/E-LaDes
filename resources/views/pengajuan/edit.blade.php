<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Pengajuan TEST - E-Lades</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

    <style>
      body {
        background-color: #f0f5ff; /* Background biru sangat muda sesuai gambar */
        font-family: "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        color: #334155;
      }

      /* Header Biru Tua Solid */
      .header-government {
        background-color: #2c4e8a;
        color: white;
        border-radius: 12px;
        padding: 20px 30px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      }

      .btn-back {
        background-color: white;
        color: #334155;
        font-weight: 600;
        border-radius: 8px;
        padding: 8px 18px;
        border: 1px solid #e2e8f0;
        font-size: 0.85rem;
        text-decoration: none;
      }

      /* Container Putih Utama */
      .form-container-main {
        background-color: white;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.02);
        margin-top: 25px;
        margin-bottom: 50px;
      }

      /* Box Section (Informasi Pemohon & Formulir) */
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
        font-size: 1.1rem;
        text-align: center;
        margin-bottom: 25px;
        letter-spacing: 0.5px;
      }

      /* Style Input & Label */
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

      .text-danger {
        color: #ef4444 !important;
        margin-left: 4px;
      }

      .form-control,
      .form-select {
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        padding: 12px 15px;
        font-size: 0.95rem;
        color: #475569;
        background-color: white;
      }

      .form-control:focus {
        border-color: #2c4e8a;
        box-shadow: 0 0 0 4px rgba(44, 78, 138, 0.1);
      }

      /* Helper Text di bawah input */
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

      /* Tombol Perbarui (Biru Tua) */
      .btn-update-government {
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
        text-transform: uppercase;
        letter-spacing: 1px;
      }

      .btn-update-government:hover {
        background-color: #1e3a6d;
        transform: translateY(-2px);
        color: white;
      }

      .footer-note {
        font-size: 0.85rem;
        color: #94a3b8;
        margin-top: 15px;
      }
    </style>
  </head>
  <body>
    <div class="container mt-4">
      <div class="header-government d-flex justify-content-between align-items-center">
        <div>
          <h5 class="fw-semibold mb-1"><i class="bi bi-pencil-square me-2"></i>Edit Pengajuan TEST</h5>
          <p class="small mb-0 opacity-75">Perbarui informasi pengajuan TEST</p>
        </div>
        <a href="{{ route('pengajuan.index') }}" class="btn-back"><i class="bi bi-arrow-left me-1"></i> Kembali</a>
      </div>

      <div class="form-container-main">
        <form id="formEdit">
          <div class="section-box">
            <div class="section-title">Informasi Pemohon</div>
            <div class="row g-4">
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-card-heading"></i>NIK <span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="1111111111111111" />
                <div class="form-text"><i class="bi bi-info-circle"></i> NIK harus sesuai dengan KTP</div>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-person"></i>Nama Lengkap <span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="Test" />
                <div class="form-text"><i class="bi bi-check2-circle"></i> Nama harus sesuai dengan identitas resmi</div>
              </div>
              <div class="col-md-12">
                <label class="form-label"><i class="bi bi-telephone"></i>Nomor Telepon <span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="085850367053" style="max-width: 100%" />
                <div class="form-text"><i class="bi bi-chat-dots"></i> Nomor ini akan digunakan untuk mengirim notifikasi status pengajuan</div>
              </div>
            </div>
          </div>

          <div class="section-box">
            <div class="section-title">Formulir Surat</div>
            <div class="row g-4">
              <div class="col-md-12">
                <label class="form-label"><i class="bi bi-pencil"></i>Nama <span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="Test" />
                <div class="form-text"><i class="bi bi-info-circle"></i> Isi dengan data yang akurat</div>
              </div>
              <div class="col-md-12">
                <label class="form-label"><i class="bi bi-list-ul"></i>Jenis Kelamin <span class="text-danger">*</span></label>
                <select class="form-select">
                  <option>Laki-laki</option>
                  <option selected>Perempuan</option>
                </select>
                <div class="form-text"><i class="bi bi-cursor"></i> Pilih salah satu opsi yang tersedia</div>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-geo-alt"></i>Tempat Lahir <span class="text-danger">*</span></label>
                <input type="text" class="form-control" value="Nganjuk" />
              </div>
              <div class="col-md-6">
                <label class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                <input type="date" class="form-control" value="2026-03-25" />
              </div>
              <div class="col-md-12">
                <div class="form-text"><i class="bi bi-calendar-check"></i> Isi tempat dan tanggal lahir sesuai KTP</div>
              </div>
              <div class="col-md-12">
                <label class="form-label"><i class="bi bi-chat-left-text"></i>Alamat <span class="text-danger">*</span></label>
                <textarea class="form-control" rows="4">Nganjuk</textarea>
                <div class="form-text"><i class="bi bi-info-circle"></i> Jelaskan dengan detail dan jelas</div>
              </div>
            </div>
          </div>

          <div class="text-center mt-4">
            <button type="submit" class="btn btn-update-government"><i class="bi bi-check2-circle"></i> Perbarui Pengajuan</button>
            <div class="footer-note"><i class="bi bi-info-circle me-1"></i> Pastikan semua data yang dimasukkan sudah benar sebelum menyimpan</div>
          </div>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
