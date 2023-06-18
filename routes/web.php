<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MotifController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\PointController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'show'])->name('home');

Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::get('/register-kuis', [RegisterController::class, 'kuisRegister'])->name('registerKuis.show');
Route::post('/halamanregister', [RegisterController::class, 'store'])->name('register.store');
Route::post('/registerkuis', [RegisterController::class, 'storeKuis'])->name('registerkuis.store');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::get('/loginKuis', [LoginController::class, 'showKuis'])->name('loginKuis');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
Route::post('/loginKuis', [LoginController::class, 'authKuis'])->name('login.authKuis');
Route::get('/quiz', [QuizController::class, 'show'])->name('quiz.show');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/data-pengguna', [AdminController::class, 'showDataPengguna'])->name('admin.showDataPengguna');
        Route::resource('admin', AdminController::class)->name('*', 'admin'); 
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/data-motif-sasirangan', [MotifController::class, 'show'])->name('motif.show');
        Route::resource('data_motif', MotifController::class)->name('*', 'data_motif');
        Route::get('/data-style-modern', [StyleController::class, 'show'])->name('style.show');
        Route::resource('data_style', StyleController::class)->name('*', 'data_style');
        Route::get('/data-soal-kuis', [QuizController::class, 'showData'])->name('datakuis.show');
        Route::resource('data_kuis', QuizController::class)->name('*', 'data_kuis');
        Route::get('/data-point', [PointController::class, 'showDataPoint'])->name('datapoint.show');
        Route::resource('data_point', PointController::class)->name('*', 'data_point');
    });
});

Route::get('/instruksi-kuis', [QuizController::class, 'show'])->name('quiz.show');
Route::match(['get', 'post'], '/kuis', [QuizController::class, 'showKuis'])->name('kuis.show');

// Route::get('/skor-kuis/{score}/{user}', [PointController::class, 'showNilai'])->name('score.show'); 
Route::match(['get', 'post'], '/leaderboard/{score}/{user}', [PointController::class, 'storePoint'])->name('leaderboard.show');
Route::get('/leaderboard', [PointController::class, 'leaderboard'])->name('peringkat.show');
Route::get('/data_point/pdf',[PointController::class,'exportPDF'])->name('export.pdf');

Route::get('/motif', [MotifController::class, 'showmotif'])->name('motifdetail.show');     
Route::get('/detail/{id}', [MotifController::class, 'detailmotif']) ->name('motif.detail');