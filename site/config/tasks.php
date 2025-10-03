<?php

use Beebmx\KirbScheduler\Facades\Schedule;

Schedule::call(function () {
    //
})->monthly()->name('Example');
