<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LinkRepositoryController as LinkRepository_;
use App\Http\Controllers\SchoolController as School_;
use App\Http\Controllers\HomeController as Home_;
use App\Http\Controllers\AccountController as Account_;
use App\Http\Controllers\Auth\VerificationController as Verification_;
use App\Http\Controllers\WelcomeController as Welcome_;
use App\Http\Controllers\TeacherRecordController as TeacherRecord_;
use App\Http\Controllers\CommentController as Comment_;
use App\Http\Controllers\SharedResourcesController as SharedResources_;
use App\Http\Controllers\CourseController as Course_;
use App\Http\Controllers\ExternalHelpController as ExternalHelp_;
use App\Http\Controllers\WelcomeFreshmanController as WelcomeFreshman_;

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
Route::get('services/link_repository/school/{school_id}/add_link', [School_::class, 'addLinkView'])->middleware('auth')->name('link');
Route::post('/services/link_repository/school/add_link', [School_::class, 'addLink'])->name('add_link');

Route::get('/services/teacher_record', [TeacherRecord_::class, 'index'])->name('teacher_record');
Route::post('/services/teacher_record', [TeacherRecord_::class, 'add_teacher'])->name('add_teacher');
Route::get('/services/teacher_record/add_comment/{teacher_id}', [Comment_::class, 'index'])->middleware('auth')->name('comment');
Route::post('/services/teacher_record/add_comment', [Comment_::class, 'add_comment'])->middleware('auth')->name('add_comment');

Route::get('/services/shared_resources', [SharedResources_::class, 'index'])->name('shared_resources');
Route::get('/services/shared_resources/school', [SharedResources_::class, 'by_school'])->name('by_school');
Route::get('/services/shared_resources/course/{id}', [Course_::class, 'index'])->name('course');
Route::get('/services/shared_resources/add_resource/{course_id}', [Course_::class, 'resource'])->middleware('auth')->name('resource');
Route::post('/services/shared_resources/add_resource', [Course_::class, 'add_resource'])->middleware('auth')->name('add_resource');

Route::get('/services/external_help', [ExternalHelp_::class, 'index'])->name('external_help');
Route::get('/services/external_help/add_help', [ExternalHelp_::class, 'add_help_view'])->middleware('auth')->name('help');
Route::post('/services/external_help/add_help', [ExternalHelp_::class, 'add_help'])->middleware('auth')->name('add_help');

Route::get('/services/welcome_freshman', [WelcomeFreshman_::class, 'index'])->name('welcome_freshman');
Route::get('/services/welcome_freshman/school', [WelcomeFreshman_::class, 'by_school'])->name('welcome_freshman_by_school');
Route::get('/services/welcome_freshman/school/{school_id}/edit', [WelcomeFreshman_::class, 'edit_view'])->middleware('auth')->name('welcome_freshman_edit_view');
Route::post('/services/welcome_freshman/edit', [WelcomeFreshman_::class, 'edit'])->middleware('auth')->name('welcome_freshman_edit');


Route::get('/account', [Account_::class, 'index'])->middleware('auth')->name('account');
Route::post('/account', [Account_::class, 'userSchool'])->name('user_school');

Route::view('documentation', 'documentation');
Route::view('support', 'support');
Route::view('about', 'about');
Route::view('contributing', 'contributing');


Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', [Home_::class, 'index'])->name('home');
Route::get('/verify', [Verification_::class, 'index'])->middleware('auth')->name('verification');


Route::get('/admin/{item}/{action}', function ($item, $action) {
    if (auth()->user()->user_type < 3) {
        return redirect()->route('welcome');
    }
    $exitCode = Artisan::call( $item . ':' . $action);
    $message = $item . ':' . $action . ' executed';
    return view('welcome', compact('exitCode', 'message'));

})->middleware('auth');