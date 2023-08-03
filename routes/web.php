<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorialController;






//search with livewire
Route::get('/', function () {
    return view('livewire.home');
});
