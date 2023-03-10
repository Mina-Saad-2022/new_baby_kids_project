<!--*******************           Route Dashboard           *******************-->

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\admin_controller;
use App\Http\Controllers\dashboard\dashboard_controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect',
    'localizationRedirect', 'localeViewPath']], function () {
    Auth::routes();
    Route::group(['prefix' => 'dashboard/admin', 'as' => 'dashboard.'], function () {



    /************************* open  home page *************************/

        Route::get('/index', [dashboard_controller::class, 'index'])->name('view_home_page');



//        // to open table users page
//        Route::get('All',[action_user::class, 'all_create'])->name('table_users');

    /*********************** open  admin page ***********************/

        Route::get('/All', [admin_controller::class, 'index'])->name('view_admin_page');


    /*********************** open  delete admin ***********************/

        Route::delete('delete/', [admin_controller::class, 'destroy'])->name('delete_admin');


    /*********************** open  edit admin ***********************/

        Route::get('/edit/{id}', [admin_controller::class, 'edit'])->name('edit_admin');


        Route::put('/edit.done',[admin_controller::class,'done_edit'])->name('done_edit');


        /************** open  create new user page by admin **************/

        Route::get('/create', [admin_controller::class, 'create'])->name('view_create_page');


        /************** to create new user **************/
       Route::post('/insert', [admin_controller::class, 'insert'])->name('create_user');


    });
});




