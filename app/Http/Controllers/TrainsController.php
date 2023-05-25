<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;


class TrainsController extends Controller
{
    public function index()
    {
        $trains = Train::where('date_travel', '>=', now())
        ->orderBy('date_travel')
        ->get();
        return view('home', compact('trains'));
    }
}
