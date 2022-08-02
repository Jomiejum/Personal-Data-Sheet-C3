<?php

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


use Knp\Snappy\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('c3data.index');
});

Route::get('/sender', function(){
    $pdf = App::make('snappy.pdf.wrapper');
    $pdf->loadview('c3data.index');

    $pdf->setOptions([
        'orientation' =>'landscape'
    ]);
    return $pdf->inline();
});

Route::resource('sheet','SheetController');




