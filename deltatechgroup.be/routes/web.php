<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DeliveryController;


Route::get('/', function () {
    return view('welcome');
});
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/calcul-livraison', [DeliveryController::class, 'showForm'])->name('delivery.form');
Route::post('/calculer-prix', [DeliveryController::class, 'calculate'])->name('delivery.calculate');
Route::post('/confirmer-commande', [DeliveryController::class, 'confirm'])->name('delivery.confirm');
Route::get('/express', function () {
    return redirect()->route('blog.index');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/a-propos', function () {
    return view('about');
})->name('about');

Route::get('/valentine', function () {
    return view('valentine');
});

Route::get('/choose-destination', function () {
    return view('destination');
});

Route::get('/love-letter', function () {
    return view('letter');
});
