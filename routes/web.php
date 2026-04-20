<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengajuanSuratController;
use App\Http\Controllers\PembuatanSuratController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\KabarDesaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivityLogsController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/lupapass', [ForgotPasswordController::class, 'showForgot'])->name('password.request');
Route::post('/lupapass', [ForgotPasswordController::class, 'checkEmail'])->name('password.check');
Route::get('/resetpass', [ForgotPasswordController::class, 'showReset'])->name('password.reset');
Route::post('/resetpass', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');

Route::get('/pengajuan/index', [PengajuanController::class, 'index'])->name('pengajuan.index');
Route::get('/pengajuan/create', [PengajuanController::class, 'create'])->name('pengajuan.create');
Route::get('/pengajuan/edit', [PengajuanController::class, 'edit'])->name('pengajuan.edit');

Route::get('/informasi/kabar', [InformasiController::class, 'kabar'])->name('informasi.kabar');
Route::get('/informasi/detailKabar', [InformasiController::class, 'kabarDetail'])->name('informasi.kabarDetail');
Route::get('/informasi/pengumuman', [InformasiController::class, 'pengumuman'])->name('informasi.pengumuman');
Route::get('/informasi/detailPengumuman', [InformasiController::class, 'pengumumanDetail'])->name('informasi.pengumumanDetail');

Route::get('/dashboard/admin', [DashboardController::class, 'admin'])->name('dashboard.admin');
Route::get('/dashboard/perangkat', [DashboardController::class, 'perangkat'])->name('dashboard.perangkat');

Route::get('/pengajuanSurat', [PengajuanSuratController::class, 'index'])->name('pengajuanSurat.index');
Route::get('/pengajuanSurat/show', [PengajuanSuratController::class, 'show'])->name('pengajuanSurat.show');
Route::get('/pengajuanSurat/edit', [PengajuanSuratController::class, 'edit'])->name('pengajuanSurat.edit');
Route::get('/pengajuanSurat/showw', [PengajuanSuratController::class, 'showw'])->name('pengajuanSurat.showw');

Route::get('/pembuatanSurat', [PembuatanSuratController::class, 'index'])->name('pembuatanSurat.index');
Route::get('/pembuatanSurat/create', [PembuatanSuratController::class, 'create'])->name('pembuatanSurat.create');
Route::get('/pembuatanSurat/riwayat', [PembuatanSuratController::class, 'riwayat'])->name('pembuatanSurat.riwayat');

Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
Route::get('/pengumuman/create', [PengumumanController::class, 'create'])->name('pengumuman.create');
Route::get('/pengumuman/show', [PengumumanController::class, 'show'])->name('pengumuman.show');
Route::get('/pengumuman/edit', [PengumumanController::class, 'edit'])->name('pengumuman.edit');
Route::get('/pengumuman/admin', [PengumumanController::class, 'admin'])->name('pengumuman.admin');

Route::get('/kabar', [KabarDesaController::class, 'index'])->name('kabar.index');
Route::get('/kabar/create', [KabarDesaController::class, 'create'])->name('kabar.create');
Route::get('/kabar/show', [KabarDesaController::class, 'show'])->name('kabar.show');
Route::get('/kabar/edit', [KabarDesaController::class, 'edit'])->name('kabar.edit');
Route::get('/kabar/admin', [KabarDesaController::class, 'admin'])->name('kabar.admin');

Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');

Route::get('/profil/perangkat', [ProfilController::class, 'perangkat'])->name('profil.perangkat');
Route::get('/profil/admin', [ProfilController::class, 'admin'])->name('profil.admin');

Route::get('/pengaturan', [PengaturanController::class, 'index'])->name('pengaturan.index');

Route::get('/template', [TemplateController::class, 'index'])->name('template.index');
Route::get('/template/create', [TemplateController::class, 'create'])->name('template.create');
Route::get('/template/edit', [TemplateController::class, 'edit'])->name('template.edit');

Route::get('/profilDesa', [ProfilDesaController::class, 'index'])->name('profilDesa.index');
Route::get('/profilDesa/edit', [ProfilDesaController::class, 'edit'])->name('profilDesa.edit');

Route::get('/user', [UserController::class, 'index'])->name('users.index');
Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::get('/user/edit', [UserController::class, 'edit'])->name('users.edit');

Route::get('/log', [ActivityLogsController::class, 'index'])->name('activityLogs.index');
Route::get('/log/show', [ActivityLogsController::class, 'show'])->name('activityLogs.show');
