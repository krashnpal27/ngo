<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\DonationCategoryController;
use App\Http\Controllers\LoginController;

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


Route::get('/login', function () {
    return view('layouts.login');
});
// Route::get('/expense',function(){
//     return view('expense');
// })->name('expense');
// Route::get('/causes',function(){
//     return view('causes');
// })->name('causes');
// Route::get('/donation',function(){
//     return view('donation');
// })->name('donation');
// Route::get('/add_donation',function(){
//     return view('add_donation');
// })->name('add_donation');
Route::post('/login',[LoginController::class,'checklogin'])->name('login');
Route::group(['middleware' => ['auth']], function()
{   

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard'); 
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    Route::get('/donation',[DonationController::class,'index'])->name('donation');
    Route::post('/save_donation',[DonationController::class,'store'])->name('save_donation');
    Route::post('/update_donation',[DonationController::class,'update'])->name('update_donation');
    Route::post('/delete_donation',[DonationController::class,'destroy'])->name('delete_donation');
    Route::get('/add_donation',[DonationController::class,'create'])->name('add_donation');
    Route::get('/edit_donation/{id}',[DonationController::class,'edit'])->name('edit_donation');
    Route::get('/causes',[CauseController::class,'index'])->name('causes');
    Route::get('/add_causes',[CauseController::class,'create'])->name('add_causes');
    Route::post('/save_cause',[CauseController::class,'store'])->name('save_cause');
    Route::get('/edit_cause/{id}',[CauseController::class,'edit'])->name('edit_cause');
    Route::post('/update_cause',[CauseController::class,'update'])->name('update_cause');
    Route::post('/delete_cause',[CauseController::class,'destroy'])->name('delete_cause');
    Route::get('/expense',[ExpenseController::class,'index'])->name('expense');
    Route::get('/add_expense',[ExpenseController::class,'create'])->name('add_expense');
    Route::post('/save_expense',[ExpenseController::class,'store'])->name('save_expense');
    Route::get('/edit_expense/{id}',[ExpenseController::class,'edit'])->name('edit_expense');
    Route::post('/update_expense',[ExpenseController::class,'update'])->name('update_expense');
    Route::post('/delete_expense',[ExpenseController::class,'destroy'])->name('delete_expense');
    Route::get('/expense_cat',[ExpenseCategoryController::class,'index'])->name('expense_cat');
    Route::get('/add_expense_cat',[ExpenseCategoryController::class,'create'])->name('add_expense_cat');
    Route::post('/save_expense_cat',[ExpenseCategoryController::class,'store'])->name('save_expense_cat');
    Route::get('/edit_expense_cat/{id}',[ExpenseCategoryController::class,'edit'])->name('edit_expense_cat');
    Route::post('/update_expense_cat',[ExpenseCategoryController::class,'update'])->name('update_expense_cat');
    Route::post('/delete_expense_cat',[ExpenseCategoryController::class,'destroy'])->name('delete_expense_cat');
    Route::get('/donation_cat',[DonationCategoryController::class,'index'])->name('donation_cat');
    Route::get('/add_donation_cat',[DonationCategoryController::class,'create'])->name('add_donation_cat');
    Route::post('/save_donation_cat',[DonationCategoryController::class,'store'])->name('save_donation_cat');
    Route::get('/edit_donation_cat/{id}',[DonationCategoryController::class,'edit'])->name('edit_donation_cat');
    Route::post('/update_donation_cat',[DonationCategoryController::class,'update'])->name('update_donation_cat');
    Route::post('/delete_donation_cat',[DonationCategoryController::class,'destroy'])->name('delete_donation_cat');
});