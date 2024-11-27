<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\LavozimCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/home', [FrontendController::class, 'index']);
Route::get('/bizning-jamoa', [FrontendController::class, 'bizningJamoa'])->name('bizning-jamoa');
Route::get('/bizning-filiallar', [FrontendController::class, 'filial'])->name('bizning-filiallar');
Route::get('/jobs', [FrontendController::class, 'job'])->name('job');
Route::get('/jobs/{slug}', [FrontendController::class, 'jobDetail'])->name('job-detail');
Route::get('/positions/{slug}', [FrontendController::class, 'positionDetail'])->name('position.detail');


// Route to show the application form to non-authenticated users
Route::get('/application', [ApplicationController::class, 'create'])->name('application.create');
// Route to handle form submission for non-authenticated users
Route::post('/application', [ApplicationController::class, 'store'])->name('application.store');

// Route to show the about page
Route::get('/about', [AboutController::class, 'index'])->name('pages.about');

Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => '/admin', 'middleware' => ['auth']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    //Application form
    Route::resource('/application', ApplicationController::class)->except(['create', 'store']);
    Route::put('/application/{id}/update-status', [ApplicationController::class, 'updateStatus'])->name('application.updateStatus');

    Route::resource('/teams', TeamController::class);
    Route::resource('/branches', BranchController::class);
    Route::resource('/jobs', VacancyController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/positions', PositionController::class);
    Route::resource('/lavozim_categories', LavozimCategoryController::class);
});