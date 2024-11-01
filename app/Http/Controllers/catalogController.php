<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class catalogController extends Controller
{
    public function index()
    {
        $cars = Cars::all();
        return view('catalog', compact('cars'));
    }
}
