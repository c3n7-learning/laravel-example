<?php

use Illuminate\Support\Facades\Route;
use Tefabi\Example\Tests\TestCase;

uses(TestCase::class)
    ->beforeEach(function () {
        Route::example();
    })
    ->in(__DIR__);
