<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade AS PDF;

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
    $pdf = PDF::loadView('plantilla');
    return $pdf->download('invoice.pdf');
});
