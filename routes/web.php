<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sessioncontroller;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [sessioncontroller::class,'index']);
Route::get('/buat-session', [SessionController :: class,'buatSession']);
Route::get('/akses-session', [SessionController:: class, 'aksesSession' ]);
Route::get('/hapus-session', [SessionController:: class, 'hapusSession' ]);
Route :: get('/flash-session', [SessionController:: class, 'flashSession' ]);