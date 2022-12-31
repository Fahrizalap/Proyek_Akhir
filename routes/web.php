<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MakulController;
use App\Models\dosen;
use App\Models\mahasiswa;
use App\Models\makul;

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
    return view('welcome', ['title' => ' Proyek Akhir ']);
});

Route::get('/dashboard', function () {
    return view('main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('readdosen',[DosenController::class, 'index'])->name('readdosen')->middleware('auth');
Route::get('createdosen',[DosenController::class, 'create'])->name('createdosen')->middleware('auth');
Route::post('insert',[DosenController::class, 'insert'])->name('insert')->middleware('auth');
Route::get('editdosen/{nip}',[DosenController::class, 'edit'])->name('editdosen')->middleware('auth');
Route::post('update/{nip}',[DosenController::class, 'update'])->name('update')->middleware('auth');
Route::get('delete/{nip}',[DosenController::class, 'delete'])->name('delete')->middleware('auth');

Route::get('/mahasiswa', function(){
    return view('mahasiswa.mahasiswa');
});

Route::get('readmahasiswa',[MahasiswaController::class, 'index'])->name('readmahasiswa')->middleware('auth');
Route::get('createmahasiswa',[MahasiswaController::class, 'create'])->name('createmahasiswa')->middleware('auth');
Route::post('insert-mahasiswa',[MahasiswaController::class, 'insert'])->name('insert-mahasiswa')->middleware('auth');
Route::get('editmahasiswa/{nim}',[MahasiswaController::class, 'edit'])->name('editmahasiswa')->middleware('auth');
Route::post('update-mahasiswa/{nim}',[MahasiswaController::class, 'update'])->name('update-mahasiswa')->middleware('auth');
Route::get('delete-mahasiswa/{nim}',[MahasiswaController::class, 'delete'])->name('delete-mahasiswa')->middleware('auth');

Route::get('readmakul',[MakulController::class, 'index'])->name('readmakul')->middleware('auth');
Route::get('createmakul',[MakulController::class, 'create'])->name('createmakul')->middleware('auth');
Route::post('insert-makul',[MakulController::class, 'insert'])->name('insert-makul')->middleware('auth');
Route::get('editmakul/{makul}',[MakulController::class, 'edit'])->name('editmakul')->middleware('auth');
Route::post('update-makul/{makul}',[MakulController::class, 'update'])->name('update-makul')->middleware('auth');
Route::get('delete-makul/{makul}',[MakulController::class, 'delete'])->name('delete-makul')->middleware('auth');

Route::get('/dashboard', function () {
    $dosen = dosen::count();
    $mhs   = mahasiswa::count();
    $makul = makul::count();
    return view('main', compact('dosen','mhs','makul'));
});