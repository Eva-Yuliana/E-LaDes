
                <div class="tab-pane fade" id="landing-settings" role="tabpanel">
                  <div class="card shadow-sm mb-4 border-0" style="border-radius: 8px; overflow: hidden">
                    <div class="card-header text-white py-3" style="background-color: #f39c12">
                      <h5 class="mb-0 fw-semibold"><i class="bi bi-house-door me-2"></i>Pengaturan Halaman Utama</h5>
                    </div>

                    <div class="card-body p-4">
                      <div class="alert border-0 py-3 mb-4" style="background-color: #e1f5fe; color: #01579b; border-radius: 8px">
                        <div class="d-flex">
                          <i class="bi bi-info-circle-fill me-3 fs-5"></i>
                          <div>Pengaturan ini akan memengaruhi tampilan halaman utama (landing page) yang dilihat oleh pengunjung website.</div>
                        </div>
                      </div>

                      <ul class="nav nav-tabs border-bottom-0 mb-4" id="landingTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active fw-bold px-4 py-2" id="statistik-tab" data-bs-toggle="tab" data-bs-target="#statistik" type="button" role="tab" style="border-radius: 8px 8px 0 0">
                            <i class="bi bi-graph-up me-2"></i>Statistik
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link px-4 py-2" id="visi-misi-tab" data-bs-toggle="tab" data-bs-target="#visi-misi" type="button" role="tab"><i class="bi bi-eye me-2"></i>Visi & Misi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link px-4 py-2" id="berita-tab" data-bs-toggle="tab" data-bs-target="#berita" type="button" role="tab"><i class="bi bi-newspaper me-2"></i>Berita</button>
                        </li>
                      </ul>

                      <div class="tab-content pt-2" id="landingTabContent">
                        <div class="tab-pane fade show active" id="statistik" role="tabpanel">
                          <h5 class="fw-semibold mb-3 pb-2 border-bottom" style="color: #2c3e50">Statistik</h5>

                          <div class="mb-2">
                            <label class="form-label fw-bsemiold text-dark" style="font-size: 1.1rem">Tampilkan Statistik</label>
                            <input type="text" class="form-control py-2" value="Ya" style="border-color: #dee2e6; border-radius: 8px" />
                            <div class="form-text mt-2 text-muted" style="font-size: 0.9rem">Aktifkan untuk menampilkan bagian statistik pada halaman utama</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="visi-misi" role="tabpanel">
                  <h5 class="fw-semibold mb-3 pb-2 border-bottom" style="color: #2c3e50">Visi & Misi</h5>

                  <div class="mb-4">
                    <label class="form-label fw-semibold text-dark">Konten Misi</label>
                    <textarea class="form-control" rows="5" style="border-color: #dee2e6; border-radius: 8px">
Mengembangkan sistem pelayanan digital yang mudah diakses
Meningkatkan transparansi dan akuntabilitas pemerintah desa
Memberikan pelayanan berkualitas dan responsif
Memberdayakan masyarakat melalui teknologi informasi</textarea
                    >
                    <div class="form-text mt-2 text-muted">Setiap baris akan menjadi satu poin misi</div>
                  </div>

                  <div class="mb-4">
                    <label class="form-label fw-semibold text-dark">Judul Misi</label>
                    <input type="text" class="form-control py-2" value="MISI" style="border-color: #dee2e6; border-radius: 8px" />
                  </div>

                  <div class="mb-4">
                    <label class="form-label fw-semibold text-dark">Konten Visi</label>
                    <textarea class="form-control" rows="3" style="border-color: #dee2e6; border-radius: 8px">
Mewujudkan desa yang maju, mandiri, dan sejahtera melalui pelayanan publik yang berbasis teknologi digital, transparan, dan berorientasi pada kepuasan masyarakat.</textarea
                    >
                  </div>

                  <div class="mb-2">
                    <label class="form-label fw-semibold text-dark">Judul Visi</label>
                    <input type="text" class="form-control py-2" value="VISI" style="border-color: #dee2e6; border-radius: 8px" />
                  </div>
                </div>

                <div class="tab-pane fade" id="berita" role="tabpanel">
                  <h5 class="fw-semibold mb-3 pb-2 border-bottom" style="color: #2c3e50">Berita & Pengumuman</h5>

                  <div class="mb-4">
                    <label class="form-label fw-semibold text-dark">Tampilkan Berita</label>
                    <input type="text" class="form-control py-2" value="Ya" style="border-color: #dee2e6; border-radius: 8px" />
                  </div>

                  <div class="mb-2">
                    <label class="form-label fw-semibold text-dark">Tampilkan Pengumuman</label>
                    <input type="text" class="form-control py-2" value="Ya" style="border-color: #dee2e6; border-radius: 8px" />
                  </div>
                </div>