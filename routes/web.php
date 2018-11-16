<?php

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

use App\Jobs\testTask;
use App\User;
use EasyWeChat\Factory;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task/{num}', function ($num) {
    for ($i=0;$i<$num;$i++) {
        testTask::dispatch(mt_rand(0, 30))->onQueue('default');
        testTask::dispatch(mt_rand(0, 10))->onQueue('messages');
    }
});
