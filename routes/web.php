<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\MySubmissionController;
use App\Http\Controllers\RenderFormController;
use App\Http\Controllers\SubmissionController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::redirect('/', url('home'));

Route::prefix('/form-builder')
	->name('frontend.')
	->group(function () {
		Route::redirect('/', url('/form-builder'.'/forms'));

		/**
		 * Public form url
		 */
		
		Route::get('/form/{identifier}',[RenderFormController::class, 'render'])->name('form.render');
		Route::post('/form/{identifier}', [RenderFormController::class, 'submit'])->name('form.submit');
		Route::get('/form/{identifier}/feedback', [RenderFormController::class, 'feedback'])->name('form.feedback');

		/**
		 * My submission routes
		 */
		Route::resource('/my-submissions', MySubmissionController::class);
		
		/**
		 * Form submission management routes
		 */
		Route::name('forms.')
			->prefix('/forms/{fid}')
			->group(function () {
				Route::resource('/submissions', SubmissionController::class);
			});

		/**
		 * Form management routes
		 */
		Route::resource('/forms', FormController::class);
	});



