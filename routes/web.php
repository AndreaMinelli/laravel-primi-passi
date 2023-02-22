<?php

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

Route::get('/', function () {
    $logo_link = [
        'link' => 'home'
    ];
    $header_links = [
        [
            'text' => 'Info',
            'link' => 'info'
        ],
        [
            'text' => 'About us',
            'link' => 'about'
        ],
        [
            'text' => 'FAQs',
            'link' => 'faq'
        ],
    ];
    return view('home', compact('header_links', 'logo_link'));
})->name('home');

Route::get('/info', function () {
    $logo_link = [
        'link' => 'home'
    ];
    $header_links = [
        [
            'text' => 'Info',
            'link' => 'info'
        ],
        [
            'text' => 'About us',
            'link' => 'about'
        ],
        [
            'text' => 'FAQs',
            'link' => 'faq'
        ],
    ];
    return view('info', compact('header_links', 'logo_link'));
})->name('info');
