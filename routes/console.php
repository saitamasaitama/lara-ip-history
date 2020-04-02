<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;

Artisan::command('vital', function () {
  $response=Http::get(config("vital.url"));
  \Log::info("vital");
  echo($response->status());
  echo($response->ok());
})->describe('vital signal send');
