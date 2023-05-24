<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainsController extends Controller
{
    public function index()
    {
        $trains = Train::orderBy('date_travel')->get();
        return view('home', compact('trains'));
    }
}
