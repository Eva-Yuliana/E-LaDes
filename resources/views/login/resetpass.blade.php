<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reset Password - E-Lades Sistem Informasi Desa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />

    <style>
      /* --- CSS STYLES --- */
      .reset-bg {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        min-height: 100vh;
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .reset-bg::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="0.5" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="50" r="0.3" fill="rgba(255,255,255,0.05)"/><circle cx="80" cy="30" r="0.4" fill="rgba(255,255,255,0.08)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        opacity: 0.1;
      }

      .reset-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow:
          0 25px 45px rgba(0, 0, 0, 0.1),
          0 0 0 1px rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        overflow: hidden;
      }

      .reset-header {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: white;
        text-align: center;
        padding: 2rem;
        margin: -1.5rem -1.5rem 2rem -1.5rem;
        position: relative;
      }

      .reset-header::after {
        content: "";
        position: absolute;
        bottom: -20px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-top: 20px solid #2a5298;
      }

      .reset-logo {
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.1);
        border: 3px solid rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        margin: 0 auto 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
      }

      .form-floating {
        position: relative;
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
      }

      .form-floating .form-control {
        height: 58px;
        padding: 1rem 1rem 0.5rem 1rem;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        background: #f8f9fa;
        transition: all 0.3s ease;
        font-size: 1rem;
      }

      .form-floating .form-control:focus {
        border-color: #2a5298;
        background: white;
        box-shadow: 0 0 0 0.2rem rgba(42, 82, 152, 0.25);
        outline: none;
      }

      .form-floating label {
        padding: 1rem;
        font-weight: 500;
        color: #6c757d;
        transition: all 0.3s ease;
      }

      .btn-reset {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        border: none;
        color: white;
        padding: 0.875rem 2rem;
        border-radius: 12px;
        font-weight: 600;
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(42, 82, 152, 0.3);
        width: 100%;
      }

      .btn-reset:hover {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(42, 82, 152, 0.4);
        color: white;
      }

      .btn-back {
        background: transparent;
        border: 2px solid #6c757d;
        color: #6c757d;
        padding: 0.875rem 2rem;
        border-radius: 12px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        text-align: center;
        transition: all 0.3s ease;
        width: 100%;
      }

      .btn-back:hover {
        background: #6c757d;
        color: white;
        text-decoration: none;
      }

      .password-requirements {
        background: rgba(42, 82, 152, 0.1);
        border: 1px solid rgba(42, 82, 152, 0.2);
        border-radius: 8px;
        padding: 1rem;
        margin-bottom: 1.5rem;
      }

      .requirement {
        display: flex;
        align-items: center;
        margin-bottom: 0.5rem;
        font-size: 0.875rem;
        transition: all 0.3s ease;
      }

      .requirement.valid {
        color: #198754;
      }

      .requirement.invalid {
        color: #6c757d;
      }

      .error-message {
        background: rgba(220, 53, 69, 0.1);
        border: 1px solid rgba(220, 53, 69, 0.2);
        color: #dc3545;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        font-size: 0.875rem;
        margin-top: 0.5rem;
      }

      @media (max-width: 768px) {
        .reset-card {
          margin: 1rem;
          border-radius: 15px;
        }
        .reset-header {
          padding: 1.5rem;
        }
        .reset-logo {
          width: 60px;
          height: 60px;
          font-size: 1.5rem;
        }
      }
    </style>
  </head>
  <body>
    <div class="reset-bg">
      <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh">
          <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="reset-card">
              <div class="card-body p-4">
                <div class="reset-header">
                  <div class="reset-logo">
                    <i class="bi bi-shield-lock"></i>
                  </div>
                  <h4 class="mb-1 fw-bold">Reset Password</h4>
                  <p class="mb-0 opacity-75">Buat Password Baru</p>
                </div>

                <form action="#" method="POST" novalidate id="resetForm">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" value="user@example.com" placeholder="Email" required readonly />
                    <label for="email"> <i class="bi bi-envelope me-2"></i>Email </label>
                  </div>

                  <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password Baru" required />
                    <label for="password"> <i class="bi bi-lock me-2"></i>Password Baru </label>
                  </div>

                  <div class="form-floating">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password" required />
                    <label for="password_confirmation"> <i class="bi bi-lock-fill me-2"></i>Konfirmasi Password </label>
                  </div>

                  <div class="password-requirements">
                    <h6 class="mb-2">
                      <i class="bi bi-shield-check me-2"></i>
                      Syarat Password:
                    </h6>
                    <div class="requirement invalid" id="req-length">
                      <i class="bi bi-circle me-2"></i>
                      Minimal 8 karakter
                    </div>
                    <div class="requirement invalid" id="req-match">
                      <i class="bi bi-circle me-2"></i>
                      Password dan konfirmasi harus sama
                    </div>
                  </div>

                  <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-reset" id="submitBtn" disabled style="opacity: 0.6">
                      <i class="bi bi-shield-check me-2"></i>
                      Reset Password
                    </button>
                  </div>

                  <div class="text-center">
                    <a href="{{ route('login') }}" class="btn-back">
                      <i class="bi bi-arrow-left me-2"></i>
                      Kembali ke Login
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const passwordInput = document.getElementById("password");
        const confirmInput = document.getElementById("password_confirmation");
        const submitBtn = document.getElementById("submitBtn");
        const resetForm = document.getElementById("resetForm");

        // Fungsi validasi password real-time
        function validatePassword() {
          const password = passwordInput.value;
          const confirm = confirmInput.value;

          // Cek Panjang Karakter
          const lengthReq = document.getElementById("req-length");
          if (password.length >= 8) {
            lengthReq.classList.remove("invalid");
            lengthReq.classList.add("valid");
            lengthReq.querySelector("i").className = "bi bi-check-circle me-2";
          } else {
            lengthReq.classList.remove("valid");
            lengthReq.classList.add("invalid");
            lengthReq.querySelector("i").className = "bi bi-circle me-2";
          }

          // Cek Kesamaan Password
          const matchReq = document.getElementById("req-match");
          if (confirm && password === confirm) {
            matchReq.classList.remove("invalid");
            matchReq.classList.add("valid");
            matchReq.querySelector("i").className = "bi bi-check-circle me-2";
          } else {
            matchReq.classList.remove("valid");
            matchReq.classList.add("invalid");
            matchReq.querySelector("i").className = "bi bi-circle me-2";
          }

          // Aktif/Nonaktifkan Tombol Submit
          const isValid = password.length >= 8 && confirm && password === confirm;
          submitBtn.disabled = !isValid;

          if (isValid) {
            submitBtn.style.opacity = "1";
          } else {
            submitBtn.style.opacity = "0.6";
          }
        }

        // Event Listeners untuk input
        passwordInput.addEventListener("input", validatePassword);
        confirmInput.addEventListener("input", validatePassword);

        // Inisialisasi awal
        validatePassword();

        // Handling saat Form di Submit
        resetForm.addEventListener("submit", function (e) {
          // e.preventDefault(); // Hapus tanda komentar jika ingin mengetes tanpa reload

          submitBtn.disabled = true;
          submitBtn.innerHTML = '<i class="bi bi-arrow-clockwise me-2 spin"></i>Mereset Password...';

          // Injeksi CSS Animasi Spin (Sesuai kode original)
          const style = document.createElement("style");
          style.textContent = `
                    .spin {
                        animation: spin 1s linear infinite;
                        display: inline-block;
                    }
                    @keyframes spin {
                        0% { transform: rotate(0deg); }
                        100% { transform: rotate(360deg); }
                    }
                `;
          document.head.appendChild(style);
        });

        // Animasi Scale pada Focus (Smooth Focus)
        const formControls = document.querySelectorAll(".form-control");
        formControls.forEach((control) => {
          control.addEventListener("focus", function () {
            this.parentElement.style.transform = "scale(1.02)";
          });

          control.addEventListener("blur", function () {
            this.parentElement.style.transform = "scale(1)";
          });
        });
      });
    </script>
  </body>
</html>
