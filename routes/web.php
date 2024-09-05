<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\ImageUploadController;


// Route::get('/{locale}', function ($locale) {
//     if (! in_array($locale, ['en', 'es'])) {
//         abort(404);
//     }
//     App::setLocale($locale);

//     return view('/');
// });

// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
//     ],
//     function () {
Route::get('/', function () {
    return view('about');
});
//     }
// );

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('contact', function () {
    $result = DB::table('email')->get();
    return view('contact', ['posts' => $result]);
});


Route::get('post/create', [EmailController::class, 'create']);
Route::get('post/index', [EmailController::class, 'index']);
Route::post('insert', [EmailController::class, 'insert'])->name('post.insert');


Route::post('/upload-image', [ImageUploadController::class, 'store'])->name('image.upload');