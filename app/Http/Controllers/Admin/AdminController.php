<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            $users = User::where('email', 'like', '%' . $search . '%')->get();
        } else {
            $users = User::all();
        }

        return view('admin.admin', compact('users', 'search'));
    }
}
