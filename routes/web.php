<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LinkRepositoryController as LinkRepository_;
use App\Http\Controllers\SchoolController as School_;
use App\Http\Controllers\HomeController as Home_;
use App\Http\Controllers\AccountController as Account_;
use App\Http\Controllers\Auth\VerificationController as Verification_;
use App\Http\Controllers\WelcomeController as Welcome_;

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

// Route::view('/', 'welcome')->name('welcome'); using controller
Route::get('/', [Welcome_::class, 'index'])->name('welcome');

Route::view('/services/link_repository', 'link_repository');
Route::get('/services/link_repository/{area}', [LinkRepository_::class, 'index'])->name('link_repository');

Route::get('/services/link_repository/school/{school_id}', [School_::class, 'index'])->name('school');
Route::get('services/link_repository/school/{school_id}/add_link', [School_::class, 'addLinkView'])->middleware('auth')->name('add_link');
Route::post('/services/link_repository/school/add_link', [School_::class, 'addLink'])->name('add_link');

Auth::routes();
Route::get('/home', [Home_::class, 'index'])->name('home');

Route::get('/account', [Account_::class, 'index'])->middleware('auth')->name('account');
Route::post('/account', [Account_::class, 'userSchool'])->name('user_school');

Route::view('services', 'services');
Route::view('support', 'support');
Route::view('about', 'about');



// A route to display the email verification notification to the user with a link to verify email.
// A route to handle the user-click event to verify email.
// A route to resend email on user’s request.
Auth::routes(['verify' => true]);
Route::get('/verify', [Verification_::class, 'index'])->middleware('auth')->name('verification');