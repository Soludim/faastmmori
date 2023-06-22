<?php

use App\Mail\Contact;
use App\Models\FAQs;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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


Route::name('home')->get('/', function () {
    return view('pages/index');
});
Route::name('about')->get('/about', function () {
    return view('pages/about');
});
Route::name('contact')->get('/contact', function () {
    return view('pages/contact');
});
Route::name('faq')->get('/faq', function () {
    $faqs = FAQs::all();
    return view('pages/faq', ['faqs' => $faqs]);
});
Route::name('products')->get('/products', function () {
    $products = Product::all();
    return view('pages/products', ['products' => $products]);
});
Route::name('news')->get('/news', function () {
    $news = News::all();
    return view('pages/news',  ['news' => $news]);
});
Route::name('news/news-details')->get('/news-details/{id}', function ($id) {
    $news = News::find($id);
    return view('pages/news-details', ['news' => $news]);
});
Route::name('send-mail')->post('/send-mail', function (Request $request) {
    $mail_data = $request->all();
    Mail::to('isolution455@gmail.com')->send(new Contact($mail_data));
    return back();
});
Route::fallback(function (){
    return view('pages/404');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('x_y_z/_123_/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
