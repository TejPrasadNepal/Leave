<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');


Route::get('view/employee', [EmployeeController:: class, 'ViewEmployee'])->name('view.employee');
Route::get('add/employee' , [EmployeeController:: class, 'AddEmployee'])->name('add.employee');
Route::post('store/employee', [EmployeeController:: class, 'StoreEmployee'])->name('store.employee');
Route::get('edit/employee/{id}', [EmployeeController:: class, 'EditEmployee'])->name('edit.employee');
Route::post('update/employee/{id}', [EmployeeController:: class, 'UpdateEmployee'])->name('update.employee');
Route::get('delete/employee/{id}', [EmployeeController:: class, 'DeleteEmployee'])->name('delete.employee');