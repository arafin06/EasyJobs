<?php


//user

Route::post('new-user',[
    'uses'   => 'UserController@newUser',
    'as'    => 'new-user'
]);


Route::post('login-user',[
    'uses'   => 'UserController@loginUser',
    'as'    => 'login-user'
]);

Route::get('profile',[
    'uses'   => 'UserController@profile',
    'as'    => 'profile'
]);

Route::get('jobs',[
    'uses'   => 'UserController@jobs',
    'as'    => 'jobs'
]);


Route::post('user_logout',[
    'uses'   => 'UserController@userLogout',
    'as'    => 'user_logout'
]);

Route::get('edit-profile{id}',[
    'uses'   => 'UserController@editProfile',
    'as'    => 'edit-profile'
]);


Route::post('update-profile{id}',[
    'uses'   => 'UserController@updateProfile',
    'as'    => 'update-profile'
]);


Route::post('apply{id}',[
    'uses'   => 'UserController@apply',
    'as'    => 'apply'
]);






//company


Route::post('new-company',[
    'uses'   => 'CompanyController@newCompany',
    'as'    => 'new-company'
]);


Route::post('login-company',[
    'uses'   => 'CompanyController@loginCompany',
    'as'    => 'login-company'
]);



Route::get('dashboard',[
    'uses'   => 'CompanyController@dashboard',
    'as'    => 'dashboard'
]);


Route::get('post-job',[
    'uses'   => 'CompanyController@postJob',
    'as'    => 'post-job'
]);


Route::post('save-job',[
    'uses'   => 'CompanyController@saveJob',
    'as'    => 'save-job'
]);


Route::post('company_logout',[
    'uses'   => 'CompanyController@companyLogout',
    'as'    => 'company_logout'
]);





//home


Route::get('/', function () {
    return view('welcome');
});
