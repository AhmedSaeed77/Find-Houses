<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\projectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\PlaceControll;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Models\Developer;

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

Route::get('/', function () { return view('index'); })->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () { return view('layoutsadawe.admin'); });
Route::get('/test', function () { return view('admin/testcontent'); });
Route::get('/regions', function () { return view('admin/regions'); })->name('regions');

/////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/project/{id}', [ProjectController::class, 'OneProject'])->name('project');
Route::get('/allplaces', [PlaceController::class, 'allplaces'])->name('allplace');
Route::get('/place/{id}', [PlaceController::class, 'Oneplace'])->name('place');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/search', [HomeController::class, 'search'])->name('searchProperty');
Route::post('/sendmessage', [MessageController::class, 'sendmessage'])->name('sendmessage');
Route::get('/allprojects', [ProjectController::class, 'allprojects'])->name('allproject');
Route::get('/project/{id}', [ProjectController::class, 'OneProject'])->name('project');
Route::get('/allplace', [PlaceController::class, 'allplace'])->name('allplace');
Route::get('/place/{id}', [PlaceController::class, 'OnePlace'])->name('place');
//////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/datatable', [UserController::class, 'datatable'])->name('datatable');
////////////////////////////////////////////////////////////////////////////////////////////////////////////



//admin dashboard routes
Route::prefix('admin')->group(function () {
    Route::get('check', [UserController::class, 'check'])->name('loginAdmin');
    Route::any('login', [UserController::class, 'login'])->name('login');
    // Route::any('logout', [UserController::class, 'logout'])->name('logout');
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/', function () {
            return view('admin/index');
        })->name('index');
        Route::any('logout', [UserController::class, 'logout'])->name('logout');
        Route::group(['prefix' => 'project', 'as' => 'pro.'], function () {
            Route::get('/project', [projectController::class, 'index'])->name('project');
            Route::get('/projectDatatable', [projectController::class, 'datatable'])->name('projectDatatable');
            Route::get('/create', [projectController::class, 'create'])->name('createProject');
            Route::post('/addproject', [projectController::class, 'store'])->name('addproject');
            Route::post('/deleteProject', [projectController::class, 'delete'])->name('deleteProject');
            Route::get('/edit/{id}', [projectController::class, 'edit'])->name('editProject');
            Route::post('/update/{id}', [projectController::class, 'update'])->name('updateProject');
        });
        // Route::group(['prefix' => '/place', 'as' => 'place.'], function () {
        //     Route::get('/places', [PlaceControll::class, 'show'])->name('places');
        //     Route::get('/add', function () {return view('places.addplace'); })->name('addplace');
        //     Route::post('/store', [PlaceControll::class, 'store'])->name('store');
        //     Route::post('/update', [PlaceControll::class, 'update'])->name('update');
        //     Route::get('/edit/{id}', [PlaceControll::class, 'edit'])->name('edit');
        //     Route::get('/delete/{id}', [PlaceControll::class, 'delete'])->name('delete');
        // });
        Route::group(['prefix' => 'place', 'as' => 'place.'], function () {
            Route::get('/places', [PlaceController::class, 'index'])->name('places');
            Route::get('/Datatable', [PlaceController::class, 'datatable'])->name('placeDatatable');
            Route::get('/create', [PlaceController::class, 'create'])->name('createplace');
            Route::post('/add', [PlaceController::class, 'store'])->name('addplace');
            Route::post('/delete', [PlaceController::class, 'delete'])->name('deleteplace');
            Route::get('/edit/{id}', [PlaceController::class, 'edit'])->name('editplace');
            Route::post('/update/{id}', [PlaceController::class, 'update'])->name('updateplace');
        });
        Route::group(['prefix' => 'type', 'as' => 'type.'], function () {
            Route::get('/type', [TypeController::class, 'index'])->name('type');
            Route::get('/Datatable', [TypeController::class, 'datatable'])->name('typeDatatable');
            Route::get('/create', [TypeController::class, 'create'])->name('createType');
            Route::post('/add', [TypeController::class, 'store'])->name('addType');
            Route::post('/delete', [TypeController::class, 'delete'])->name('deleteType');
            Route::get('/edit/{id}', [TypeController::class, 'edit'])->name('editType');
            Route::post('/update/{id}', [TypeController::class, 'update'])->name('updateType');
        });
        Route::group(['prefix' => 'status', 'as' => 'status.'], function () {
            Route::get('/status', [StatusController::class, 'index'])->name('status');
            Route::get('/Datatable', [StatusController::class, 'datatable'])->name('statusDatatable');
            Route::get('/create', [StatusController::class, 'create'])->name('createStatus');
            Route::post('/add', [StatusController::class, 'store'])->name('addStatus');
            Route::post('/delete', [StatusController::class, 'delete'])->name('deleteStatus');
            Route::get('/edit/{id}', [StatusController::class, 'edit'])->name('editStatus');
            Route::post('/update/{id}', [StatusController::class, 'update'])->name('updateStatus');
        });
        Route::group(['prefix' => 'category', 'as' => 'cat.'], function () {
            Route::get('/category', [CategoryController::class, 'index'])->name('category');
            Route::get('/Datatable', [CategoryController::class, 'datatable'])->name('categoryDatatable');
            Route::get('/create', [CategoryController::class, 'create'])->name('createCategory');
            Route::post('/add', [CategoryController::class, 'store'])->name('addCategory');
            Route::post('/delete', [CategoryController::class, 'deletex'])->name('deleteCategory');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('editCategory');
            Route::post('/update/{id}', [CategoryController::class, 'update'])->name('updateCategory');
        });
        Route::group(['prefix' => 'developer', 'as' => 'dev.'], function () {
            Route::get('/developer', [DeveloperController::class, 'index'])->name('developer');
            Route::get('/Datatable', [DeveloperController::class, 'datatable'])->name('developerDatatable');
            Route::get('/create', [DeveloperController::class, 'create'])->name('createDeveloper');
            Route::post('/add', [DeveloperController::class, 'store'])->name('addDeveloper');
            Route::post('/delete', [DeveloperController::class, 'delete'])->name('deleteDeveloper');
            Route::get('/edit/{id}', [DeveloperController::class, 'edit'])->name('editDeveloper');
            Route::post('/update/{id}', [DeveloperController::class, 'update'])->name('updateDeveloper');
        });
        Route::group(['prefix' => 'message', 'as' => 'message.'], function () {
            Route::get('/message', [MessageController::class, 'index'])->name('message');
            Route::get('/Datatable', [MessageController::class, 'datatable'])->name('messageDatatable');
        });
        Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
            Route::get('/setting', [SettingController::class, 'show'])->name('setting');
            Route::post('/setting/{id}', [SettingController::class, 'edit'])->name('editsetting');
        });
    });
    Route::get('/users', [UserController::class, 'index'])->name('users');

});
    
    
