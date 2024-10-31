<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail; 

class DetailController extends Controller
{
    public function index()
    {
        $items = Detail::all();
        return view('index', compact('details'));
    }
}
