<?php

use Illuminate\Support\Facades\Route;

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

// ================ nav bar ===============
Route::get('/', function () {
    return view('index');
});

Route::get('jobs/jobsIndex', function () {
    return view('jobs/jobsIndex');
})->name('jobsIndex');

Route::get('jobs/jobsSearch', function () {
    return view('jobs/jobsSearch');
})->name('jobsSearch');

Route::get('jobs/map', function () {
    return view('jobs/map');
})->name('map');

Route::get('jobs/myJobs', function () {
    return view('jobs/myJobs');
});

Route::get('jobs/jobsDetail', function () {
    return view('jobs/jobsDetail');
});
Route::get('jobs/history', function () {
    return view('jobs/history');
});

Route::get('jobs/testNoti', function () {
    return view('jobs/testNoti');
});
// ============ jobs detail ===========
Route::get('jobs/allJobs', function () {
    return view('jobs/allJobs');
})->name('allJobs');

Route::get('jobs/interestedJobs', function () {
    return view('jobs/interestedJobs');
})->name('interestedJobs');

Route::get('jobs/applyJobs', function () {
    return view('jobs/applyJobs');
})->name('applyJobs');

Route::get('jobs/historyCompanyJobs', function () {
    return view('jobs/historyCompanyJobs');
})->name('historyCompanyJobs');
