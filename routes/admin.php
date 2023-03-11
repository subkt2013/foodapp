<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| 管理者画面用ルートファイル
| 
| 
|
*/

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/calendar', function () {
    return view('calendar');
});

//スケジュールの追加
Route::post('/schedule-add', [ScheduleController::class, 'scheduleAdd'])->name('schedule-add');

// イベント取得処理
Route::post('/schedule-get', [ScheduleController::class, 'scheduleGet'])->name('schedule-get');