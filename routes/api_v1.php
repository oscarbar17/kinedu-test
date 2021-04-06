<?php

use App\Http\Controllers\Api\v1\NodesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/nodes/{id}/{type}', [NodesController::class, 'show']);