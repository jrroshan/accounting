<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Expense\CategoryController;
use App\Http\Controllers\Expense\ExpenseController;
use App\Http\Controllers\Fee\FeeController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Transaction\TransactionController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix'=>'admin'],function($router){
    $router->get('/',[DashboardController::class,'index'])->name('admin.dashboard');
    $router->resource('/students',StudentController::class)->names('admin.students');

    $router->get('/students/{student}/view',[StudentController::class,'view'])->name('admin.students.view');
    $router->get('/students/{student}/fees',[FeeController::class,'index'])->name('admin.students.fees');
    $router->post('/students/{student}/fees',[FeeController::class,'store']);
    $router->get('/students/fees/{id}/edit',[FeeController::class,'edit'])->name('admin.students.fees.edit');
    $router->put('/students/fees/{id}/edit',[FeeController::class,'update'])->name('admin.students.fees.update');
    $router->get('/students/{student}/fees/{fee}/view',[FeeController::class,'view'])->name('admin.students.fees.view');

    // Transaction Route
    $router->get('/students/{student}/{fee}/transactions',[TransactionController::class,'create'])->name('admin.students.fees.transactions');
    $router->post('/students/{student}/{fee}/transactions',[TransactionController::class,'store'])->name('admin.students.fees.transactions');
    $router->get('/transactions/{id}/view',[TransactionController::class,'show'])->name('admin.transactions.show');
    $router->get('/transactions/{id}/invoice',[TransactionController::class,'invoice'])->name('admin.transactions.invoice');

    // Expense Route
    $router->resource('/expenses',ExpenseController::class)->names('admin.expenses');

    // Expense Category Route
    $router->resource('/expense-category',CategoryController::class)->names('admin.expense.category');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('users/export/', [StudentController::class, 'export']);

