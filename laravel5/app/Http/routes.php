<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

	Route::get('APR', function(){
	return 'Hello World';
});
	Route::get("pengguna/{pengguna}", function ($pengguna){
	return "Hallo World dari pengguna $pengguna";
});
	Route::get("berita/{berita?}", function ($berita = "Laravel 5"){
	return "berita $berita belum dibaca";
});
		Route::get("kelas_b/framework/{mhs?}", function ($mhs = "Anonim"){
	return "X X X X X X X SPITZERY X X X X X X X X  $mhs";
});