<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageKController extends Controller
{
    public function index()
    {
        return view('pages.pageL');
    }

}
