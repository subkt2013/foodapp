<?php

use Illuminate\Support\Facades\Route;

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
