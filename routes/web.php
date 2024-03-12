<?php

use Illuminate\Http\Request;
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
    return view('listings', [
        'heading'  => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus aliquid esse molestiae rem ipsa eius facere consequatur rerum! Cumque tempora maxime dicta voluptatem perferendis ad numquam blanditiis quas adipisci ea?'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus aliquid esse molestiae rem ipsa eius facere consequatur rerum! Cumque tempora maxime dicta voluptatem perferendis ad numquam blanditiis quas adipisci ea?'
            ]
        ]
    ]);
});
