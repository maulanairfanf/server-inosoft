<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$posts = [
   1 => [
        "name" => "maulana",
        "umur" => 22
    ],
    2 =>[
        "name" => "irfan",
        "umur" => 22
    ]
    ];

$postss = [
   1 => [
        "name" => "irfan",
        "umur" => 22
    ],
    2 =>[
        "name" => "maulana",
        "umur" => 22
    ]
    ];

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('json',function() {
//     return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
// });

Route::get('json',function() use($posts) {
    return response()->json($posts);
})->name('json');

Route::get('jsonn',function() use($postss) {
    return response()->json($postss);
})->name('jsonn');