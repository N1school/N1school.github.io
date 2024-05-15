<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
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
})->name("/");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/history', [App\Http\Controllers\History::class, 'history'])->name('history');
Route::get('/kazm', [App\Http\Controllers\History::class, 'kazm'])->name('kazm');
Route::get('/school', [App\Http\Controllers\History::class, 'school'])->name('school');
Route::get('/dimord', [App\Http\Controllers\History::class, 'dimord'])->name('dimord');
Route::get('/about', [App\Http\Controllers\History::class, 'about'])->name('about');
Route::post('send-chat-ai-message', 'App\Http\Controllers\ChatAiController@chat')->name('contact.chat');
Route::post('/send-email', 'App\Http\Controllers\EmailController@send')->name('send.email');
Route::get('/news', 'App\Http\Controllers\NewsController@index')->name('news.index');
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('/news', [NewsController::class, 'index'])->name('admin.news.index');
//    Route::get('/news/create', [App\Http\Controllers\NewsController::class, 'create'])->name('admin.news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('admin.news.store');
});
