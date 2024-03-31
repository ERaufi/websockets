<?php

use App\Events\testingEvent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {

    event(new testingEvent('hello from Web.php'));

    return 'done';
});
