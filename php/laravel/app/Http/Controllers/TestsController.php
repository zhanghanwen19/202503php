<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;


class TestsController extends Controller
{
    public function index(): Factory|Application|View
    {
        return view('tests.index');
    }

    public function introduce(): Factory|Application|View
    {
        return view('tests.introduce');
    }
}
