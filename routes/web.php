<?php

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
    return view('welcome');
});

Route::view('/services/link_repository', 'link_repository');

Route::get('/services/link_repository/{area}', function ($area) {
    $areas = [  'ing' => '1%',  'bio' => '2%',  'soc' => '3%'   ];
    $area_id = $areas[$area];

    $escuelas = App\Models\Escuela::where('id', 'LIKE', $area_id)
        ->orderBy('id')
        ->get();
    return view('link_repository')->with('escuelas', $escuelas);
});

Route::get('/services/link_repository/school/{escuela_id}', function ($escuela_id) {
    $escuela = App\Models\Escuela::find($escuela_id);
    $enlaces = App\Models\Enlace::where('escuela_id', $escuela_id)
        ->orderBy('id')
        ->get();
    return view('school')->with('escuela', $escuela)->with('enlaces', $enlaces);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
