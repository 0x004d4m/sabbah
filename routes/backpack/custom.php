<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers',
], function () {
    Route::crud('expert', 'ExpertController');
    Route::crud('feature', 'FeatureController');
    Route::crud('main', 'MainController');
    Route::crud('plan', 'PlanController');
    Route::crud('screenshot', 'ScreenshotController');
    Route::crud('section', 'SectionController');
    Route::crud('service', 'ServiceController');
    Route::crud('sponser', 'SponserController');
    Route::crud('team', 'TeamController');
    Route::crud('video', 'VideoController');
});
