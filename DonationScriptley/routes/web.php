<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\DonationCategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\RazorpayPaymentController;
// use Mail;

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
// mail sending
Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('k.p.shaktawat9@gmail.com')->send(new \App\Mail\SendMailphp($details));
   
    dd("Email is Sent.");
});
// mail sending
Route::get('/forgot',function(){
    return view('reset');
})->name('forgot');
Route::post('/reset_pass',[LoginController::class,'resetpassword'])->name('reset_pass');
// Route::post('generate-pdf', [PDFController::class, 'generatePDF']);
// Route::get('generate-pdf/{receipt}', [PDFController::class, 'generate2'])->name('pdf_view');

Route::group(['middleware' => ['guest']], function(){
    Route::get('/login', function () {
        return view('layouts.login');
    });
    Route::post('/login',[LoginController::class,'checklogin'])->name('login');
});
Route::group(['middleware' => ['auth']], function()
{   

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard'); 
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    Route::get('/pdf_view/{id}',[PDFController::class, 'generate2'])->name('pdf_view');
    Route::get('/profile',[LoginController::class,'profile'])->name('profile');
    Route::post('/update_profile',[LoginController::class,'update_profile'])->name('update_profile');
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

Route::get('razorpay-payment', [RazorpayPaymentController::class, 'index']);
Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');