<?php

use Illuminate\Support\Facades\Route;
use Filament\Forms\Components\View;
use App\Http\Controllers\Card_maker;
use App\Http\Livewire\CardForm;
use App\Http\Livewire\CardMaker;

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

Route::prefix('Card-maker')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::post('submit-data', 'submit_data@Card_maker')->name('submit-data');
    Route::post('Test', 'test@Card_maker')->name('test');
});

Route::get('/', CardForm::class);