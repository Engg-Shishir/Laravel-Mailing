<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Artisan;

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



Route::get('/card', [MailController::class, 'viewcard'])->name('cardview');
Route::get('/send', [MailController::class, 'sendcard'])->name('cardsend');
Route::get('/sendfile', [MailController::class, 'sendfile'])->name('sendfile');


Route::get('/clear', function() {
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:cache');

    return "Clear cache done ok";
});

Route::get('/create/{name}', function() {
    $exitCode = Artisan::call('make:view layout.{{$name}}');

    return "Clear cache done ok";
});

Route::get( '/view/{keyword}', function ( $keyword) {
    fopen( resource_path( 'views/' . $keyword . '.blade.php' ), 'w' );
    return view(  $keyword   );
});