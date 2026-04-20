<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - E-Lades Sistem Informasi Desa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />

    <style>
      /* --- CSS DARI @push('styles') --- */
      .login-bg {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        min-height: 100vh;
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .login-bg::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="0.5" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="50" r="0.3" fill="rgba(255,255,255,0.05)"/><circle cx="80" cy="30" r="0.4" fill="rgba(255,255,255,0.08)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        opacity: 0.1;
      }

      /* Floating shapes animation */
      .login-bg::after {
        content: "";
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background:
          radial-gradient(circle at 20% 20%, rgba(255, 215, 0, 0.1) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
          radial-gradient(circle at 60% 30%, rgba(255, 215, 0, 0.05) 0%, transparent 50%);
        animation: float 20s linear infinite;
        pointer-events: none;
      }

      @keyframes float {
        0% {
          transform: rotate(0deg);
        }
        100% {
          transform: rotate(360deg);
        }
      }

      .login-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow:
          0 25px 45px rgba(0, 0, 0, 0.1),
          0 0 0 1px rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        z-index: 1;
      }

      .login-header {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: white;
        text-align: center;
        padding: 2rem;
        margin: -1.5rem -1.5rem 2rem -1.5rem;
        position: relative;
      }

      .login-header::after {
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

      .login-logo {
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

      .btn-login {
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
      }

      .btn-login:hover {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(42, 82, 152, 0.4);
        color: white;
      }

      .forgot-password {
        color: #2a5298;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
      }

      .forgot-password:hover {
        color: #1e3c72;
        text-decoration: underline;
      }

      .system-info {
        text-align: center;
        color: rgba(255, 255, 255, 0.8);
        margin-top: 2rem;
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

      /* Custom checkbox styling */
      .form-check-input {
        width: 1.2em;
        height: 1.2em;
        border: 2px solid #2a5298;
        border-radius: 4px;
        background-color: transparent;
        transition: all 0.3s ease;
      }

      .form-check-input:checked {
        background-color: #2a5298;
        border-color: #2a5298;
      }

      .form-check-input:focus {
        box-shadow: 0 0 0 0.2rem rgba(42, 82, 152, 0.25);
      }

      .form-check-label {
        font-weight: 500;
        cursor: pointer;
        user-select: none;
        transition: color 0.3s ease;
      }

      .form-check-label:hover {
        color: #2a5298 !important;
      }

      @media (max-width: 768px) {
        .login-card {
          margin: 1rem;
          border-radius: 15px;
        }
        .login-header {
          padding: 1.5rem;
        }
        .login-logo {
          width: 60px;
          height: 60px;
          font-size: 1.5rem;
        }
      }
    </style>
  </head>
  <body>
    <div class="login-bg">
      <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh">
          <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="login-card">
              <div class="card-body p-4">
                <div class="login-header">
                  <div class="login-logo">
                    <i class="bi bi-shield-check"></i>
                  </div>
                  <h4 class="mb-1 fw-bold">E-LADES</h4>
                  <p class="mb-0 opacity-75">Sistem Informasi Desa</p>
                </div>

                <form id="formLogin" novalidate>
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required autofocus />
                    <label for="email"> <i class="bi bi-envelope me-2"></i>Email </label>
                    <div id="emailError" class="error-message" style="display: none"><i class="bi bi-exclamation-triangle me-1"></i> Format email tidak valid.</div>
                  </div>

                  <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
                    <label for="password"> <i class="bi bi-lock me-2"></i>Password </label>
                  </div>

                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" value="1" />
                      <label class="form-check-label text-muted" for="remember"> Ingat saya </label>
                    </div>
                    <a href="{{ route('password.request') }}" class="forgot-password">
                      <i class="bi bi-key me-1"></i>
                      Lupa Password?
                    </a>
                  </div>

                  <div class="d-grid">
                    <button type="submit" class="btn btn-login">
                      <i class="bi bi-box-arrow-in-right me-2"></i>
                      Masuk Sistem
                    </button>
                  </div>
                </form>

                <div class="system-info">
                  <small class="d-block mt-3 text-muted">
                    <i class="bi bi-shield-lock me-1"></i>
                    Sistem aman dan terpercaya untuk pelayanan desa
                  </small>
                  <small class="d-block mt-2 text-muted opacity-75">
                    <i class="bi bi-info-circle me-1"></i>
                    Dengan mencentang "Ingat saya", Anda akan tetap login selama 30 hari
                  </small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      /* --- JAVASCRIPT DARI @push('scripts') --- */
      document.addEventListener("DOMContentLoaded", function () {
        const loginForm = document.getElementById("formLogin");
        const loginButton = document.querySelector(".btn-login");
        const originalButtonText = loginButton.innerHTML;

        loginForm.addEventListener("submit", function (e) {
          e.preventDefault();

          const email = document.getElementById("email").value;
          const password = document.getElementById("password").value;
          const emailError = document.getElementById("emailError");

          // reset error
          emailError.style.display = "none";

          // validasi email sederhana
          if (!email.includes("@")) {
            emailError.style.display = "block";
            return;
          }

          loginButton.disabled = true;
          loginButton.innerHTML = '<i class="bi bi-arrow-clockwise me-2 spin"></i>Memproses...';

          setTimeout(() => {
            // akun dummy
            if (email === "admin@elades.id" && password === "123456") {
              alert("Login berhasil!");

              window.location.href = "{{ route('dashboard.admin') }}";
            } else {
              alert("Email atau password salah!");

              loginButton.disabled = false;
              loginButton.innerHTML = originalButtonText;
            }
          }, 1500);
        });

        // Animasi Focus Smooth (Scale Effect)
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
