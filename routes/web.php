<?php

use App\Livewire\Auth\ForgetPasswordPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\CancelPage;
use App\Livewire\CartPage;
use App\Livewire\CategoriesPage;
use App\Livewire\CheckoutPage;
use App\Livewire\HomePage;
use App\Livewire\MyOrderDetailsPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProductDetailsPage;
use App\Livewire\ProductsPage;
use App\Livewire\SuccessPage;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', LoginPage::class);

Route::get('/register', RegisterPage::class);

Route::get('/forget-password', ForgetPasswordPage::class);

Route::get('/reset-password', ResetPasswordPage::class);

Route::get('/', HomePage::class);

Route::get('/categories', CategoriesPage::class);

Route::get('/products', ProductsPage::class);

Route::get('/products/{product}', ProductDetailsPage::class);

Route::get('/cart', CartPage::class);

Route::get('/checkout', CheckoutPage::class);

Route::get('/my-orders', MyOrdersPage::class);

Route::get('/my-orders/{order}', MyOrderDetailsPage::class);

Route::get('/success', SuccessPage::class);

Route::get('/cancel', CancelPage::class);