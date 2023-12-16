<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\SiswaController;
use App\Http\Middleware\Pengajar;
use App\Models\Course;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Controllers\ShowprofilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'App\Http\Controllers\HomeController@index');


Route::middleware('auth', 'pengajar')->group(function () {
    Route::get('pengajar/jadwal', [PengajarController::class, 'pengajarJadwal'])->name('pengajar/jadwal');
    Route::get('pengajar/pengajarhome', [PengajarController::class, 'index'])->name('pengajar/jadwal');
});

Route::middleware('auth', 'admin')->group(function () {
    Route::get('admin/manajemen_course.index', [CourseController::class, 'index'])->name('/manajemen_course.index');
    Route::post('/admin/manajemen_course.index', [CourseController::class, 'store']);
    Route::get('/admin/manajemen_course.create', [CourseController::class, 'create']);
    Route::get('/admin/manajemen_course/{id}/edit', [CourseController::class, 'edit']);
    Route::put('/admin/manajemen_course/{id}', [CourseController::class, 'update']);
    Route::delete('/admin/manajemen_course/{id}', [CourseController::class, 'destroy']);
    // 
    Route::get('/admin/manajemen_user.index', [UserController::class, 'index'])->name('/manajemen_user.index');
    Route::post('/admin/manajemen_user.index', [UserController::class, 'store']);
    Route::get('/admin/manajemen_user.create', [UserController::class, 'create']);
    Route::get('/admin/manajemen_user/{id}/edit', [UserController::class, 'edit']);
    Route::put('/admin/manajemen_user/{id}', [UserController::class, 'update']);
    Route::delete('/admin/manajemen_user/{id}', [UserController::class, 'destroy']);
    // 
    Route::get('admin/manajemen_course.listDaftar', [SiswaController::class, 'listDaftar'])->name('/manajemen_siswa.listDaftar');
});

Route::resource('users', ProfilController::class)->only('show', 'edit', 'update')->middleware('auth');
Route::get('user.profile', [ProfileController::class, 'show'])->name('user.profile');

Route::middleware('auth')->group(function () {
    Route::get('user.course', [CourseController::class, 'DaftarKelas'])->name('user.course');
    Route::get('user.userhome', [UserController::class, 'userHome'])->name('user/home');
    Route::get('/user/{id}/detail', [CourseController::class, 'detail']);
    Route::get('user/{id}/daftar', [SiswaController::class, 'daftar']);
    Route::post('/daftar', [SiswaController::class, 'store'])->name('user.daftar');
});



require __DIR__ . '/auth.php';
