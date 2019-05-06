<?php
use App\Http\Controllers;
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
//frontend flexshop
Route::get('/', function () {
    return view('newnews.home');
});
Route::get('/single', function () {
    return view('newnews.blogSingle');
});

//**back end
Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
    Route::group(['prefix' => 'panel'], function () {
        //category
        Route::resource('category', 'CateController', ['except' => 'destroy']);
        Route::get('category/{idDelete}/destroy', 'CateController@destroy')->name('category.delete');
        //category furniture
        Route::resource('catefurniture', 'CateFurController', ['except' => 'destroy']);
        Route::get('catefurniture/{idDelete}/destroy', 'CateFurController@destroy')->name('catefur.delete');
        //category product
        Route::resource('cateprod', 'CateProdController', ['except' => 'destroy']);
        Route::get('cateprod/{idDelete}/destroy', 'CateProdController@destroy')->name('cateprod.delete');
        //Furniture
        Route::resource('furniture', 'FurnitureController', ['except' => 'destroy']);
        Route::get('furniture/{idDelete}/destroy', 'FurnitureController@destroy')->name('furs.delete');
        // Tin tuc - cate
        Route::resource('catefengshui', 'CateTtPhongthuyController', ['except' => 'destroy']);
        Route::get('catefengshui/{idDelete}/destroy', 'CateTtPhongthuyController@destroy')->name('fengshui.delete');
        // Tin tuc -article
        Route::resource('fengshui', 'FengshuiController', ['except' => 'destroy']);
        Route::get('fengshui/{idDelete}/destroy', 'FengshuiController@destroy')->name('feng.delete');
        //Prods
        Route::resource('prods', 'ProdsController', ['except' => 'destroy']);
        Route::get('prods/{idDelete}/destroy', 'ProdsController@destroy')->name('prods.delete');
        //article
        Route::resource('news', 'NewsController', ['except' => 'destroy']);
        Route::get('news/{idDelete}/destroy', 'NewsController@destroy')->name('news.delete');
        //slider
        Route::resource('slider','SliderController',['except' => 'destroy']);
        Route::get('slider/{idDelete}/destroy','SliderController@destroy')->name('slider.delete');
        //partner
        Route::resource('partner','PartnerController',['except' => 'destroy']);
        Route::get('partner/{idDelete}/destroy','PartnerController@destroy')->name('partner.delete');
        //tags
        Route::resource('tags', 'TagsController', ['except' => 'destroy']);
        Route::get('tags/{idDelete}/destroy', 'TagsController@destroy')->name('tags.delete');
        //user
        Route::resource('user', 'UserController');
        //system
        Route::resource('/system','SystemController',['except'=>['destroy','create','show','store']]);
        //Pages
        Route::resource('/pages','PagesController',['except' => ['destroy','create','show','store']]);
        // Bao gia va tuyen dung
        Route::resource('/batu','BagiaTuduController',['except'=>'destroy']);
        Route::get('batu/{idDelete}/destroy', 'BagiaTuduController@destroy')->name('batu.delete');
        Route::resource('/tuyendung','TuyendungController',['except'=>'destroy']);
        Route::get('tuyendung/{idDelete}/destroy', 'BagiaTuduController@destroy')->name('tuyendung.delete');
        //comment
        Route::get('/comment','CommentController@index')->name('comment.index');
        Route::get('/comment/{idDelete}/destroy','CommentController@destroy')->name('comment.delete');
    });
});
Auth::routes();