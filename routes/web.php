<?php

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

Route::get('/', function () {
    return view('listings',[
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' =>1,
                'title' => 'Listing One',
                'description' => 'A great villa in the center of the city'
            ],
            [
                'id' =>2,
                'title' => 'Listing Two',
                'description' => 'A great villa in the center of the city'
            ],
            [
                'id' =>3,
                'title' => 'Listing Three',
                'description' => 'A great villa in the center of the city'
            ],
            [
                'id' =>4,
                'title' => 'Listing Four',
                'description' => 'A great villa in the center of the city'
            ],
            [
                'id' =>5,
                'title' => 'Listing Five',
                'description' => 'A great villa in the center of the city'
            ],
            [
                'id' =>6,
                'title' => 'Listing Six',
                'description' => 'A great villa in the center of the city'
            ],
            [
                'id' =>7,
                'title' => 'Listing Seven',
                'description' => 'A great villa in the center of the city'
            ],
            [
                'id' =>8,
                'title' => 'Listing Eight',
                'description' => 'A great villa in the center of the city'
            ],
            [
                'id' =>9,
                'title' => 'Listing Nine',
                'description' => 'A great villa in the center of the city'
            ],
            [
                'id' =>10,
                'title' => 'Listing Ten',
                'description' => 'A great villa in the center of the city'
            ],
            ]

            
]);
});
 
