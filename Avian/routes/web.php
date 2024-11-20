<?php

use App\Http\Controllers\TransactionController;

Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
Route::post('/transactions/store', [TransactionController::class, 'store'])->name('transactions.store');
Route::get('/transactions/report', [TransactionController::class, 'report'])->name('transactions.report');
Route::get('/transactions/report-data', [TransactionController::class, 'reportData'])->name('transactions.report-data');
