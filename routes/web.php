<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainFolder.header');
});
route::get('/register_form',[
    'uses' => 'headController@registerPage',
    'as'   => 'registerPage'
]);

route::get('/nav',[
    'uses' => 'headController@nav',
    'as'   => 'nav'
]);
