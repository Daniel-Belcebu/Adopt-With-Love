<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

Route::apiResource('animales', AnimalController::class);