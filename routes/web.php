<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainFolder.header');
});


route::get('/',[
    'uses' => 'headController@home',
    'as'   => 'home'
]);

route::get('/register_form',[
    'uses' => 'headController@registerPage',
    'as'   => 'registerPage'
]);

route::get('/nav',[
    'uses' => 'headController@nav', //nav&fotter
    'as'   => 'nav'
]);


route::get('/card_test',[
    'uses' => 'cardformController@formView', //card Form
    'as'   => 'formView'
]);

route::get('/user_login',[
    'uses' => 'loginController@viewLogin', //login form
    'as'   => 'viewLogin'
]);

route::get('/hospital_list',[
    'uses' => 'hospitallistController@listPage', //hospital list page
    'as'   => 'listPage'
]);
