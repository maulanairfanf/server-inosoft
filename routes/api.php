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

$currency = [[
    [
        "name" => "USD",
        "id" => "1",        "selected" => true,

   
    ],
    [
        "name" => "AED",
        "id" => "2",        "selected" => false,

    ],   [
        "name" => "RPH",
        "id" => "3",        "selected" => false,

    ]],[
    [
        "name" => "USD",
        "id" => "1",        "selected" => false,

   
    ],
    [
        "name" => "AED",
        "id" => "2",        "selected" => true,

    ],   [
        "name" => "RPH",
        "id" => "3",        "selected" => false,

    ]]
    ];

$uom = [
  [
        "name" => "SHP",
        "id" => "1",
        "selected" => true,
    ],
    [
        "name" => "PHS",
        "id" => "2",
        "selected" => false,

    ], [
        "name" => "HSP",
        "id" => "3",
        "selected" => false,

    ]
    ];

$charge =[
  [
        "name" => "Option 1",
        "id" => "1",
        "selected" => false,
    ],
    [
        "name" => "Option 2",
        "id" => "2",
        "selected" => false,
    ], [
        "name" => "Option 3",
        "id" => "3",
        "selected" => false,
    ]
    ];

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('json',function() {
//     return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
// });

Route::get('currency',function() use($currency) {
    return response()->json($currency);
})->name('currency');

Route::get('uom',function() use($uom) {
    return response()->json($uom);
})->name('uom');

Route::get('charge',function() use($charge) {
    return response()->json($charge);
})->name('charge');