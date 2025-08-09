<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ReporterController extends Controller
{
    public function index()
    {
        return view('reporters.index');
    }

    public function add()
    {
        return view('reporters.add');
    }
}
