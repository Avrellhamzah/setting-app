<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\backend\SettingController as BackendSettingController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/manage/setting', [BackendSettingController::class, 'index'])->name('backend.manage.setting');
Route::get('/manage/setting/create', [BackendSettingController::class, 'create'])->name('backend.create.setting');
Route::post('/manage/setting/process/create', [BackendSettingController::class, 'create_process'])->name('backend.process.create.setting');
Route::get('/manage/setting/show/{setting}', [BackendSettingController::class, 'show'])->name('backend.show.setting');
Route::get('/manage/setting/edit/{setting}', [BackendSettingController::class, 'edit'])->name('backend.edit.setting');
Route::post('/manage/setting/edit/process/{setting}', [BackendSettingController::class, 'edit_process'])->name('backend.edit.process.setting');
Route::delete('/manage/setting/delete/{id}', [BackendSettingController::class, 'destroy'])->name('backend.delete.setting');

