<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\ServiceController;
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

// Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/sendmail',[SendMailController::class, 'index'])->name('mail');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/service/web-design-development', [ServiceController::class, 'webdesigndev'])->name('service.webdesigndev');
Route::get('/service/seo-search-engine-optimization', [ServiceController::class, 'seo'])->name('service.seo');
Route::get('/service/social-media-marketing', [ServiceController::class, 'socialmediamarketing'])->name('service.socialmediamarketing');
Route::get('/service/google-ads', [ServiceController::class, 'googleads'])->name('service.googleads');
Route::get('/service/email-marketing', [ServiceController::class, 'emailmarketing'])->name('service.emailmarketing');
Route::get('/service/graphic-designing', [ServiceController::class, 'graphicsdesigning'])->name('service.graphicsdesigning'); 
Route::get('/service/content-writing', [ServiceController::class, 'contentwriting'])->name('service.contentwriting'); 
Route::get('/service/google-my-business', [ServiceController::class, 'googlemybusiness'])->name('service.googlemybusiness'); 
Route::get('/service/e-commerce-website', [ServiceController::class, 'ecommercewebsite'])->name('service.ecommercewebsite'); 