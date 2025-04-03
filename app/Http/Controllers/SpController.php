<?php

namespace App\Http\Controllers;

use App\Services\SpEdu\SumLogic;
use Illuminate\Http\Request;

class SpController extends Controller
{
    public function handle(SumLogic $sum)
    {
        dd($sum->handle());
    }

    private function sum()
    {
        // return $sum->handle();
    }
}
