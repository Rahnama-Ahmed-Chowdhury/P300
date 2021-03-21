<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AarticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DonarController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;



Route::get('/','App\Http\Controllers\AarticleController@home');
Route::get('/donar',[DonarController::class,'index']);
Route::get('/donar/{id}',[DonarController::class,'show']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/blog/{id}}',[BlogController::class,'blog.show']);
Route::get('/manuel',[PageController::class,'manuel']);



Route::get('/about-us',[PageController::class,'about']);
Route::get('/contact-us',[PageController::class,'contact']);

/*Route::get('/','App\Http\Controllers\DonarController@index');
Route::get('/','App\Http\Controllers\DonarController@show');
Route::get('/','App\Http\Controllers\BlogController@index');
Route::get('/','App\Http\Controllers\BlogController@show');
Route::get('/','App\Http\Controllers\PageController@manuel');
Route::get('/','App\Http\Controllers\PageController@about');
Route::get('/','App\Http\Controllers\PageController@contact');
*/

//Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes...


Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login')->name('auth.login');
Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');

    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('profiles', 'Admin\ProfilesController');
    Route::post('profiles_mass_destroy', ['uses' => 'Admin\ProfilesController@massDestroy', 'as' => 'profiles.mass_destroy']);
    Route::post('profiles_restore/{id}', ['uses' => 'Admin\ProfilesController@restore', 'as' => 'profiles.restore']);
    Route::delete('profiles_perma_del/{id}', ['uses' => 'Admin\ProfilesController@perma_del', 'as' => 'profiles.perma_del']);
    Route::resource('blogs', 'Admin\BlogsController');
    Route::post('blogs_mass_destroy', ['uses' => 'Admin\BlogsController@massDestroy', 'as' => 'blogs.mass_destroy']);
    Route::post('blogs_restore/{id}', ['uses' => 'Admin\BlogsController@restore', 'as' => 'blogs.restore']);
    Route::delete('blogs_perma_del/{id}', ['uses' => 'Admin\BlogsController@perma_del', 'as' => 'blogs.perma_del']);

});