<?php

use App\Models\Record;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

//php artisan inspire
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

//Create random records for sample data
Schedule::call(function () {
    $rand = rand(0,3);

    if($rand) {
        Record::factory($rand)->create();
    }
})->everyMinute();

//Once daily, prune all tokens expired for over 24 hours
Schedule::command('sanctum:prune-expired --hours=24')->daily();
