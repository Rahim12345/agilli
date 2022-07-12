<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\sign\sign_in_upController;
use Illuminate\Support\Facades\Route;

Route::get('langs/{locale}',[profileController::class,'langSwitcher'])
    ->name('lang.swithcher');

Route::get('mode/{theme}',[profileController::class,'modeSwitcher'])
    ->name('mode.swithcher');

Route::get('/daxil-ol',[sign_in_upController::class,'login'])
    ->middleware('locale')
    ->name('login');

Route::post('daxil-ol',[sign_in_upController::class,'loginPost'])
    ->middleware('locale')
//    ->middleware('throttle:5,60')
    ->name('login.post');

Route::get('cixis-et',[sign_in_upController::class,'logout'])
    ->middleware( 'auth' )
    ->name( 'logout' );

Route::post('avatar-upload',[profileController::class,'avatarUpload' ])
    ->name('front.avatar.upload')
    ->middleware('auth');

Route::post('profile',[ profileController::class,'profileUpdate' ])
    ->name('front.profile.update')
    ->middleware('auth');

Route::get('/', function () {
    return view('welcome');
})->name('front.home');


Route::group(['prefix'=>'admin','middleware'=>['auth', 'locale']],function (){

    Route::get('/',[AdminController::class,'index'])
        ->name('back.dashboard');
    Route::get('profile',[profileController::class,'profile'])
        ->name('back.profile');

    Route::resource('option', OptionController::class);
});
