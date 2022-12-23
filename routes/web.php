<?php

use App\Jobs\SendReminderEmail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dispatch(new SendReminderEmail());
return 'Done';
});
