<?php

use App\Controllers\TestController;
use Laralite\Router\Route;


Route::get('/', [TestController::class,'index']);
