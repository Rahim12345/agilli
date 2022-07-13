<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\PartnyorImageController;
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

    Route::get('home-banner',[OptionController::class,'homeBanner'])
        ->name('home.banner');

    Route::post('home-banner',[OptionController::class,'homeBannerPost'])
        ->name('home.banner.post');

    Route::get('strateji',[OptionController::class,'strateji'])
        ->name('home.strateji');

    Route::post('strateji',[OptionController::class,'stratejiPost'])
        ->name('home.strateji.post');

    Route::get('partnyor/{type}',[OptionController::class,'partnyor'])
        ->name('home.partnyor');

    Route::post('partnyor',[OptionController::class,'partnyorPost'])
        ->name('home.partnyor.post');

    Route::resource('partnyorlar', PartnyorImageController::class);

    Route::get('about-banner',[OptionController::class,'aboutBanner'])
        ->name('about.banner');

    Route::post('about-banner',[OptionController::class,'aboutBannerPost'])
        ->name('about.banner.post');
});
