<?php

namespace App\Http\Controllers;
use App\Models\Cars;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Cars::inRandomOrder()->limit(3)->get();
        return view('welcome', compact('cars'));
    }
}
