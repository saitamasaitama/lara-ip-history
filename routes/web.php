<?php

use Illuminate\Support\Facades\Route;
//use Storage;
Route::get('/', function (Request $request) {
  
  Storage::append("ip.log",\Request::IP());
    return ["OK"];
});
