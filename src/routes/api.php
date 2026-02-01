<?php

use Illuminate\Support\Facades\Route;
use App\Models\Summary;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('summary.auth')->group(function () {

    // API Health Check
    Route::get('/', function () {
        return response()->json([
            'status' => 'success',
            'message' => 'API is working properly.'
        ]);
    })->name('api.home');

    // Dashboard Summary
    Route::get('/summary', function () {

        $summary = Summary::first();

        return response()->json([
            'status' => 'success',
            'data' => [
                'projects' => [
                    'ongoing'   => $summary->projects_ongoing,
                    'completed' => $summary->projects_completed,
                    'pending'   => $summary->projects_pending,
                ],
                'revenue' => [
                    'total'      => $summary->revenue_total,
                    'this_month' => $summary->revenue_this_month,
                ],
                'clients' => [
                    'total'          => $summary->clients_total,
                    'new_this_month' => $summary->clients_new_month,
                ],
            ]
        ]);
    })->name('api.summary');

});