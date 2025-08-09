<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MediaController extends Controller
{
    public function index() {
        return view('medias.index');
    }

    public function add() {
        return view('medias.add');
    }
}
