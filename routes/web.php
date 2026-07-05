<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/listings', function () {
    return view('pages.listings');
});

Route::get('/product/beija-flor', function () {
    return view('pages.product-beija-flor');
});

Route::get('/product/el-mirador', function () {
    return view('pages.product-el-mirador');
});

Route::get('/product/pedra-branca', function () {
    return view('pages.product-pedra-branca');
});