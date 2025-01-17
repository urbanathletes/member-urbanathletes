<?php

use App\Http\Controllers\BackInShapeController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\FreeTrialController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Rp199Controller;
use App\Http\Controllers\Rp288Controller;
use App\Http\Controllers\Rp77kController;
use App\Http\Controllers\Rp99kController;
use App\Http\Controllers\Sixpack3Controller;
use App\Http\Controllers\Sixpack4Controller;
use App\Http\Controllers\SpecialDealController;
use Illuminate\Support\Facades\Route;


Route::prefix('order')->name('order.')->group(function () {
  Route::get('', [OrderController::class, 'notData'])->name('notData');
  Route::post('', [OrderController::class, 'save'])->name('save'); // <=== ini masih dipakai
  Route::get('/{id}/status', [OrderController::class, 'status'])->name('status');
  Route::get('/status/{id}', [OrderController::class, 'searchDetail']);
  Route::get('/status', [OrderController::class, 'search'])->name('search');
});

Route::prefix('daftar')->name('daftar.')->group(function () {
  // Route::get('', [PublicController::class, 'daftar'])->name('gym');
  Route::get('', [PublicController::class, 'daftar'])->name('index');
  Route::get('/send/{kode}', [PublicController::class, 'daftarSend'])->name('send');
  Route::get('/confirm/{kode}/success', [PublicController::class, 'daftarConfirmSuccess'])->name('confirmSuccess');
  // Route::get('/confirm', [PublicController::class, 'daftarConfirm'])->name('confirm');
  Route::get('/confirm/{kode}', [InvoiceController::class, 'edit'])->name('invoiceEdit');
  Route::post('/confirm-update', [InvoiceController::class, 'update'])->name('updateConfirm');
  Route::post('', [PublicController::class, 'daftarSave'])->name('store');
});

Route::prefix('99k')->name('99k.')->group(function () {
  // Route::get('', function () {return view("public/content/99k/index2");})->name('index');
  Route::get('', function () {
    return view("public/content/99k/index2"); })->name('index');
  Route::get('/daftar', [Rp99kController::class, 'daftar'])->name('daftar');
  Route::get('/generate', [Rp99kController::class, 'generate'])->name('generate');
  Route::get('/proses/{kode}', [Rp99kController::class, 'proses'])->name('proses');
  Route::get('/confirm/{kode}', [Rp99kController::class, 'edit'])->name('invoiceEdit');
  Route::get('/confirm/{kode}/send', [Rp99kController::class, 'confirmSend'])->name('confirmSend');
  Route::post('', [Rp99kController::class, 'daftarSave'])->name('save');
  Route::put('{kode}', [Rp99kController::class, 'update'])->name('update');
  Route::post('/generate', [Rp99kController::class, 'updateKode'])->name('updateKode');
});

Route::prefix('77k')->name('77k.')->group(function () {
  // Route::get('', function () {return view("public/content/77k/index");})->name('index');
  Route::get('', [Rp77kController::class, 'daftar'])->name('daftar');
  // Route::get('/generate', [Rp77kController::class, 'generate'])->name('generate');
  // // Route::get('/proses/{kode}', [Rp77kController::class, 'proses'])->name('proses');
  // Route::get('/proses', [Rp77kController::class, 'proses'])->name('proses');
  // Route::get('/confirm/{kode}', [Rp77kController::class, 'edit'])->name('invoiceEdit');
  // Route::get('/confirm/{kode}/send', [Rp77kController::class, 'confirmSend'])->name('confirmSend');
  // Route::post('', [Rp77kController::class, 'save'])->name('save');
  // Route::put('{kode}',[Rp77kController::class, 'update'])->name('update');
  // Route::post('/generate',[Rp77kController::class, 'updateKode'])->name('updateKode');
});

Route::prefix('sixpack-3')->name('sixpack3.')->group(function () {
  Route::get('', function () {
    return view("public/content/sixpack3/sixpack-3"); })->name('index');
  Route::get('daftar', [Sixpack3Controller::class, 'daftar'])->name('daftar');
  Route::get('/send/{kode}', [Sixpack3Controller::class, 'send'])->name('send');
  Route::get('/confirm/{kode}', [Sixpack3Controller::class, 'edit'])->name('edit');
  Route::get('/confirm/{kode}/send', [Sixpack3Controller::class, 'confirmSend'])->name('confirmSend');
  Route::post('', [Sixpack3Controller::class, 'store'])->name('store');
  Route::put('{kode}', [Sixpack3Controller::class, 'update'])->name('update');
});

Route::prefix('288')->name('288.')->group(function () {
  Route::get('', function () {
    return view("public/promo/288/index"); })->name('index');
  Route::get('/daftar', [Rp288Controller::class, 'daftar'])->name('daftar');
  Route::get('/generate', [Rp288Controller::class, 'generate'])->name('generate');
  Route::get('/confirm', [Rp288Controller::class, 'confirm'])->name('confirm');
  Route::get('/send/{kode}', [Rp288Controller::class, 'send'])->name('send');
  Route::post('', [Rp288Controller::class, 'save'])->name('save');
  Route::post('order', [Rp288Controller::class, 'order'])->name('order');
  Route::put('/generate', [Rp288Controller::class, 'updateKode'])->name('updateKode');
  // Route::get('/daftar', [Rp99kController::class, 'daftar'])->name('daftar');
});

Route::prefix('199')->name('199.')->group(function () {
  //Route::get('', function () {return view("public/promo/199/index");})->name('index');
  //Route::get('/daftar', [Rp199Controller::class, 'daftar'])->name('daftar');
  //Route::get('/generate', [Rp199Controller::class, 'generate'])->name('generate');
  //Route::get('/confirm', [Rp199Controller::class, 'confirm'])->name('confirm');
  //Route::get('/send/{kode}', [Rp199Controller::class, 'send'])->name('send');
  //Route::post('', [Rp199Controller::class, 'save'])->name('save');
  //Route::post('order', [Rp199Controller::class, 'order'])->name('order');
  //Route::put('/generate',[Rp199Controller::class, 'updateKode'])->name('updateKode');
  // Route::get('/daftar', [Rp99kController::class, 'daftar'])->name('daftar');
});

Route::prefix('sixpack-challenge')->name('sixpack-challenge.')->group(function () {
  Route::get('', function () {
    return view("public/promo/sixpack-challenge/index"); })->name('index');
  Route::get('/daftar', [Sixpack4Controller::class, 'daftar'])->name('daftar');
  Route::get('/generate', [Sixpack4Controller::class, 'generate'])->name('generate');
  Route::get('/confirm', [Sixpack4Controller::class, 'confirm'])->name('confirm');
  Route::get('/send/{kode}', [Sixpack4Controller::class, 'send'])->name('send');
  Route::post('', [Sixpack4Controller::class, 'save'])->name('save');
  Route::post('order', [Sixpack4Controller::class, 'order'])->name('order');
  Route::put('/generate', [Sixpack4Controller::class, 'updateKode'])->name('updateKode');
});

Route::prefix('v2')->name('v2.')->group(function () {
  Route::prefix('back-in-shape')->name('back-in-shape.')->group(function () {
    Route::get('/proses', [BackInShapeController::class, 'proses']);
    Route::get('/generate', [BackInShapeController::class, 'generate'])->name('generate');
    Route::get('/{kdref}', [BackInShapeController::class, 'index']);
    Route::get('', [BackInShapeController::class, 'daftar'])->name('daftar');
    Route::post('', [BackInShapeController::class, 'save'])->name('save');
    Route::post('/updateKode', [BackInShapeController::class, 'updateKode'])->name('updateKode');
    Route::post('/savePay', [BackInShapeController::class, 'savePay'])->name('savePay');
    Route::get('/status/{id}', [BackInShapeController::class, 'status'])->name('status');
  });
});

Route::prefix('glute-challenge-01')->name('glute-challenge-01.')->group(function () {
  Route::get('', function () {
    return view("public/promo/glute-challenge/index"); })->name('index');
});

Route::prefix('special-deal')->name('special-deal.')->group(function () {
  Route::get('', [SpecialDealController::class, 'index'])->name('index');
  Route::post('', [SpecialDealController::class, 'store'])->name('store');
});

Route::prefix('free-trial')->name('free-trial.')->group(function () {
  Route::get('', [FreeTrialController::class, 'index'])->name('index');
  Route::post('', [FreeTrialController::class, 'store'])->name('store');
});