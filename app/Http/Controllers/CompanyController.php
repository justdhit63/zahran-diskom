<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyController extends Controller
{
    public function index(): View
    {
        return view('companies.index');
    }

    public function leader()
    {
        return view('companies.leader');
    }
    public function bank()
    {
        return view('companies.bank');
    }
}
