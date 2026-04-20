<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pengajuan Surat - E-Lades</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />

    <link rel="stylesheet" href="/assets/css/pengajuan warga.css" />
  </head>
  <body>
    <div class="container-fluid px-md-5 mt-3 px-3 pt-3">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-body card-government rounded-3 p-4">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="mb-0">
                    <i class="bi bi-file-earmark-text me-2"></i>
                    Daftar Pengajuan Surat
                  </h4>
                  <small class="opacity-75">Pilih jenis surat yang ingin diajukan atau pantau status pengajuan yang sudah ada</small>
                </div>
                <a href="{{ route('landing') }}" class="btn btn-light">
                  <i class="bi bi-arrow-left me-2"></i>
                  Kembali
                </a>
              </div>
            </div>
          </div>

          <div class="card mb-4">
            <div class="card-header bg-government-light border-0">
              <h5 class="text-government-primary mb-0">
                <i class="bi bi-files me-2"></i>
                Pilih Jenis Surat
              </h5>
            </div>
            <div class="card-body">
              <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- 1 -->
                <div class="col">
                  <div class="card h-100 document-card">
                    <div class="card-body text-center">
                      <div class="document-icon mb-3">
                        <i class="bi bi-file-earmark-text fs-1"></i>
                      </div>
                      <h5 class="card-title fw-semibold">Surat Keterangan Usaha (SKU)</h5>
                      <p class="card-text text-muted small">Kode: SKU-001</p>
                      <a href="{{ route('pengajuan.create') }}" class="btn btn-government w-100 mt-3"> <i class="bi bi-plus-circle me-2"></i>Pilih </a>
                    </div>
                  </div>
                </div>

                <!-- 2 SKTM -->
                <div class="col">
                  <div class="card h-100 document-card">
                    <div class="card-body text-center">
                      <div class="document-icon mb-3">
                        <i class="bi bi-file-earmark-text fs-1"></i>
                      </div>
                      <h5 class="card-title fw-semibold">Surat Keterangan Tidak Mampu (SKTM)</h5>
                      <p class="card-text text-muted small">Kode: SKTM-002</p>
                      <a href="{{ route('pengajuan.create') }}" class="btn btn-government w-100 mt-3"> <i class="bi bi-plus-circle me-2"></i>Pilih </a>
                    </div>
                  </div>
                </div>

                <!-- 3 SKCK -->
                <div class="col">
                  <div class="card h-100 document-card">
                    <div class="card-body text-center">
                      <div class="document-icon mb-3">
                        <i class="bi bi-file-earmark-text fs-1"></i>
                      </div>
                      <h5 class="card-title fw-semibold">Pengantar SKCK</h5>
                      <p class="card-text text-muted small">Kode: SKCK-003</p>
                      <a href="{{ route('pengajuan.create') }}" class="btn btn-government w-100 mt-3"> <i class="bi bi-plus-circle me-2"></i>Pilih </a>
                    </div>
                  </div>
                </div>

                <!-- 4 Izin -->
                <div class="col">
                  <div class="card h-100 document-card">
                    <div class="card-body text-center">
                      <div class="document-icon mb-3">
                        <i class="bi bi-file-earmark-text fs-1"></i>
                      </div>
                      <h5 class="card-title fw-semibold">Surat Pengajuan Izin</h5>
                      <p class="card-text text-muted small">Kode: IZN-004</p>
                      <a href="{{ route('pengajuan.create') }}" class="btn btn-government w-100 mt-3"> <i class="bi bi-plus-circle me-2"></i>Pilih </a>
                    </div>
                  </div>
                </div>

                <!-- 5 Solar -->
                <div class="col">
                  <div class="card h-100 document-card">
                    <div class="card-body text-center">
                      <div class="document-icon mb-3">
                        <i class="bi bi-file-earmark-text fs-1"></i>
                      </div>
                      <h5 class="card-title fw-semibold">Surat Pembelian Solar</h5>
                      <p class="card-text text-muted small">Kode: SOL-005</p>
                      <a href="{{ route('pengajuan.create') }}" class="btn btn-government w-100 mt-3"> <i class="bi bi-plus-circle me-2"></i>Pilih </a>
                    </div>
                  </div>
                </div>

                <!-- 6 Penghasilan -->
                <div class="col">
                  <div class="card h-100 document-card">
                    <div class="card-body text-center">
                      <div class="document-icon mb-3">
                        <i class="bi bi-file-earmark-text fs-1"></i>
                      </div>
                      <h5 class="card-title fw-semibold">Surat Keterangan Penghasilan</h5>
                      <p class="card-text text-muted small">Kode: SKP-006</p>
                      <a href="{{ route('pengajuan.create') }}" class="btn btn-government w-100 mt-3"> <i class="bi bi-plus-circle me-2"></i>Pilih </a>
                    </div>
                  </div>
                </div>

                <!-- 7 Beda Nama -->
                <div class="col">
                  <div class="card h-100 document-card">
                    <div class="card-body text-center">
                      <div class="document-icon mb-3">
                        <i class="bi bi-file-earmark-text fs-1"></i>
                      </div>
                      <h5 class="card-title fw-semibold">Surat Beda Nama</h5>
                      <p class="card-text text-muted small">Kode: BDN-007</p>
                      <a href="{{ route('pengajuan.create') }}" class="btn btn-government w-100 mt-3"> <i class="bi bi-plus-circle me-2"></i>Pilih </a>
                    </div>
                  </div>
                </div>

                <!-- 8 Belum Menikah -->
                <div class="col">
                  <div class="card h-100 document-card">
                    <div class="card-body text-center">
                      <div class="document-icon mb-3">
                        <i class="bi bi-file-earmark-text fs-1"></i>
                      </div>
                      <h5 class="card-title fw-semibold">Surat Belum Pernah Menikah</h5>
                      <p class="card-text text-muted small">Kode: BPM-008</p>
                      <a href="{{ route('pengajuan.create') }}" class="btn btn-government w-100 mt-3"> <i class="bi bi-plus-circle me-2"></i>Pilih </a>
                    </div>
                  </div>
                </div>

                <!-- 9 Kelahiran -->
                <div class="col">
                  <div class="card h-100 document-card">
                    <div class="card-body text-center">
                      <div class="document-icon mb-3">
                        <i class="bi bi-file-earmark-text fs-1"></i>
                      </div>
                      <h5 class="card-title fw-semibold">Surat Kelahiran</h5>
                      <p class="card-text text-muted small">Kode: KLH-009</p>
                      <a href="{{ route('pengajuan.create') }}" class="btn btn-government w-100 mt-3"> <i class="bi bi-plus-circle me-2"></i>Pilih </a>
                    </div>
                  </div>
                </div>

                <!-- 10 Kematian -->
                <div class="col">
                  <div class="card h-100 document-card">
                    <div class="card-body text-center">
                      <div class="document-icon mb-3">
                        <i class="bi bi-file-earmark-text fs-1"></i>
                      </div>
                      <h5 class="card-title fw-semibold">Surat Kematian</h5>
                      <p class="card-text text-muted small">Kode: KMT-010</p>
                      <a href="{{ route('pengajuan.create') }}" class="btn btn-government w-100 mt-3"> <i class="bi bi-plus-circle me-2"></i>Pilih </a>
                    </div>
                  </div>
                </div>

                <!-- 11 Penduduk -->
                <div class="col">
                  <div class="card h-100 document-card">
                    <div class="card-body text-center">
                      <div class="document-icon mb-3">
                        <i class="bi bi-file-earmark-text fs-1"></i>
                      </div>
                      <h5 class="card-title fw-semibold">Surat Penduduk</h5>
                      <p class="card-text text-muted small">Kode: PDD-011</p>
                      <a href="{{ route('pengajuan.create') }}" class="btn btn-government w-100 mt-3"> <i class="bi bi-plus-circle me-2"></i>Pilih </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card main-card shadow-sm border-0 mb-4">
            <div class="card-body p-4">
              <div class="row mb-4 align-search">
                <div class="col-lg-8 search-col">
                  <label class="form-label text-government-primary fw-bold">
                    <i class="bi bi-search me-2"></i>
                    Cari dengan Token Pengajuan
                  </label>

                  <div class="search-align">
                    <div class="input-group w-100">
                      <input type="text" id="tokenInput" class="form-control token-input" placeholder="Masukkan token pengajuan..." />
                      <button class="btn btn-government px-4"><i class="bi bi-search me-1"></i> CARI</button>
                    </div>
                  </div>

                  <small class="text-muted info-text">
                    <i class="bi bi-info-circle me-1"></i>
                    Token dikirimkan saat pertama kali mengajukan surat
                  </small>
                </div>

                <div class="col-lg-4 search-col">
                  <label class="form-label text-government-primary fw-bold">
                    <i class="bi bi-clock-history me-2"></i>
                    Akses Cepat
                  </label>

                  <div class="search-align">
                    <button class="btn btn-outline-primary w-100 btn-riwayat">
                      <i class="bi bi-clock-history me-2"></i>
                      Lihat Riwayat Saya
                    </button>
                  </div>
                </div>
              </div>

              <div id="pengajuanList">
                <div class="pengajuan-item card border-0 bg-light" style="border-radius: 12px">
                  <div class="card-body p-3">
                    <div class="row align-items-center">
                      <div class="col-md-8">
                        <h5 class="text-government-primary mb-3 fw-bold">
                          <i class="bi bi-file-earmark-text me-2"></i>
                          SURAT KETERANGAN USAHA (SKU)
                        </h5>
                        <div class="row g-2">
                          <div class="col-sm-6">
                            <div class="d-flex align-items-center text-muted mb-1">
                              <i class="bi bi-person me-2"></i>
                              <span><strong>Pemohon:</strong> Test</span>
                            </div>
                            <div class="d-flex align-items-center text-muted">
                              <i class="bi bi-calendar3 me-2"></i>
                              <span><strong>Tanggal:</strong> 25 Maret 2026</span>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="d-flex align-items-center text-muted mb-1">
                              <i class="bi bi-hash me-2"></i>
                              <span><strong>Token:</strong> QV7HF7vW9LlWKV</span>
                            </div>
                            <div class="d-flex align-items-center text-muted">
                              <i class="bi bi-telephone me-2"></i>
                              <span><strong>No. HP:</strong> 085850367053</span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 text-md-end mt-4 mt-md-0">
                        <span class="badge bg-warning text-white mb-3 d-inline-block px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.85rem"> <i class="bi bi-clock-fill me-1"></i> TERTUNDA </span>
                        <div class="d-flex gap-2 justify-content-md-end">
                          <button class="btn btn-sm btn-outline-primary px-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#detailModal"><i class="bi bi-eye me-1"></i> Detail</button>
                          <a href="{{ route('pengajuan.edit') }}" class="btn btn-sm btn-outline-warning px-3 shadow-sm"> <i class="bi bi-pencil me-1"></i> Edit </a>
                          <button class="btn btn-sm btn-outline-danger px-3 shadow-sm" onclick="hapusPengajuan('${pengajuan.token}')"><i class="bi bi-trash me-1"></i> Hapus</button>
                        </div>
                      </div>

                      <!-- MODAL DETAIL -->
                      <div class="modal fade" id="detailModal" tabindex="-1">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                          <div class="modal-content border-0 shadow-lg rounded-4">
                            <!-- HEADER -->
                            <div class="modal-header card-government text-white rounded-top-4">
                              <h5 class="modal-title d-flex align-items-center gap-2">
                                <i class="bi bi-file-earmark-text"></i>
                                Detail Pengajuan
                              </h5>
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- BODY -->
                            <div class="modal-body p-4">
                              <!-- CARD UTAMA -->
                              <div class="p-4 rounded-4 bg-light shadow-sm">
                                <!-- JUDUL -->
                                <h5 id="detailNama" class="fw-bold mb-3 d-flex align-items-center gap-2">
                                  <i class="bi bi-file-earmark-text"></i>
                                  SURAT KETERANGAN USAHA (SKU)
                                </h5>

                                <!-- INFO -->
                                <div class="row mb-3">
                                  <div class="col-md-6">
                                    <p><strong>Pemohon:</strong> <span id="detailPemohon">Test</span></p>
                                    <p><strong>Tanggal:</strong> <span id="detailTanggal">25/3/2026</span></p>
                                  </div>

                                  <div class="col-md-6">
                                    <p>
                                      <strong>Status:</strong>
                                      <span id="detailStatus" class="badge bg-warning text-white px-3 py-2 rounded-pill"> <i class="bi bi-gear me-1"></i> Tertunda </span>
                                    </p>
                                    <p><strong>Token:</strong> <span id="detailToken">QV7HF7vW9LlWKV</span></p>
                                  </div>
                                </div>

                                <hr />

                                <!-- DOKUMEN -->
                                <h6 class="fw-semibold mb-3">Dokumen Persyaratan</h6>

                                <div class="alert alert-light border rounded-3 d-flex align-items-center gap-2">
                                  <i class="bi bi-info-circle"></i>
                                  Tidak ada dokumen yang diunggah
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      // JavaScript disederhanakan hanya untuk fungsi utilitas
      function formatTanggal(tgl) {
        if (!tgl) return "-";
        const date = new Date(tgl);
        return date.toLocaleDateString("id-ID", { day: "numeric", month: "long", year: "numeric" });
      }

      function hapusPengajuan(token) {
        Swal.fire({
          title: "Konfirmasi Hapus",
          text: "Apakah Anda yakin ingin menghapus pengajuan ini?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#d33",
          cancelButtonColor: "#3085d6",
          confirmButtonText: "Ya, hapus!",
          cancelButtonText: "Batal",
        }).then((result) => {
          if (result.isConfirmed) {
            let pengajuanHistory = JSON.parse(localStorage.getItem("pengajuanHistory") || "{}");
            delete pengajuanHistory[token];
            localStorage.setItem("pengajuanHistory", JSON.stringify(pengajuanHistory));

            loadPengajuanFromStorage();

            Swal.fire("Berhasil", "Data dihapus", "success");
          }
        });
      }

      function loadPengajuanByToken() {
        const token = document.getElementById("tokenInput").value.trim();
        if (!token) {
          Swal.fire({ title: "Perhatian!", text: "Silakan masukkan token pengajuan", icon: "warning" });
          return;
        }
      }
    </script>
  </body>
</html>
