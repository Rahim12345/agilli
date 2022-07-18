<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PartnyorImageController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectImageController;
use App\Http\Controllers\sign\sign_in_upController;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

Route::get('langs/{locale}',[profileController::class,'langSwitcher'])
    ->name('lang.swithcher');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
    Lfm::routes();
});

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

    Route::group(['middleware'=>'locale'],function (){
        Route::get('/',[PagesController::class,'home'])->name('front.home');

        Route::get('/about',[PagesController::class,'about'])->name('front.about');

        Route::get('/works',[PagesController::class,'works'])->name('front.works');

        Route::get('/news',[PagesController::class,'news'])->name('front.news');
        Route::post('/news',[PagesController::class,'newsPost'])->name('front.news.post');
        Route::get('/news/{id}',[PagesController::class,'newsSingle'])->name('front.news.single');

    });

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

    Route::get('project-banner',[OptionController::class,'projectBanner'])
        ->name('project.banner');

    Route::post('project-banner',[OptionController::class,'projectBannerPost'])
        ->name('project.banner.post');

    Route::resource('category', CategoryController::class);

    Route::resource('project', ProjectController::class);
    Route::resource('project-images', ProjectImageController::class);

    Route::get('news-banner',[OptionController::class,'newsBanner'])
        ->name('news.banner');

    Route::post('news-banner',[OptionController::class,'newsBannerPost'])
        ->name('news.banner.post');
    Route::resource('news', NewsController::class);
});
