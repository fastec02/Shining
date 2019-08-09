<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageHController extends Controller
{
    public function index()
    {
        return view('pages.pageI');
    }

}
