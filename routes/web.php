<?php

use App\Models\pelanggaran;
 use App\Http\Controllers\SiswaController;
 use App\Http\Controllers\PelanggaranController;
 use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelanggaranSiswaController;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;

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
     return view('login');})->name('login');

Route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/pelanggaransiswa',[PelanggaranSiswaController::class,'psiswa'])->name('pelanggaransiswa');



// Route::get('/guru', function () {
//     return view('dataguru');
// });
// Route::get('/siswa', function () {
//     return view('datasiswa');
// });
// Route::get('/pelanggaran', function () {
//     return view('daftarpelanggaran');
// });



Route::group(['middleware' => ['auth']], function(){
    Route::get('/dasboard', function () {
        return view('dasboard');
    });


    // siswa start
Route::get('/siswa',[SiswaController::class, 'siswa'])->name('siswa');

Route::get('/tambahsiswa',[SiswaController::class, 'tambahsiswa'])->name('tambahsiswa');
Route::post('/insertdatasiswa',[SiswaController::class, 'insertdatasiswa'])->name('insertdatasiswa');

Route::get('/tampilkandatasiswa/{id}',[SiswaController::class, 'tampilkandatasiswa'])->name('tampilkandatasiswa');
Route::get('/detaildatasiswa/{id}',[SiswaController::class, 'detaildatasiswa'])->name('detaildatasiswa');
Route::post('/updatedatasiswa/{id}',[SiswaController::class, 'updatedatasiswa'])->name('updatedatasiswa');

Route::get('/deletedatasiswa/{id}',[SiswaController::class, 'deletedatasiswa'])->name('deletedatasiswa');
// siswa end

// pelanggaran start
Route::get('/pelanggaran',[PelanggaranController::class, 'pelanggaran'])->name('pelanggaran');

Route::get('/tambahpelanggaran',[PelanggaranController::class, 'tambahpelanggaran'])->name('tambahpelanggaran');
Route::post('/insertdatapelanggaran',[PelanggaranController::class, 'insertdatapelanggaran'])->name('insertdatapelanggaran');

Route::get('/tampilkandatapelanggaran/{id}',[PelanggaranController::class, 'tampilkandatapelanggaran'])->name('tampilkandatapelanggaran');
Route::post('/updatedatapelanggaran/{id}',[PelanggaranController::class, 'updatedatapelanggaran'])->name('updatedatapelanggaran');

Route::get('/deletedatapelanggaran/{id}',[PelanggaranController::class, 'deletedatapelanggaran'])->name('deletedatapelanggaran');

// pelanggaran end

//guru start
Route::get('/guru',[GuruController::class, 'dataguru'])->name('guru');

Route::get('/tambahguru',[GuruController::class, 'tambahguru'])->name('tambahguru');
Route::post('/insertdataguru',[GuruController::class, 'insertdataguru'])->name('insertdataguru');

Route::get('/tampilkandataguru/{id}',[GuruController::class, 'tampilkandataguru'])->name('tampilkandataguru');
Route::get('/detaildataguru/{id}',[GuruController::class, 'detaildataguru'])->name('detaildataguru');
Route::post('/updatedataguru/{id}',[GuruController::class, 'updatedataguru'])->name('updatedataguru');

Route::get('/deletedataguru/{id}',[GuruController::class, 'deletedataguru'])->name('deletedataguru');
//guru end
//pelanggar start

Route::get('/pelanggaransiswa',[PelanggaranSiswaController::class,'psiswa'])->name('pelanggaransiswa');


Route::get('/tambahpelanggar',[PelanggaranSiswaController::class,'tambahpelanggar'])->name('tambahpelanggar');
Route::post('/insertpelanggar',[PelanggaranSiswaController::class,'insertpelanggar'])->name('insertpelanggar');

Route::get('/detailpelanggar',[PelanggaranSiswaController::class,'tampilkandetailpelangar'])->name('detailpelanggar');

Route::get('/deletepelangar/{id}',[PelanggaranSiswaController::class,'deletepelangar'])->name('deletepelangar');

Route::get('/editpelanggar/{id}',[PelanggaranSiswaController::class, 'editpelanggar'])->name('editpelanggar');
Route::post('/updatepelanggar/{id}',[PelanggaranSiswaController::class, 'updatepelanggar'])->name('updatepelanggar');
//pelanggar end


});